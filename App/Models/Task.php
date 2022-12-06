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

    public function create($data)
    {
        $sql = "INSERT INTO $this->_table (title, description, user_id, due_date) VALUES (:title, :description, :user_id, :due_date)";
        $result = $this->DB()
            ->prepare($sql)
            ->execute($data);

        return $result;
    }

    public function completeTask($user_id, $id)
    {
        $sql = "UPDATE $this->_table SET completed = 1 WHERE id = :id AND user_id = :user_id";
        $result = $this->DB()
            ->prepare($sql)
            ->execute([
                "id" => $id,
                "user_id" => $user_id,
            ]);

        return $result;
    }

    public function deleteTask($user_id, $id)
    {
        $sql = "DELETE FROM $this->_table WHERE id = :id AND user_id = :user_id";
        $result = $this->DB()
            ->prepare($sql)
            ->execute([
                "id" => $id,
                "user_id" => $user_id,
            ]);

        return $result;
    }

    public function uncompleteTask($user_id, $id)
    {
        $sql = "UPDATE $this->_table SET completed = 0 WHERE id = :id AND user_id = :user_id";
        $result = $this->DB()
            ->prepare($sql)
            ->execute([
                "id" => $id,
                "user_id" => $user_id,
            ]);

        return $result;
    }

    public function getTasks($user_id, $status)
    {
        $sql = "";

        if ($status === "upcoming") $sql = "SELECT * FROM $this->_table WHERE user_id = :user_id AND due_date > NOW() AND completed = 0";
        else if ($status === "today") $sql = "SELECT * FROM $this->_table WHERE user_id = :user_id AND due_date = CURDATE()";
        else if ($status === "overdue") $sql = "SELECT * FROM $this->_table WHERE user_id = :user_id AND due_date < NOW() AND completed = 0";
        else $sql = "SELECT * FROM $this->_table WHERE user_id = :user_id";

        $stmt = $this->DB()->prepare($sql);
        $stmt->execute([
            "user_id" => $user_id,
        ]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
            $result[$key]["due_date"] = isset($value["due_date"]) ? date("d M Y", strtotime($value["due_date"])) : "";
        }

        return $result;
    }
}