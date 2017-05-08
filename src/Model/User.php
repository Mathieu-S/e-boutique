<?php

namespace Model;

class User {

    private $id;
    private $pseudo;
    private $nom;
    private $prenom;
    private $motDePasse;
    private $adresse;
    private $codePostal;
    private $ville;
    private $adresseMail;

    public function __construct($pseudo, $nom, $prenom, $motDePasse, $adresse, $codePostal, $ville, $adresseMail)
    {
        $this->pseudo = $pseudo;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->motDePasse = $motDePasse;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->adresseMail = $adresseMail;
    }

    public static function login($username,$password) {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM clients WHERE adresseMail = :email");
        $query->execute([
            'email' => $username
        ]);
        $user = $query->fetch(\PDO::FETCH_OBJ);
        if (password_verify($password, $user->motDePasse)) {
            return $user;
        }
        return false;
    }

    public function register() {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("INSERT INTO `clients`(`pseudo`,`nom`, `prenom`, `motDePasse`, `adresse`, `codePostal`, `ville`, `adresseMail`) VALUES (:pseudo,:nom,:prenom,:motDePasse,:adresse,:codePostal,:ville,:adresseMail)");
        $query->execute([
            'pseudo' => $this->pseudo,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'motDePasse' => password_hash($this->motDePasse, PASSWORD_DEFAULT),
            'adresse' => $this->adresse,
            'codePostal' => $this->codePostal,
            'ville' => $this->ville,
            'adresseMail' => $this->adresseMail,
        ]);
        return true;
    }
}