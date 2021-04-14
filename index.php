<?php
// Util::dd();

// Constantes de chemin
define("PATH_ROOT", dirname($_SERVER['SCRIPT_FILENAME']));
define('BASE_URL', dirname($_SERVER['SERVER_NAME']));

// Chargement
require PATH_ROOT . './system/library-local/Utiles.php';


// Routage

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $controller_name = $url;
    require PATH_ROOT."/app/controllers/$controller_name.php";
    $controller = "app\controllers\\$controller_name";
    $c = new $controller;
    $c->index();
}
