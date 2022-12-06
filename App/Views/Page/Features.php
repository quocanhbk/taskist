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


<body>
    <div class="d-flex flex-column vh-100 bg-light">
        <?php View::render("Components/NavBar"); ?>
        <div class="overflow-auto d-flex flex-column align-items-center">
            <div class="text-center p-5 d-flex w-100 align-items-center flex-column"
                style="margin-top: 6rem; margin-bottom: 4rem; ">
                <h1 style="font-size: 4rem; font-family: 'Racing Sans One'; width: 40rem;">
                    From overwhelmed to on top of it
                </h1>
                <p class="fs-4" style="width: 40rem;">
                    Todoist gives you the confidence that everything’s organized and accounted for, so you can make
                    progress on the things that are important to you.
                </p>
            </div>
            <img src="https://images.pexels.com/photos/796602/pexels-photo-796602.jpeg" alt="Taskist"
                style="width: 50rem;margin-bottom: 12rem;" class="rounded">

            <div class="d-flex container justify-content-between" style="margin-bottom: 12rem;">
                <img src="https://images.pexels.com/photos/1226398/pexels-photo-1226398.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Taskist" style="height: 20rem" class="rounded">
                <div style="width: 30rem;">
                    <h2 class="fw-semibold mb-1">Start each day feeling calm and in control</h2>
                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut at iure
                        placeat. Provident omnis
                        eveniet earum tempora quis quae at!</p>
                    <div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2 mb-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#quickadd">Quick Add</p>
                            <div class="collapse" id="quickadd" collapse-group="start-each-day">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas similique
                                ratione debitis voluptates aut, eligendi tempora esse praesentium rem.
                            </div>
                        </div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2 mb-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#recurring">Recurring due dates
                            </p>
                            <div class="collapse" id="recurring" collapse-group="start-each-day">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum praesentium optio
                                dolores repudiandae aspernatur rerum nam facere illum repellendus quidem placeat, omnis,
                                vero, voluptas fuga eaque sunt expedita sint sed?
                            </div>
                        </div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#section">Sections & subtasks
                            </p>
                            <div class="collapse" id="section" collapse-group="start-each-day">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptas quae facilis?
                                Dignissimos, atque quia!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex container justify-content-center border rounded p-4" style="margin-bottom: 12rem;">
                <p style="max-width: 30rem;" class="mb-0">
                    “Taskist gives me the peace of mind knowing I am doing exactly what I need to do, exactly when I
                    need to
                    do it.” - Ashley W.
                </p>
            </div>

            <div class="d-flex container justify-content-between" style="margin-bottom: 12rem;">
                <div style="width: 30rem;">
                    <h2 class="fw-semibold mb-1">Focus your energy on the right things</h2>
                    <p class="text-secondary">Todoist surfaces the right tasks at the right times so you always know
                        what to focus on next.</p>
                    <div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2 mb-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#priority">Priority levels</p>
                            <div class="collapse" id="priority" collapse-group="focus">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas similique
                                ratione debitis voluptates aut, eligendi tempora esse praesentium rem.
                            </div>
                        </div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2 mb-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#favorites">Favorites
                            </p>
                            <div class="collapse" id="favorites" collapse-group="focus">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum praesentium optio
                                dolores repudiandae aspernatur rerum nam facere illum repellendus quidem placeat, omnis,
                                vero, voluptas fuga eaque sunt expedita sint sed?
                            </div>
                        </div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#reminder">Reminders
                            </p>
                            <div class="collapse" id="reminder" collapse-group="focus">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptas quae facilis?
                                Dignissimos, atque quia!
                            </div>
                        </div>
                    </div>
                </div>
                <img src="https://images.pexels.com/photos/1989820/pexels-photo-1989820.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt="Taskist" style="height: 20rem" class="rounded">
            </div>

            <div class="d-flex container justify-content-center border rounded p-4" style="margin-bottom: 12rem;">
                <p style="max-width: 30rem;" class="mb-0">
                    “Taskist helps me organize my time based on the most important things in my life. As a result, I am
                    happier and more confident.” - Pedro W.
                </p>
            </div>

            <div class="d-flex container justify-content-between" style="margin-bottom: 12rem;">
                <img src="https://images.pexels.com/photos/1226398/pexels-photo-1226398.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Taskist" style="height: 20rem" class="rounded">
                <div style="width: 30rem;">
                    <h2 class="fw-semibold mb-1">Share the workload</h2>
                    <p class="text-secondary">From business ventures to grocery lists, divide and conquer your daily
                        tasks in shared projects.</p>
                    <div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2 mb-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#delegate">Deletegate tasks</p>
                            <div class="collapse" id="delegate" collapse-group="workload">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas similique
                                ratione debitis voluptates aut, eligendi tempora esse praesentium rem.
                            </div>
                        </div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2 mb-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#notif">Notifications
                            </p>
                            <div class="collapse" id="notif" collapse-group="workload">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum praesentium optio
                                dolores repudiandae aspernatur rerum nam facere illum repellendus quidem placeat, omnis,
                                vero, voluptas fuga eaque sunt expedita sint sed?
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex container justify-content-center border rounded p-4" style="margin-bottom: 12rem;">
                <p style="max-width: 30rem;" class="mb-0">
                    “I use Taskist to successfully manage all the work of my 13 staff across three departments.” - John
                    W.
                </p>
            </div>

            <div class="d-flex container justify-content-between" style="margin-bottom: 12rem;">
                <div style="width: 30rem;">
                    <h2 class="fw-semibold mb-1">Peronalize your task views</h2>
                    <p class="text-secondary">Build your own task views to fit your unique style and workflow.</p>
                    <div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2 mb-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#board">Boards</p>
                            <div class="collapse" id="board" collapse-group="personalize">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas similique
                                ratione debitis voluptates aut, eligendi tempora esse praesentium rem.
                            </div>
                        </div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2 mb-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#label">Labels
                            </p>
                            <div class="collapse" id="label" collapse-group="personalize">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum praesentium optio
                                dolores repudiandae aspernatur rerum nam facere illum repellendus quidem placeat, omnis,
                                vero, voluptas fuga eaque sunt expedita sint sed?
                            </div>
                        </div>
                        <div style="background-color: #EFEFEF; cursor:pointer; transition: all 0.3s ease-in-out"
                            class="rounded px-4 py-2">
                            <p class="mb-0" data-bs-toggle="collapse" data-bs-target="#filter">Filters
                            </p>
                            <div class="collapse" id="filter" collapse-group="personalize">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptas quae facilis?
                                Dignissimos, atque quia!
                            </div>
                        </div>
                    </div>
                </div>
                <img src="https://images.pexels.com/photos/1989820/pexels-photo-1989820.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt="Taskist" style="height: 20rem" class="rounded">
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

    <script>
    const collapses = ["quickadd", "recurring", "section", "priority", "favorites", "reminder", "delegate", "notif",
        "board", "label", "filter"
    ];
    collapses.forEach(collapse => {
        document.getElementById(collapse).addEventListener("hidden.bs.collapse", () => {
            document.getElementById(collapse).parentElement.style.backgroundColor = "#EFEFEF"
        })
        document.getElementById(collapse).addEventListener("shown.bs.collapse", () => {
            document.getElementById(collapse).parentElement.style.backgroundColor = "#00DDFF33"

            // close other collapse in the same group
            const group = document.getElementById(collapse).getAttribute("collapse-group")
            collapses.forEach(c => {
                if (c != collapse && document.getElementById(c).getAttribute(
                        "collapse-group") == group && document.getElementById(c).classList
                    .contains("show")) {
                    const col = new bootstrap.Collapse(document.getElementById(c))
                    col.hide()
                }
            })
        })
    })
    </script>
</body>

</html>