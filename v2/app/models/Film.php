<?php

namespace app\models;

use system\lib\Util;
use system\Model;
use system\MyPDO;

class Film extends Model
{

    
    public function all(){
        $sql = "SELECT * FROM film";
        try {
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            $res = $sth->fetchAll(\PDO::FETCH_OBJ);
            return $res;
        } catch (\PDOException $e) {
            die("<h3>Error de requête de SELECT<h3>");
        }

    }
    public function getById($id)
    {
       
        $sql =
            "SELECT 
            film.titre_film,
            film.resume_film,
            film.genre_id,
            genre.nom_genre,
            realisateur.prenom AS realisateur_prenom,
            realisateur.nom AS realisateur_nom
            FROM film 
            JOIN realisateur ON film.realisateur_id = realisateur.id
            JOIN genre ON film.genre_id = genre.id
            AND film.id = '$id'";
        try {
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            $res = $sth->fetch(\PDO::FETCH_OBJ);
            return $res;
        } catch (\PDOException $e) {
            die("<h3>Error de requête de SELECT<h3>");
        }
    }
}
