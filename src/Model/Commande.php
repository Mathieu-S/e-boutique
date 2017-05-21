<?php

namespace Model;

class Commande {

    public static function newCommande($dateCommande, $idClient, $montant) {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("INSERT INTO `commandes`(`dateCommande`, client, `montant`) VALUES (:dateCommande, :idClient, :montant)");
        $query->execute([
            'dateCommande' => $dateCommande,
            'idClient' => $idClient,
            'montant' => $montant
        ]);
    }
}