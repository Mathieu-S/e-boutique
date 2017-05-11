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
}