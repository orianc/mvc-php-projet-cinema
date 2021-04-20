<?php

namespace app\controllers;

use system\Controller;

class Home extends Controller
{

    public function index()
    {

        $this->render(
            "home/index",
            [
                'titrepage' => 'Accueil'
            ]
        );
    }
}
