<?php

namespace Controller;


Class PanierController extends Controller {

    public function view() {

    }

    public function addArticle($id) {
        \Model\Panier::addArticle(\Model\Article::getArticle($id));
        if(!empty($_SERVER['HTTP_REFERER'])) {
            header("Location: ".$_SERVER['HTTP_REFERER']."");
        } else {
            $this->_router->redirect('Default#home');
        }
    }

}