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
            "/film/index",
            [
                'films' => $all_films,
                'titrepage' => 'Les films'
            ]
        );
    }
    /**
     * Cette méthode récupère le détail d'un film
     *
     * @param [type] $id
     * @return void
     */
    public function detail($id)
    {
        require PATH_ROOT . '/app/models/Film.php';
        $model_film = new ModelsFilm;
        $get_film = $model_film->getById($id);
        $this->render(
            "/film/detail",
            [
                'film' => $get_film,
                'titrepage' => "Détail du film : '$get_film->titre_film'"
            ]
        );
    }
}
