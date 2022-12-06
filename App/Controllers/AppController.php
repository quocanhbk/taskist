<?php

namespace App\Controllers;

use App\Models\Task;
use Core\Controller;
use Core\Request;
use Core\Session;
use Core\View;

class AppController extends Controller
{
    public function index()
    {
        // return home if user is not logged in
        $session = new Session();
        if (!$session->get("user")) {
            return $this->redirect("/");
        }

        $status = Request::getQuery("status");

        $model = new Task();
        $tasks = $model->getTasks($session->get("user")["id"], $status);

        View::render("Page/App", [
            "tasks" => $tasks
        ]);
    }
}