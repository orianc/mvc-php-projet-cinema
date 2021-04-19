<?php
namespace app\controllers;


class Home
{

    function __construct()
    {
        // echo "Contruct controller Home";
    }

    public function index()
    {   
        $titre = 'Accueil';

        $page = PATH_ROOT . '/app/views/home/index.php';
        require PATH_ROOT. '/app/views/base.php';
    }
}
