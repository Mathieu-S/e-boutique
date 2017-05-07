<?php

namespace Model;

class Article {

    private $id;
    private $nom;
    private $prix;


    public static function getAllArticles() {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM `article`");
        $query->execute();
        return $query->fetchAll();
    }
}