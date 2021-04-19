<?php

namespace app\models;

use PDOException;
use system\MyPDO;

class Film
{
    public $dbh;

    function __construct()
    {
        require PATH_ROOT . '/system/MyPDO.php';
        $this->dbh = MyPDO::connect();
    }

    /**
     * Requête simple vers table films de la DB
     * La méthode retourne en mémoire un tableau d'objets des films
     * 1. requete
     * 2. transform
     * 3. return
     * 
     * @return void
     */
    public function all()
    {
        //  1. requete
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
            JOIN genre ON film.genre_id = genre.id";
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
