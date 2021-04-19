<?php

namespace app\controllers;

use app\models\Film as ModelsFilm;
use system\Controller;
use system\lib\Util as LibUtil;

class Film extends Controller
{

    public function index()
    {
        require PATH_ROOT . '/app/models/Film.php';
        $model_film = new ModelsFilm;
        $all_films = $model_film->all();
        $this->render(
            "/film/index" ,
            [
                'films' => $all_films,
                'titrepage' => 'Les films'
            ]
        );

    }
}
