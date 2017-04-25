<?php

namespace Model;


class Article {

    private $id;
    private $nom;
    private $prix;


    private static function getDB() {
        $connexion = new Connection();
        return $connexion->get_connection();
    }

    public static function getAllArticles() {
        $db = self::getDB();
        $query = $db->prepare("SELECT * FROM `article`");
        $query->execute();
        return $query->fetchAll();
    }
}