<?php
// Constantes de chemin

use system\lib\Util;

define("PATH_ROOT", dirname($_SERVER['SCRIPT_FILENAME']));
define('BASE_URL', dirname($_SERVER['SERVER_NAME']));

// Chargement
require PATH_ROOT . './system/lib/Util.php';
require PATH_ROOT . './system/Model.php';
require PATH_ROOT . './system/Controller.php';


// Routage
// 1. S'occuper du controller
// 2. Méthode
// 3. Param

if (isset($_GET['url'])) {
    $controller_name = $_GET['url'];
}else{ 
    $controller_name ='home';
}

if (isset($_GET['action'])) {
    $method = $_GET['action'];
}else {
    $method = 'index';
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else {
    $id = 0;
}

require PATH_ROOT."/app/controllers/$controller_name.php";
$controller = "app\controllers\\$controller_name";
$c = new $controller;
$c->$method($id);
