<?php
namespace app\controllers;


class Film
{

    function __construct()
    {
        // echo "Contruct controller film";
    }

    public function index()
    {
        $titre = 'Films';
        $page = PATH_ROOT . '/app/views/film/index.php';
        require PATH_ROOT. '/app/views/base.php';
        
    }
}
