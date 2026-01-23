<?php

namespace App\models;

use App\core\DBModel;

class Category extends DBModel
{
    public int $id;
    public string $name = '';
    public string $description = '';

    public function __construct() {
    }
    public static function tableName(): string
    {
        return 'categories';
    }

    public function attributes(): array
    {
        return ['name', 'description'];
    }

    public static function primaryKey(): string
    {
        return 'id';
    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'description' => [self::RULE_REQUIRED],
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
