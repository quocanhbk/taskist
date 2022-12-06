<?php

namespace App\Models;

use Core\Model;

class User extends Model
{
    public function __construct()
    {
        parent::__construct("users");
    }

    public function create($data)
    {
        $sql = "INSERT INTO $this->_table (username, password) VALUES (:username, :password)";
        $stmt = $this->DB()->prepare($sql);
        $stmt->execute([
            "username" => $data["username"],
            "password" => $data["password"],
        ]);

        return $this->getLastRow();
    }

    public function getByUsername($username)
    {
        $sql = "SELECT * FROM $this->_table WHERE username = :username";
        $stmt = $this->DB()->prepare($sql);
        $stmt->execute([
            "username" => $username,
        ]);

        return $stmt->fetch();
    }

    public function updateAvatar($user_id, $avatar)
    {
        $sql = "UPDATE $this->_table SET avatar = :avatar WHERE id = :id";
        $stmt = $this->DB()->prepare($sql);
        $stmt->execute([
            "avatar" => $avatar,
            "id" => $user_id,
        ]);
    }
}