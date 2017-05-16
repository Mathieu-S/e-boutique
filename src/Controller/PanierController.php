<?php

namespace Controller;


Class PanierController extends Controller {

    public function view() {

    }

    public function addArticle($id) {
        \Model\Panier::addArticle(\Model\Article::getArticle($id));
        //$this->_router->redirect('Default#home');
        header("Location: javascript:location.reload()");
    }

    public static function prixTotalPanier() {
        $prix = 0;
        if (isset($_SESSION['panier'])) {
            foreach ( $_SESSION['panier'] as $article => $quantite) {
                $prix = $prix + \Model\Article::getArticle($article)->prixArticle * $quantite;
            }
        }
        return $prix;
    }
}