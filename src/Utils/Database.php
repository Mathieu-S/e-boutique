<?php

namespace Utils;

class Database {
    private static $pdo;

    public static function getInstance() {
        if(empty(self::$pdo)) {
            // cette fonction établie une connexion à la BDD à l'aide de l'objet PDO
            // elle retourne l'identifant de la connexion (pointeur)
            $host = "localhost";
            $dbname = "e-boutique";
            $username = "root";
            $password = "";

            $dsn = "mysql:host=".$host.";dbname=".$dbname.";charset=utf8";
            self::$pdo = new \PDO($dsn, $username, $password);
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
}