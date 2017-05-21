<?php

namespace Model;

class Article {

    public static function getAllArticles() {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM articles");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function getAllArticlesByCategorie($id) {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM articles WHERE idCategorie = :idCategorie");
        $query->execute([
            'idCategorie' => $id
        ]);
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