<?php

use Core\Session;
use Core\View;

$session = new Session();
$user = $session->get('user');
$current_url = $_SERVER['REQUEST_URI'];
$menu = [
    ['name' => 'Home', 'url' => '/', 'active' => $current_url === '/'],
    ['name' => 'Features', 'url' => '/features', 'active' => $current_url === '/features'],
    ['name' => 'Pricing', 'url' => '/pricing', 'active' => $current_url === '/pricing'],
    ['name' => 'News', 'url' => '/news', 'active' => $current_url === '/news'],
];
?>

<nav class="navbar navbar-expand-lg bg-dark py-2 px-2 navbar-dark">
    <div class="container-fluid">
        <?php View::render("Components/Title"); ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
            <?php if (!$user) { ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($menu as $item) { ?>
                <li class="nav-item">
                    <a class="<?= 'nav-link px-3' . ($item['active'] ? ' active' : '') ?>"
                        href="<?= $item['url'] ?>"><?= $item['name'] ?></a>
                </li>
                <?php } ?>
            </ul>
            <a href="/register" class="text-decoration-none text-white">
                <button class="btn btn-primary px-4 ms-auto">
                    Register
                </button>
            </a>
            <?php } ?>
        </div>
    </div>
</nav>