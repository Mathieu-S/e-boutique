<?php

namespace Model;

class Article {

    private $idArticle;
    private $nomArticle;
    private $imageArticle;
    private $prixArticle;
    private $descriptionArticle;
    private $idCategorie;
    private $type;

    public static function getAllArticles() {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM articles");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function getArticle($id) {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM articles WHERE idArticle = :idArticle");
        $query->execute([
            'idArticle' => $id
        ]);
        return $query->fetch(\PDO::FETCH_OBJ);
    }
}