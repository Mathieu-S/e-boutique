<?php
include('templates/header.php');
?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Shoping Cart</h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Objet</th>
                                <th>Quantité</th>
                                <th>Prix</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (\Model\Panier::getArticles() as $article => $quantite) { ?>
                                <tr>
                                    <td><?= \Model\Article::getArticle($article)->nomArticle ?></td>
                                    <td>
                                        <?= $quantite ?>
                                        <span><a href="<?= $router->url('Panier#addArticle', ['id' => $article]); ?>" class="btn btn-success">+</a></span>
                                        <span><a href="<?= $router->url('Panier#deleteArticle', ['id' => $article]); ?>" class="btn btn-danger">-</a></span>
                                    </td>
                                    <td><?= \Model\Article::getArticle($article)->prixArticle ?> €</td>
                                    <td><?= \Model\Article::getArticle($article)->prixArticle * $quantite ?> €</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <hr>
                    <dl class="dl-horizontal pull-right">
                        <dt>Sub-total:</dt>
                        <dd><?= \Model\Panier::prixTotalPanier() ?> €</dd>
                        <dt>Frait d'envoie:</dt>
                        <dd>5 €</dd>
                        <dt>Total:</dt>
                        <dd><?= \Model\Panier::prixTotalPanier() + 5 ?> €</dd>
                    </dl>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="panel-footer">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?= $router->url('Panier#payment') ?>" class="btn btn-success pull-right"><i class="icon-ok-sign"></i> Procéder à l'achat</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('templates/footer.php');
?>