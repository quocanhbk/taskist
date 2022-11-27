<?php
use Core\View;

$error = $error ?? null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php View::render("Libraries/Bootstrap"); ?>
    <title>Register | Taskist</title>
</head>

<body class="bg-light">
    <div class="d-flex flex-column vh-100">

        <?php View::render("Components/NavBar"); ?>
        <div class="flex-grow-1 container d-flex align-items-center justify-content-center">
            <div>
                <?php if ($error) {
                    echo "<div class='alert alert-danger mt-3'>$error</div>";
                } ?>
                <div class="shadow-sm p-3 px-4 rounded-2 bg-white mw-100" style="width: 25rem;">
                    <h4 class="border-bottom pb-2">Register an account</h4>
                    <form class="mt-3" method="POST" action="/register">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                autocomplete="new-password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                autocomplete="new-password" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <button class="btn btn-primary w-100">Register</button>
                    </form>
                    <div class="border-top mt-3 pt-3 text-center">
                        Already have an account?
                        <a href="/login" class="text-decoration-none">Login</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>