<?php

namespace App\Models;

use Core\Model;
use PDO;

class Task extends Model
{
    public function __construct()
    {
        parent::__construct("tasks");
    }

    public function all()
    {
        $sql = "SELECT * FROM $this->_table";
        $result = $this->DB()
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
