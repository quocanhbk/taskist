<?php

use Core\Session;
use Core\View;

$session = new Session();
$user = $session->get("user");
$uncompleted_tasks = array_filter($tasks, function ($task) {
    return !$task["completed"];
});

$completed_tasks = array_filter($tasks, function ($task) {
    return $task["completed"];
});
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App | Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>

<body>
    <div class="d-flex flex-column" style="min-height: 100vh;">
        <?php View::render("Components/NavBar"); ?>
        <div class="d-flex flex-grow-1">
            <div class="border-end p-4" style="width: 18rem;">
                <div id="tasks-filter">
                    <a href="/app" class="btn w-100 mb-2">Inbox</a>
                    <a href="/app?status=today" class="btn w-100 mb-2">Today</a>
                    <a href="/app?status=upcoming" class="btn w-100 mb-2">Upcoming</a>
                    <a href="/app?status=overdue" class="btn w-100">Overdue</a>
                </div>
            </div>
            <div class="container py-3 flex-grow-1">
                <div class="d-flex w-100 justify-content-between align-items-center border-bottom pb-2 mb-3">
                    <h3 class="mb-0">Tasks</h3>
                    <div class="d-flex">
                        <button type="button" class="btn btn-primary ms-3" data-bs-toggle="modal"
                            data-bs-target="#create-task-modal">
                            Create new task
                        </button>
                    </div>
                    <?php View::render("Components/CreateTaskModal"); ?>
                </div>
                <div>
                    <p id="no-tasks-text" class="text-secondary <?= count($uncompleted_tasks) > 0  ? 'd-none' : '' ?>">
                    </p>
                    <div id="uncompleted-tasks-container">
                        <?php foreach($uncompleted_tasks as $task) {?>
                        <div class="shadow-sm rounded-1 px-3 py-2 mb-2" style="transition: all 0.3s ease-in-out">
                            <div class="d-flex w-100">
                                <input class="form-check-input task-checkbox" style="height: 1.2rem; width: 1.2rem;"
                                    type="checkbox" task-id="<?= $task["id"] ?>" onchange="toggleTaskCompletion(this)"
                                    <?= $task["completed"] ? "checked" : "" ?>>
                                <div class="ms-3">
                                    <p class="mb-0"><?= $task["title"] ?></p>
                                    <p class="text-black-50 mb-0 mt-1">
                                        <?= $task["description"] ?>
                                    </p>
                                    <p class="ms-auto text-secondary mb-0 mt-1" style="font-size: 0.8rem;">
                                        <?= $task["due_date"] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="mt-5">
                        <div
                            class="w-100 d-flex justify-content-between mb-3 border-bottom pb-2 <?= count($completed_tasks) > 0 ? "" : "d-none" ?>">
                            <h5 class="mb-0" id="completed-tasks-title">Completed</h5>
                        </div>
                        <div id="completed-tasks-container">
                            <?php foreach($completed_tasks as $task) {?>
                            <div class="shadow-sm rounded-1 px-3 py-2 mb-2 text-decoration-line-through"
                                style="transition: all 0.3s ease-in-out;">
                                <div class="d-flex">
                                    <input class="form-check-input task-checkbox" type="checkbox"
                                        style="height: 1.2rem; width: 1.2rem;" task-id="<?= $task["id"] ?>"
                                        onchange="toggleTaskCompletion(this)"
                                        <?= $task["completed"] ? "checked" : "" ?>>
                                    <div class="ms-3">
                                        <p class="mb-0"><?= $task["title"] ?></p>
                                        <p class="text-black-50 mb-0 mt-1">
                                            <?= $task["description"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const completedTasksContainer = document.querySelector("#completed-tasks-container");
    const uncompletedTasksContainer = document.querySelector("#uncompleted-tasks-container");
    const noTasksText = document.querySelector("#no-tasks-text");
    const completedTasksTitle = document.querySelector("#completed-tasks-title");

    const renderNoTasksText = () => {
        const status = new URLSearchParams(window.location.search).get("status");
        if (status === "today") {
            noTasksText.innerText = "You have no tasks for today";
        } else if (status === "upcoming") {
            noTasksText.innerText = "You have no upcoming tasks";
        } else if (status === "overdue") {
            noTasksText.innerText = "You have no overdue tasks";
        } else {
            noTasksText.innerText = "You have no tasks";
        }
    }

    renderNoTasksText()

    const toggleTaskCompletion = (target) => {
        const taskId = target.getAttribute("task-id");
        const checked = target.checked;

        const status = window.location.search.split("=")[1];
        console.log(status)

        if (checked) {
            // when checked, move the task to the completed tasks container
            const task = target.parentElement.parentElement;
            const completedTask = task.cloneNode(true);

            // remove the task from the uncompleted tasks container
            task.style.opacity = 0;
            setTimeout(() => {
                if (!status || status === "today") {
                    completedTask.classList.add("text-decoration-line-through");
                    completedTasksContainer.prepend(completedTask);
                }
                task.remove();
                if (uncompletedTasksContainer.childElementCount === 0) {
                    noTasksText.classList.remove("d-none");
                }
            }, 300);
            // update the task in the database
            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", `/api/task/${taskId}/complete`, true);
            xhttp.send();
        } else {
            // when unchecked, move the task to the uncompleted tasks container
            const task = target.parentElement.parentElement;
            const uncompletedTask = task.cloneNode(true);
            uncompletedTask.classList.remove("text-decoration-line-through");
            uncompletedTasksContainer.appendChild(uncompletedTask);
            // remove the task from the completed tasks container
            task.remove();
            // update the task in the database
            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", `/api/task/${taskId}/uncomplete`, true);
            xhttp.send();

            // if completed tasks container is empty, hide the completed tasks title
            if (completedTasksContainer.childElementCount === 0) {
                completedTasksTitle.classList.add("d-none");
            }
            noTasksText.classList.add("d-none")

        }

    }

    const tasksFilterLinks = document.querySelectorAll("#tasks-filter a");

    // add active class to the current filter link
    tasksFilterLinks.forEach((link) => {
        if (link.getAttribute("href") === window.location.pathname + window.location.search) {
            link.classList.remove("btn-light")
            link.classList.add("btn-primary");
        } else {
            link.classList.remove("btn-primary");
            link.classList.add("btn-light")
        }
    });
    </script>
</body>

</html>