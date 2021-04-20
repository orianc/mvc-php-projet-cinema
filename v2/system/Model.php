<?php

namespace system;

class Model
{

    public $dbh;
    function __construct()
    {
        require PATH_ROOT . '/system/MyPDO.php';
        $this->dbh = MyPDO::connect();
    }

}