<?php

use Core\Session;
use Core\View;

$session = new Session();
$user = $session->get('user');
?>

<nav class="navbar bg-dark py-2 px-2">
    <div class="container-fluid">
        <?php View::render("Components/Title"); ?>
        <?php if (!$user) { ?>
        <a href="/register" class="text-decoration-none text-white">
            <button class="btn btn-primary px-4 ms-auto">
                Register
            </button>
        </a>
        <?php } ?>
    </div>
</nav>