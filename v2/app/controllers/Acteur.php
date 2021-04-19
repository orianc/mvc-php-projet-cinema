<?php

namespace app\controllers;

use app\models\Acteur as ModelsActeur;
use system\Controller;

class Acteur extends Controller
{

    public function index()
    {
        // Dialog avec DB
        require PATH_ROOT . "/app/models/acteur.php";
        $model_acteur = new ModelsActeur;
        $all_acteurs = $model_acteur->all();
        $titre = 'Acteur';
        // Chargement de la view
        $this->render(
            "acteur/index",
            [
                'titrepage' => 'Les acteurs',
                'acteurs' => $all_acteurs
            ]
        );
    }
}
