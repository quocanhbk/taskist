<?php

namespace Core;

use Config\Database;
use PDO;

abstract class Model
{
    static $db = null;

    public $_table;

    public function __construct($table_name)
    {
        if (self::$db == null) {
            $dsn =
                "mysql:host=" .
                Database::DB_HOST .
                ";dbname=" .
                Database::DB_NAME .
                ";charset=utf8";
            $db = new PDO($dsn, Database::DB_USER, Database::DB_PASSWORD);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db = $db;
        }

        $this->_table = $table_name;
    }

    // public function insert(array $data): int {
    //     $columns = implode(', ', array_keys($data));
    //     $values = implode(', ', array_map(fn($value) => "'$value'", array_values($data)));

    //     $sql = "INSERT INTO $this->_table ($columns) VALUES ($values)";
    //     $stmt = self::$db->prepare($sql);
    //     $stmt->execute();

    //     return self::$db->lastInsertId();
    // }

    // public function update(int $id, array $data): int {
    //     $columns = implode(', ', array_map(fn($key) => "$key = '$data[$key]'", array_keys($data)));

    //     $sql = "UPDATE $this->_table SET $columns WHERE id = $id";
    //     $stmt = self::$db->prepare($sql);
    //     $stmt->execute();

    //     return $stmt->rowCount();
    // }

    // public function delete(int $id): int {
    //     $sql = "DELETE FROM $this->_table WHERE id = $id";
    //     $stmt = self::$db->prepare($sql);
    //     $stmt->execute();

    //     return $stmt->rowCount();
    // }

    protected function DB(): PDO
    {
        return static::$db;
    }

    public function getLastRow()
    {
        $sql = "SELECT * FROM $this->_table ORDER BY id DESC LIMIT 1";
        $stmt = $this->DB()->prepare($sql);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
