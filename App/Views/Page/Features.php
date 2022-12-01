<?php
use Core\View; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features | Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>

<style>
#con-first{
    background-image: url("img/features-hero-bg-w_2348.webp");
    background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}



</style>








<body>
    <div class="d-flex flex-column vh-100">
        <?php View::render("Components/NavBar"); ?>
        <div class="container-fluid d-flex flex-grow-1 align-items-center justify-content-center flex-column" id="con-first">
            <h1>FROM OVERWHELMED TO ON TOP OF IT</h1><br>
            <img src="bg-1.jpg" alt="no">
            <p style="text-align: center; padding-left: 20px; padding-right:20px ;">Todoist gives you the confidence that everything’s organized and accounted for, so you can make progress on the things that are important to you.</p>
        </div>
    </div>
</body>

</html>