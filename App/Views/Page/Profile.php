<?php

use Core\Session;
use Core\View; 
$user = Session::get('user');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>

<body>
    <div class="d-flex flex-column vh-100 bg-light">
        <?php View::render("Components/NavBar"); ?>
        <div class="container py-3">
            <div style="max-width: 20rem">
                <h1>Profile</h1>
                <div class="border rounded-circle overflow-hidden mt-4 bg-white" style="width: 10rem; height: 10rem">
                    <object data="<?= $user["avatar"] ?>" type="image/png" style="width: 100%; height: 100%;">
                        <img src="/assets/default-avatar.png" alt="avatar" class="rounded-circle"
                            stylle="width: 100%; height: 100%">
                    </object>
                </div>
                <h2 class="mt-2 border-bottom pb-3 mb-3"><?= $user["username"] ?></h2>
                <div class="mb-3">
                    <form action="/profile/avatar" method="POST" enctype="multipart/form-data">
                        <label for="avatar" class="form-label">Update Avatar</label>
                        <input class="form-control mb-3" accept="image/png, image/jpeg" type="file" name="avatar"
                            id="avatar">
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </form>
                </div>
                <div class="mb-3 border-top pt-3">
                    <form action="/logout" method="POST">
                        <button type="submit" class="btn btn-danger w-100">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>