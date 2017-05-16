<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Base page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?= URL ?>assets/css/themes/bootstrap-classic-plus-theme.css" rel="stylesheet">

    <link href="<?= $router->url('Default#home'); ?>assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!-- GOOGLE FONT-->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700italic,700,500&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- /GOOGLE FONT-->
    <style type="text/css">
        body {
            padding-top: 50px;
            padding-bottom: 40px;
            font-family: 'Roboto', sans-serif;
        }

        .navbar .container  {
            max-width: 1170px;
        }

        h1,h2,h3,h4,h5,h6{
            font-weight:200;
        }

        .navbar{
            border-radius:0px;
        }

        .page-header{
            border:none;
            padding: 10px 0px 0px;
            margin: 0px 0 0px;
        }
        .brand{
            color:#282828;
            margin-left:20px;
            font-weight:700;
        }

        .thumbnail{
            margin-bottom:20px;
            padding:0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .panel {
            min-height: 40px;
            margin-bottom: 20px;
        }


        .nav-tabs > li > a {

            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            min-width:100%;
        }

        /* CUSTOM DROPDOWNS STYLE FOR SHOPING CART
        ========================================= */
        .dropdown-menu.dropdown-cart .list-group-item {
            padding-top:10px;
            padding-bottom:10px;
            min-width:250px;
        }

        .dropdown-menu .list-group-item:first-child {
            border-radius:0px;
        }
        .dropdown-menu.dropdown-cart {
            padding-top:0px;
            padding-bottom:0px;
        }
        .dropdown-menu.dropdown-cart {
            padding-top:0px;
            padding-bottom:0px;
        }

        .list-group-item>.badge {
            float: right;
            margin-right: -15px;
            margin-left:10px;
        }

        .fixed-top{
            position:fixed;
            top:0px;
            bottom:0px;
            display:inline-block;
            max-width:370px;
            background:e0e0e0;
            barder:1px solid #dfdfdf;
            z-index:1030;
        }

        .tab-content .tab-pane{
            max-height:600px;
            position:relative;
            overflow:auto;
        }

        footer{
            padding-top:40px;
            margin-top:40px;
            border-top:1px solid #dedede;
        }
        .related-projects{
            padding-top:40px;
            margin-top:40px;
        }

        #cat-navi select{
            display:none;
        }
        .carousel-control span, .carousel-control .icon-prev, .carousel-control .icon-next {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 5;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-top: -10px;
            margin-left: -10px;
            font-family: serif;
        }
        /*************** @media ******************/
        @media (max-width: 940px){
            .brand {
                display:block;
                text-align:center;
                font-size:26px;
            }
            #cat-navi select{
                display:block;
                width:100%;
            }
            #cat-navi li{
                display:none;
            }
        }

        @media (max-width: 1200px) and (min-width: 940px){
        }
        @media (max-width: 940px) and (min-width: 768px){
            .fixed-top{
                max-width:225px;
            }
            .row-fluid [class*="span"].left-side:last-child {
                clear:both;
            }
        }
    </style>

    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
</head>

<body>
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= $router->url('Default#home'); ?>">YOURSITE.COM</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <a class="btn btn-success btn-sm navbar-btn" style="margin-left:10px;" href="#">Se connecter</a>
                <a class="btn btn-danger btn-sm navbar-btn" href="#">S'enregistrer</a>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>

<!-- PAGE-HEADER-->
<div class="page-header" style="padding-top:20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 pull-right" style="z-index:1020 !important">
                <ul class="nav nav-pills pull-right" style="width:100%;">
                    <li class="dropdown active" style="width:100%;">
                        <a class="dropdown-toggle text-center" data-toggle="dropdown" href="#" style="width:100%;">
                            <i class="icon-shopping-cart"></i> Your Bag: <?php echo \Model\Panier::prixTotalPanier() ?> €<i class="icon-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu list-group pull-right dropdown-cart">
                            <li>
                                <a href="#" class="list-group-item active">
                                    <h4 class="list-group-item-heading"><i class="icon-shopping-cart"></i> CART HEADING</h4>
                                    <?php if (empty(\Model\Panier::getArticles())) { ?>
                                        <p class="list-group-item-text">Your Bag is empty </p>
                                    <?php } ?>
                                </a>
                                <?php foreach (\Model\Panier::getArticles() as $article => $quantite) { ?>
                                    <a href="<?= $router->url('Default#article', ['id' => \Model\Article::getArticle($article)->idArticle]); ?>" class="list-group-item">
                                        <span class="badge"><?php echo \Model\Article::getArticle($article)->prixArticle * $quantite ?> €</span>
                                        <?php if ($quantite > 1) { ?>
                                            <?php echo \Model\Article::getArticle($article)->nomArticle .' X'.$quantite ?>
                                        <?php } else { ?>
                                            <?php echo \Model\Article::getArticle($article)->nomArticle ?>
                                        <?php } ?>
                                    </a>
                                <?php } ?>
                                <a class="btn btn-success navbar-btn" style="margin:5px; color:#fff;">Proceder à l'achat</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 visible-lg text-center">
                <h1 style="margin-top:0px !important;">SHOP.COM</h1>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header -->