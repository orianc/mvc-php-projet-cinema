<?php

namespace app\controllers;

use app\models\Acteur as ModelsActeur;

class Acteur
{

    function __construct()
    {
    }

    public function index()
    {   
        require PATH_ROOT . "/app/models/acteur.php";
        $model_acteur = new ModelsActeur;
        $acteurs = $model_acteur->all();
        $titre = 'Acteur';
        $page = PATH_ROOT . "/app/views/acteur/index.php";
        require PATH_ROOT. "/app/views/base.php";


    }
}
