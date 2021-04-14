<?php

namespace app\models;

use system\MyPDO;

class Film
{
    public $dbh;

    function __construct()
    {
        require PATH_ROOT . '/system/MyPDO.php';
        $this->dbh = MyPDO::connect();
    }

    public function all() {
        return "All film";
        
    }


}
