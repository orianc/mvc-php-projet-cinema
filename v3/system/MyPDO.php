<?php

namespace system;

class MyPDO
{

    static $dbh;
    static $dsn = 'mysql:host=cours-php-sql;dbname=db_cinema;charset=UTF8';
    static $user = 'root';
    static $pwd = '';

    /**
     * Cette méthode permet à l'exe de :
     * - Récupérer l'instance de PDO et ensuite l'utiliser pour des requêtes
     * - Ou créé une l'instance PDO avec la connexion au serveur MySQL
     *
     * @return void
     */
    public static function connect()
    {
        if (!self::getInstance()) {

            try {
                self::$dbh = new \PDO(self::$dsn, self::$user, self::$pwd);
            } catch (\PDOException $e) {
                exit("<h3>Error Server Connect</h3>");
            }
        return self::getInstance();
        }
    }

    /**
     * Retourne une instance unique de PDO
     *
     * @return void
     */
    private static function getInstance()
    {
        return self::$dbh;
    }
}
