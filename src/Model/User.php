<?php

namespace Model;

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
    }

    public static function login($username,$password) {
        // Cette méthode teste l'existence de l'utilisateur en BdD à l'aide de l'objet PDO
        // Si non trouvé, retourne zéro, sinon le pointeur sur l'enregistrement correspondant
        //$db = new \PDO();
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM user WHERE email = :email AND pwd = :pwd");
        $query->execute([
            'email' => $username,
            'pwd' => $password
        ]);
        var_dump($query->fetch(\PDO::FETCH_ASSOC));
        return false;
    }

}