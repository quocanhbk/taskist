<?php
use Core\View; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>
<style>
#container {
    background-image: url("https://img.freepik.com/free-vector/blue-pink-halftone-background_53876-99004.jpg?w=2000");
    background-size: cover;
}
</style>

<body>
    <div class="d-flex flex-column vh-100 bg-light">
        <?php View::render("Components/NavBar"); ?>
        <div class="overflow-auto d-flex flex-column align-items-center">
            <div class="container-fluid d-flex flex-column align-items-center">
                <div class="text-center p-5 d-flex w-100 align-items-center flex-column"
                    style="margin-top: 6rem; margin-bottom: 4rem; ">
                    <h1 style="font-size: 4rem; font-family: 'Racing Sans One'; width: 40rem;">
                        Organize your work and life, finally.
                    </h1>
                    <p class="fs-4" style="width: 40rem;">
                        Become focused, organized, and calm with <span class="fw-bold">Taskist</span>. The world’s #1
                        task manager and to-do list app.
                    </p>
                    <a class="btn btn-primary btn-lg mt-2" href="/register">Start for free</a>
                </div>
                <img src="https://images.pexels.com/photos/796602/pexels-photo-796602.jpeg" alt="Taskist"
                    style="width: 50rem;margin-bottom: 12rem;" class="rounded">

                <div class="d-flex container justify-content-between" style="margin-bottom: 12rem;">
                    <div style="width: 30rem;">
                        <p class="mb-1" style="font-size: 0.8rem;">Get more done</p>
                        <h2 class="fw-semibold mb-1">Add your tasks.</h2>
                        <h2 class="fw-semibold mb-1">Organize your life.</h2>
                        <h2 class="fw-semibold mb-2">Achieve more every day.</h2>
                        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut at iure
                            placeat. Provident omnis
                            eveniet earum tempora quis quae at!</p>
                    </div>
                    <img src="https://images.pexels.com/photos/1226398/pexels-photo-1226398.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Taskist" style="width: 30rem" class="rounded">
                </div>
                <div class="d-flex container justify-content-between" style="margin-bottom: 12rem;">
                    <img src="https://images.pexels.com/photos/3243/pen-calendar-to-do-checklist.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Taskist" style="width: 30rem" class="rounded">
                    <div style="width: 30rem;">
                        <p class="mb-1" style="font-size: 0.8rem;">Clear your mind</p>
                        <h2 class="fw-semibold mb-1">Reach that mental clarity</h2>
                        <h2 class="fw-semibold mb-1">you've been longing for.</h2>
                        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut at iure
                            placeat. Provident omnis
                            eveniet earum tempora quis quae at!</p>
                    </div>
                </div>
                <div class="container d-flex flex-column align-items-center" style="margin-bottom: 12rem;">
                    <h1 style="max-width: 30rem;" class="text-center">
                        "Todoist makes it easy to go as simple or as complex as you want"</h1>
                    <h2 class="text-secondary fs-5">- Somebody</h2>
                    <a href="/features" style="text-decoration: none; mt-2;">Explore more features</a>
                    <img src="https://images.pexels.com/photos/131979/pexels-photo-131979.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Taskist" style="width: 30rem;" class="rounded mt-5">
                </div>
            </div>
            <div id="footer" class="container-fluid bg-dark p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-light mb-0 fs-4" style="font-family: 'Racing Sans One'">Taskist</p>
                    <a href="https://github.com/quocanhbk/taskist" target="_blank" class="text-info">Github</a>
                    <p class="text-light mb-0">December 2022</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>