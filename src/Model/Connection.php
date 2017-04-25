<?php

class Connection {
    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct() {
        // les identifiants de connexion sont stockées ici comme attributs de la classe connection
        $this->host = "localhost";
        $this->dbname = "e-boutique";
        $this->username = "root";
        $this->password = "root";
    }

    public function get_connection() {
        // cette fonction établie une connexion à la BDD à l'aide de l'objet PDO
        // elle retourne l'identifant de la connexion (pointeur)
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8";
        $pdo = new PDO($dsn, $this->username, $this->password);
        return $pdo;
    }
}