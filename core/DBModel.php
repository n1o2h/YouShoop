<?php

namespace App\core;
use PDO;

/**
 * orm  map user class to database
 * base active record
 */
abstract class DBModel extends  Model
{
    abstract public static function tableName(): string;
    abstract public function attributes():array;
    abstract  public static function primaryKey() : string;

    public function save()
    {
        $tableName = static::tableName();
        $attributes = $this->attributes();


        if (!empty($this->{static::primaryKey()})) {
            $params = [];
            foreach ($attributes as $attr) {
                $params[] = "$attr = :$attr";
            }

            $sql = "UPDATE $tableName SET " . implode(', ', $params)
                . " WHERE " . static::primaryKey() . " = :id";

            $statement = self::prepare($sql);

            foreach ($attributes as $attribute) {
                $statement->bindValue(":$attribute", $this->{$attribute});
            }
            $statement->bindValue(':id', $this->{static::primaryKey()});

            return $statement->execute();
        }

        $params = array_map(fn($attr) => ":$attr", $attributes);
        $statement = self::prepare(
            "INSERT INTO $tableName (" . implode(',', $attributes) . ")
         VALUES (" . implode(',', $params) . ")"
        );

        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        return $statement->execute();
    }

    public static function prepare($sql)
    {
        return Application::$app->db->prepare($sql);
    }

    public  static function findOne($where) // [email => test@gmail.com , firstname => nouhaila]
    {
        //static will call the current class the findOne exist
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item){
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);
        return $statement->fetch();
    }

    public static function findAll()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);
        return $statement->fetchAll();
    }

    public  static function delete($where) // [email => test@gmail.com , firstname => nouhaila]
    {
        //static will call the current class the findOne exist
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("DELETE FROM $tableName WHERE $sql");
        foreach ($where as $key => $item){
            $statement->bindValue(":$key", $item);
        }
        return $statement->execute();
    }

    public function deleteInstance() {
        return self::delete([static::primaryKey() => $this->{static::primaryKey()}]);
    }





}