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
