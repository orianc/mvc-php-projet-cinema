<?php
// Constantes de chemin
define("PATH_ROOT",dirname($_SERVER['SCRIPT_FILENAME']));
define('BASE_URL', dirname($_SERVER['SERVER_NAME']));

// Chargement
require PATH_ROOT.'./system/library-local/Utiles.php';

Util::dd();