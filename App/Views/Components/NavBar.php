<?php
use Core\View;
$display_register = $display_register ?? false;
?>

<nav class="navbar bg-dark py-2 px-2">
    <div class="container-fluid">
        <?php View::render("Components/Title"); ?>
        <?php if ($display_register) { ?>
        <a href="/register" class="text-decoration-none text-white">
            <button class="btn btn-primary px-4 ms-auto">
                Register
            </button>
        </a>
        <?php } ?>
    </div>
</nav>