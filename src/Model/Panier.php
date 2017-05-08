<?php
/**
 * Created by PhpStorm.
 * User: Mathieu
 * Date: 08/05/2017
 * Time: 18:02
 */

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