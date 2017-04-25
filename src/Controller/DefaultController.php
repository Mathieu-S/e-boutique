<?php

namespace Controller;

use Model\Article;

class DefaultController {

    public static function home() {
        $articles = Article::getAllArticles();
        return $articles;
    }
}