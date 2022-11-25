<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;

class Home extends Controller {
    public function index() {
        View::render("Page/Index", [
            "title" => "Home"
        ]);
    }
}