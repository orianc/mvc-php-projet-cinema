<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet MVC - <?= $titre ?></title>
    <link rel="stylesheet" href="<?= BASE_URL  ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL  ?>/assets/css/style.css">

</head>

<body>
    <?php
    require PATH_ROOT . '/app/views/navbar.php';
    require $page;
    ?>
</body>

</html>