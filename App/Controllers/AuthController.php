<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use App\Models\User;
use Core\Session;

class AuthController extends Controller
{
    public function indexRegister()
    {
        // return home if user is already logged in
        $session = new Session();
        if ($session->get("user")) {
            return $this->redirect("/");
        }

        View::render("Page/Register");
    }

    public function indexLogin()
    {
        // return home if user is already logged in
        $session = new Session();
        if ($session->get("user")) {
            return $this->redirect("/");
        }

        View::render("Page/Login");
    }

    public function register()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password_confirmation = $_POST["password_confirmation"];

        // username must be between 6 and 24 characters
        if (strlen($username) < 6 || strlen($username) > 24) {
            return View::render("Page/Register", [
                "error" => "Username must be between 6 and 24 characters",
            ]);
        }

        // username must be unique
        $user = new User();
        $existing_user = $user->getByUsername($username);
        if ($existing_user) {
            return View::render("Page/Register", [
                "error" => "Username already exists",
            ]);
        }

        // password must be between 6 and 24 characters
        if (strlen($password) < 6 || strlen($password) > 24) {
            return View::render("Page/Register", [
                "error" => "Password must be between 6 and 24 characters",
            ]);
        }

        if ($password !== $password_confirmation) {
            return View::render("Page/Register", [
                "error" =>
                    "Password and password confirmation must be the same",
            ]);
        }

        $model = new User();
        $user = $model->create([
            "username" => $username,
            "password" => $password,
        ]);

        // set session
        $session = new Session();
        $session->set("user", $user);

        // redirect to home
        return $this->redirect("/");
    }

    public function login()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $model = new User();
        $user = $model->getByUsername($username);

        if (!$user) {
            return View::render("Page/Login", [
                "error" => "User not found",
            ]);
        }

        if ($user["password"] !== $password) {
            return View::render("Page/Login", [
                "error" => "Password is incorrect",
            ]);
        }

        // set session
        $session = new Session();
        $session->set("user", $user);

        // redirect to home
        return $this->redirect("/");
    }

    public function logout()
    {
        $session = new Session();
        $session->destroy();

        return $this->redirect("/");
    }
}