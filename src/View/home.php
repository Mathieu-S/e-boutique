<?php
include('templates/header.php');
?>

<!-- MAIN CONTAINER-->
<div class="container">
    <div class="row">
        <!-- LEFT SIDE CATEGORIES-->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Shop by Product</h4>
                </div>
                <div class="panel-body">
                    <ul id="cat-navi" class="nav nav-list">
                        <?php foreach ($categories as $categorie) { ?>
                            <li><a href="<?= $router->url('Default#homeCategories', ['id' => $categorie->idCategorie]); ?>"><?= $categorie->nomCategorie ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /left SIDE-->

        <!-- CONTENT SIDE-->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <!-- MAIN PRODUCTS GRID-->
            <div class="container-folio row">

                <!-- PROD GRID
                ============================================================ -->
                <?php foreach ($articles as $article) { ?>
                <!-- PROD. ITEM -->
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="http://lorempixel.com/400/200" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class=""><a href="<?= $router->url('Default#article', ['id' => $article->idArticle]); ?>"><?php echo $article->nomArticle; ?></a></h3>
                            <p class=""><?php echo $article->descriptionArticle; ?></p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="lead"><?php echo $article->prixArticle; ?> €</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <a class="btn btn-success btn-block" href="<?= $router->url('Panier#addArticle', ['id' => $article->idArticle]); ?>">Acheter</a>
                                </div>
                            </div>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- PROD. ITEM -->
                <?php } ?>

                <!-- / PROD GRID
                ======================================= -->
            </div>
            <!-- /INNER ROW-->
            <hr>
        </div>
        <!-- /CONTENT SIDE-->
    </div>
</div>
<!-- /container -->

<?php
include('templates/footer.php');
?>