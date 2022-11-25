
<?php use Core\View; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title><?php echo $title ?></title>
        <?php View::render("Libraries/Bootstrap") ?>
    </head>
    <body class="bg-light">
        <div class="container py-4 d-flex align-items-center justify-content-center vh-100">
            <div class="p-4 rounded-1 bg-white shadow-sm">
                <?php echo $errorinfo; ?>
            </div>
        </div>
    </body>
</html>
