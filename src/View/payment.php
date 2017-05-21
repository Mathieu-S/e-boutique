<?php
include('templates/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                STEP 1: PAYMENT METHOD
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <form>
                                        <fieldset>
                                            <legend>CHOOSE PAYMENT METHOD</legend>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                                    PayPal
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                    Cash on Delivery
                                                </label>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                STEP 2: CONFIRM ORDER
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
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
                                    <a href="<?= $router->url('Commande#addCommande') ?>" class="btn btn-info pull-right"><i class="icon-ok-sign"></i> Confirm Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('templates/footer.php');
?>