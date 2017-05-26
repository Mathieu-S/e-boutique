<?php

namespace Model;

class Commande {

    public static function newCommande($dateCommande, $idClient, $montant, $articles) {
        $db = \Utils\Database::getInstance();
        $query = $db->prepare("INSERT INTO `commandes`(`dateCommande`, client, `montant`) VALUES (:dateCommande, :idClient, :montant)");
        $query->execute([
            'dateCommande' => $dateCommande,
            'idClient' => $idClient,
            'montant' => $montant
        ]);

        $idCommande = $db->lastInsertId();

        foreach ($articles as $article => $quantite) {
            $query = $db->prepare("INSERT INTO `lignesdecommande`(`idCommande`,`idArticle` , `quantite`) VALUES (:idCommande, :idArticle, :quantite)");
            $query->execute([
                'idCommande' => $idCommande,
                'idArticle' => $article,
                'quantite' => $quantite
            ]);
        }
    }
}