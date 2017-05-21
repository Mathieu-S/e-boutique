<?php

namespace Controller;

class DefaultController extends Controller {

    public function home() {
        $this->_set("categories", \Model\Categorie::getAllCategories());
        $this->_set("test", ['name' => "Mathieu"]);
        $this->_set("articles", \Model\Article::getAllArticles());
        $this->_view("home");
    }

    public function homeCategories($id) {
        $this->_set("categories", \Model\Categorie::getAllCategories());
        $this->_set("test", ['name' => "Mathieu"]);
        $this->_set("articles", \Model\Article::getAllArticlesByCategorie($id));
        $this->_view("home");
    }

    public  function article($id) {
        $this->_set("selectedArticle", \Model\Article::getArticle($id));
        $this->_view("product");
    }
}