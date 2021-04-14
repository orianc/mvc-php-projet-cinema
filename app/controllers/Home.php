<?php
namespace app\controllers;


class Home
{

    function __construct()
    {
        echo "Contruct controller film";
    }

    public function index()
    {
        require PATH_ROOT . '/app/views/home/index.php';
    }
}
