<?php

namespace App\Controllers;

use Core\Controller;
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

        View::render("Page/App");
    }
}
