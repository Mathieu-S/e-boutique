<?php

namespace Model;

use PDO;

class Connection {

    public static function get_connection() {
        // cette fonction établie une connexion à la BDD à l'aide de l'objet PDO
        // elle retourne l'identifant de la connexion (pointeur)
        $host = "localhost";
        $dbname = "e-boutique";
        $username = "root";
        $password = "root";

        $dsn = "mysql:host=".$host.";dbname=".$dbname.";charset=utf8";
        $pdo = new PDO($dsn, $username, $password);
        return $pdo;
    }
}