<?php

namespace Controller;

class DefaultController extends Controller {

    public function home() {
        if(!empty($_POST))
        {

        }

        $this->_set("test", ['name' => "Mathieu"]);
        $this->_set("articles", \Model\Article::getAllArticles());
        $this->_view("home");
    }

    public  function article($id) {
        $this->_set("article", \Model\Article::getArticle($id));
        $this->_view("product");
    }

    public  function articleTest($id, $slug) {
        var_dump($id, $slug);

    }
}