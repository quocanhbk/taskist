<?php

namespace App\Controllers;

use App\Models\Task;
use Core\Controller;
use Core\Request;
use Core\Session;

class TaskController extends Controller {
    public function createTaskApi() {
        $session = new Session();
        $user = $session->get("user");

        if (!$user) {
            return $this->json([
                "status" => "error",
                "message" => "You are not logged in",
            ], 401);
        }

        // parse the request body
        $data = json_decode(file_get_contents("php://input"), true);

        $title = $data["title"];
        $description = $data["description"];
        $due_date = $data["due_date"];

        // title is required
        if (!$title) {
            return $this->json([
                "status" => "error",
                "message" => "Title is required",
            ], 400);
        }

        // title must be less than 255 characters
        if (strlen($title) > 255) {
            return $this->json([
                "status" => "error",
                "message" => "Title must be less than 255 characters",
            ], 400);
        }

        $model = new Task();

        $result = $model->create([
            "title" => $title,
            "description" => $description,
            "user_id" => $user["id"],
            "due_date" => $due_date ? $due_date : null,
        ]);

        if (!$result) {
            return $this->json([
                "status" => "error",
                "message" => "Failed to create task",
            ], 500);
        }

        return $this->json([
            "status" => "success",
            "message" => "Task created successfully",
            "data" => [
                "id" => $model->lastInsertId(),
            ],
        ]);
    }

    public function completeTaskApi() {
        $session = new Session();
        $user = $session->get("user");

        if (!$user) {
            return $this->json([
                "status" => "error",
                "message" => "You are not logged in",
            ], 401);
        }

        $id = Request::getParam("id"); 

        $model = new Task();

        $result = $model->completeTask($user["id"], $id);

        if (!$result) {
            return $this->json([
                "status" => "error",
                "message" => "Failed to complete task",
            ], 500);
        }

        return $this->json([
            "status" => "success",
            "message" => "Task completed successfully",
        ]);
    }

    public function uncompleteTaskApi() {
        $session = new Session();
        $user = $session->get("user");

        if (!$user) {
            return $this->json([
                "status" => "error",
                "message" => "You are not logged in",
            ], 401);
        }

        $id = Request::getParam("id"); 

        $model = new Task();

        $result = $model->uncompleteTask($user["id"], $id);

        if (!$result) {
            return $this->json([
                "status" => "error",
                "message" => "Failed to uncomplete task",
            ], 500);
        }

        return $this->json([
            "status" => "success",
            "message" => "Task uncompleted successfully",
        ]);
    }

    public function getCompletedTasksTodayApi() {
        $session = new Session();
        $user = $session->get("user");

        if (!$user) {
            return $this->json([
                "status" => "error",
                "message" => "You are not logged in",
            ], 401);
        }

        $model = new Task();

        $tasks = $model->getCompletedTasksToday($user["id"]);

        return $this->json([
            "status" => "success",
            "data" => $tasks,
        ]);
    }
}