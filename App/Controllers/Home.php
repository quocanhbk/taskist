<?php

namespace App\Controllers;

use App\Models\Task;
use Core\View;
use Core\Controller;

class Home extends Controller {
    public function index() {
        $task = new Task();
        $tasks = $task->all();

        View::render("Page/Index", [
            "tasks" => $tasks
        ]);
    }
}