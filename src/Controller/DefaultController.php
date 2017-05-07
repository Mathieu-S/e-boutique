<?php

namespace Controller;

class DefaultController extends Controller {

    public function home() {
        if(!empty($_POST))
        {

        }
        $this->set("name", "spg");
        $this->set("test", ['name' => "Mathieu"]);
        //$this->set("articles", \Model\Article::getAllArticles());
        $this->view("home");
    }
    public  function article($id, $slug) {
        var_dump($id, $slug);

    }
}