<?php

namespace app\models;

use PDO;
use PDOException;
use system\Model;
use system\MyPDO;

class Acteur extends Model
{

    public function all()
    {
        //  1. requete
        $sql =
            "SELECT 
              nom,
              prenom
            FROM acteur ";
        try {
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            $res = $sth->fetchAll(\PDO::FETCH_OBJ);
            return $res;
        } catch (PDOException $e) {
            die("<h3>Error de requête de SELECT<h3>");
        }
    }
}
