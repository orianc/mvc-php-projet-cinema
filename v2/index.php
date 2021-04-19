<?php
// Constantes de chemin

define("PATH_ROOT", dirname($_SERVER['SCRIPT_FILENAME']));
define('BASE_URL', dirname($_SERVER['SERVER_NAME']));

// Chargement
require PATH_ROOT . './system/lib/Util.php';
require PATH_ROOT . './system/Model.php';


// Routage

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $controller_name = $url;
    require PATH_ROOT."/app/controllers/$controller_name.php";
    $controller = "app\controllers\\$controller_name";
    $c = new $controller;
    $c->index();
}
else {
    require PATH_ROOT."/app/controllers/home.php";
    $c = new \app\controllers\Home();
    $c->index();
}
