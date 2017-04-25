<?php

class User {
    private $id;
    private $password;
    private $email;
    private $firstname;
    private $lastname;
    private $sex;
    private $adressfirstline;
    private $postalcode;
    private $city;
    private $country;
    private $db;

    public function __construct() {
        $connection = new Connection();
        $this->db = $connection->get_connection();
    }

    public function login($username,$password) {
        // Cette méthode teste l'existence de l'utilisateur en BdD à l'aide de l'objet PDO
        // Si non trouvé, retourne zéro, sinon le pointeur sur l'enregistrement correspondant
        return false;
    }

}