<?php

namespace Controller;


Class PanierController extends Controller {

    public function view() {
        $this->_view("panier");
    }

    public function payment() {
        if (!isset($_SESSION['user'])) {
            $this->_router->redirect('Login#login');
        }
        $this->_view("payment");
    }

    public function addArticle($id) {
        \Model\Panier::addArticle(\Model\Article::getArticle($id));

        if(!empty($_SERVER['HTTP_REFERER'])) {
            header("Location: ".$_SERVER['HTTP_REFERER']."");
        } else {
            $this->_router->redirect('Default#home');
        }
    }

    public function deleteArticle($id) {
        if (key_exists($id, $_SESSION['panier'])) {
            \Model\Panier::delArticle(\Model\Article::getArticle($id));
        }

        if(!empty($_SERVER['HTTP_REFERER'])) {
            header("Location: ".$_SERVER['HTTP_REFERER']."");
        } else {
            $this->_router->redirect('Default#home');
        }
    }
}