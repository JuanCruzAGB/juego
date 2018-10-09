<?php
    use Core\App;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inicio</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/web/home.css">
</head>
<body>
    <header>
        <?php include(App::getViewsPath() . '/components/header.php') ?>
    </header>

    <main>
        <section>
            <h2>Estamos en la seccion: Home</h2>
        </section>
    </main>

    <footer>
        <?php include(App::getViewsPath() . '/components/footer.php') ?>
    </footer>
</body>
</html>