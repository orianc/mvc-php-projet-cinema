<?php

namespace app\controllers;

use app\models\Film as ModelsFilm;
use Util;

class Film
{

    function __construct()
    {
        // echo "Contruct controller film";
    }

    public function index()
    {
        require PATH_ROOT . '/app/models/Film.php';
        $model_film = new ModelsFilm;
        $films = $model_film->all();
        Util::dd($films);
        $titre = 'Films';
        $page = PATH_ROOT . '/app/views/film/index.php';
        require PATH_ROOT . '/app/views/base.php';
    }
}
