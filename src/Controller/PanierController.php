<?php

namespace Controller;

Class PanierController extends Controller {
    public function view() {

    }
    public function addArticle($id) {
        \Model\Panier::addArticle(\Model\Article::getArticle($id));
        //$this->_router->redirect('Default#home');
        header("Location: javascript:history.back()");
    }

}