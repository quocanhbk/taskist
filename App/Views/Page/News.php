<?php
use Core\View; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>

<body>
    <div class="d-flex flex-column vh-100">
        <?php View::render("Components/NavBar"); ?>
        <div class="container-fluid d-flex flex-grow-1 align-items-center justify-content-center">
            <h1>NEWS PAGE - TO DO</h1>
        </div>
    </div>
</body>

</html>