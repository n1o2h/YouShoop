<?php

namespace App\core;

use PDO;

class Database
{

    private static ?Database $instance = null;
    public PDO $pdo;


    private function __construct(array $config)
    {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';
        try {
            $this->pdo = new PDO($dsn, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch (\PDOException $e){
            echo 'error de la base de donne' . $e->getMessage();
        }
    }
    public static function getConnexion(array $config): ?Database
    {
        if(self::$instance === null){
            self::$instance = new Database($config);
        }
        return self::$instance;
    }

    public function  applyMigration()
    {
        $this->createMigrationTable();
        $appliedMigrations= $this->getAppliedMigrations(); // ['m001/initial']

        $newMigrations = [];
        $files = scandir(Application::$root_DIR . '/migrations');
        // array_diff => ['.', '..', 'm001.initial']
        $toApplyMigrations = array_diff($files, $appliedMigrations);
        foreach ($toApplyMigrations as $migration){
            if($migration === '.' || $migration === '..'){
                continue;
            }
            require_once Application::$root_DIR .'/migrations/'.$migration;
            $className ='App\\migrations\\' . pathinfo($migration, PATHINFO_FILENAME);
            $instance = new $className();
            $this->log("applying migrations $migration");
            $instance->up();
            $this->log("applying migrations $migration");
            $newMigrations[] = $migration;
        }

        if(!empty($newMigrations)){
            $this->saveMigrations($newMigrations);
        }
        else{
            $this->log('all migrations ara applied');
        }
    }
    public function createMigrationTable(){
       $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    migration VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
        ");
    }

    public function getAppliedMigrations()
    {
        $statement = $this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_COLUMN);
    }

    public function saveMigrations(array $migrations)
    {
        $str =implode(",", array_map(fn($m) => "('$m')", $migrations));
        $statememnt = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES 
        $str
");
        $statememnt->execute();

    }
    protected function log($message)
    {
        echo '['.date('Y-m-d H:i:s').']'.$message.PHP_EOL;
    }

    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }


}