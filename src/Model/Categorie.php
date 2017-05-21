<?php

namespace Model;

class Categorie {

    public static function getAllCategories() {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM categories");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function getCategorie($id) {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("SELECT * FROM categories WHERE idCategorie = :idCategorie");
        $query->execute([
            'idCategorie' => $id
        ]);
        return $query->fetch(\PDO::FETCH_OBJ);
    }
}