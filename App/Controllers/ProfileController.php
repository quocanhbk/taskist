<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;
use Core\Controller;
use Core\Session;

class ProfileController extends Controller
{
    public function index()
    {
       // return home if user is not logged in
       $session = new Session();
       if (!$session->get("user")) {
           return $this->redirect("/");
       }

        View::render("Page/Profile");
    }

    public function updateAvatar()
    {
        // return home if user is not logged in
        $session = new Session();
        if (!$session->get("user")) {
            return $this->redirect("/");
        }

        // get user data
        $user = $session->get("user");

        // get avatar file
        $avatar = $_FILES["avatar"];

        // check if file is valid
        if ($avatar["error"] !== 0) {
            return $this->redirect("/profile");
        }

        // check if file is image
        if (!in_array($avatar["type"], ["image/jpeg", "image/png"])) {
            return $this->redirect("/profile");
        }

        // check if file is less than 2MB
        if ($avatar["size"] > 2000000) {
            return $this->redirect("/profile");
        }

        // get file extension
        $file_extension = pathinfo($avatar["name"], PATHINFO_EXTENSION);

        // generate new file name
        $new_file_name = $user["id"] . "." . $file_extension;

        $avatar_path = APPLICATION_PATH . "/public/assets/avatars/" . $new_file_name;

        // move file to public folder
        move_uploaded_file($avatar["tmp_name"], $avatar_path);

        // update user avatar
        $model = new User();
        $model->updateAvatar($user["id"], "/assets/avatars/" . $new_file_name);

        // update session
        $user["avatar"] = "/assets/avatars/" . $new_file_name;
        $session->set("user", $user);

        // redirect to profile
        return $this->redirect("/profile");
    }
}