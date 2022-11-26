<?php

use Core\Session;
use Core\View;

$session = new Session();
$user = $session->get("user");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>

<body>
    <?php View::render("Components/NavBar", [
        "display_register" => $user ? false : true,
    ]); ?>
    <div class="container-fluid">
        <?php if ($user) {
            echo "<h1>Welcome, " . $user["username"] . "</h1>";
            echo "<form method='POST' action='/logout'><button class='btn btn-danger'>Logout</button></form>";
        } else {
            echo "<h1>Welcome to Taskist</h1>";
        } ?>
    </div>
</body>

</html>