<?php

namespace Controller;

class DefaultController extends Controller {

    public function home() {
        if(!empty($_POST))
        {

        }
        $this->_set("name", $_SESSION['user']['pseudo']);
        $this->_set("test", ['name' => "Mathieu"]);
        $this->_set("articles", \Model\Article::getAllArticles());
        $this->_view("home");
    }
    public  function article($id, $slug) {
        var_dump($id, $slug);

    }
}