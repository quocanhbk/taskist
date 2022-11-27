<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Core\Session;

class HomeController extends Controller
{
    public function index()
    {
        $session = new Session();

        // redirect to /app if user is logged in
        if ($session->get("user")) {
            return $this->redirect("/app");
        }

        View::render("Page/Index");
    }
}
