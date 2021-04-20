<?php

namespace system\lib;

class Util {
    /**
     * Utile pour debugger vaibales et tableaux
     *
     * @param [type] $_data
     * @param boolean $_continuer
     * @return void
     */
    public static function dd($_data, $_continuer=FALSE)
    {
        echo "<pre>";
        var_dump($_data);
        if ($_continuer==FALSE) {
            die();
        }
    }
}