<?php
// Constantes de chemin

use system\lib\Util;
use system\Router;

define("PATH_ROOT", dirname($_SERVER['SCRIPT_FILENAME']));
define('BASE_URL', dirname($_SERVER['SERVER_NAME']));

// Chargement
require PATH_ROOT . './system/lib/Util.php';
require PATH_ROOT . './system/Model.php';
require PATH_ROOT . './system/Controller.php';
require PATH_ROOT . './system/Rooter.php';

Router::run();
