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
    background-image: url("img/bg-1.jpg");
    background-position: top; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
}



</style>








<body>
    <div class="d-flex flex-column vh-100">
        <?php View::render("Components/NavBar"); ?>
        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="con-first">
            <div class="row justify-content-center" style="margin-top: 100px;">
                <div class="col-6" style="text-align:center ; padding: 20px ;">
                <h1 style="font-size: 60px; font-weight: 1000;">FROM OVERWHELMED TO ON TOP OF IT</h1><br>
                </div>
            </div>
            
            <div class="row justify-content-center" style="margin-bottom: 50px;">
                <div class="col-8">
                    <p style="text-align: center; padding-left: 20px; padding-right:20px; font-weight: 700; font-size: 20px;">Todoist gives you the confidence that everything's organized and accounted for, 
                so you can make progress on the things that are important to you.</p>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-6">
                    <iframe width="600" height="337" src="https://www.youtube.com/embed/8ZKq0r-g87M" title="What's Todoist?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                </div>
            </div>
        </div>
    </div>
</body>

</html>