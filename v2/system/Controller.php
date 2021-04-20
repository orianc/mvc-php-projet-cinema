<?php

namespace system;

class Controller
{

    public $data;

    function __construct()
    {
        $this->data = [];
    }

    /**
     * View constructor with data transfer possibillity
     *
     * @param [str] $file
     * @param [array] $data
     * @return void
     */
    public function render($file, $data = [])
    {   
        extract($data);
        $page = PATH_ROOT . "/app/views/$file.php";
        require PATH_ROOT . "/app/views/base.php";
    }
}
