<?php

namespace Model;


class Panier
{
    public static function addArticle($article) {
        if(!empty($article)) {
            if(empty($_SESSION['panier'][$article->idArticle])) {
                $_SESSION['panier'][$article->idArticle] = 0;
            }
            $_SESSION['panier'][$article->idArticle]++;
        }
    }
    public static function delArticle($article) {
        if(!empty($article)) {
            if(!empty($_SESSION['panier'][$article->idArticle])) {
                unset($_SESSION['panier'][$article->idArticle]);
            }
        }
    }
    public static function getArticles() {
        if(empty($_SESSION['panier'])) {
            return [];
        }
        return $_SESSION['panier'];
    }

    public static function prixTotalPanier() {
        $prix = 0;
        foreach (self::getArticles() as $article => $quantite) {
            $prix = $prix + \Model\Article::getArticle($article)->prixArticle * $quantite;
        }
        return $prix;
    }
}