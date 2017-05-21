<?php

namespace Controller;

use Model\Panier;

class CommandeController extends Controller {

    public function addCommande() {
        $dateNow = date("Y-m-d H:i:s");
        \Model\Commande::newCommande($dateNow, $_SESSION['user']->pseudo, Panier::prixTotalPanier());
        \Model\Panier::clearArticles();
        $this->_router->redirect('Default#home');
    }
}