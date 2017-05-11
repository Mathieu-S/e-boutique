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
                        <li class="active"><a href="#">Active category</a></li>
                        <li><a href="#">New in: Category</a></li>
                        <li><a href="#">New in: Category</a></li>
                        <li><a href="#">New in: Category</a></li>
                        <li><a href="#">New in: Category</a></li>
                        <li><a href="#">New in: Category</a></li>
                        <select class="form-control"><option selected="selected" value="">Choose category</option><option value="#">Active category</option><option value="#">New in: Category</option><option value="#">New in: Category</option><option value="#">New in: Category</option><option value="#">New in: Category</option><option value="#">New in: Category</option></select></ul>
                </div>
            </div>

            <div class="panel panel-default visible-lg">
                <div class="panel-heading">
                    <h4>Most Popular</h4>
                </div>
                <div class="panel-body">
                    <ul id="cat-navi2" class="nav nav-list ">
                        <li class="active"><a href="#">Active category</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                        <li><a href="#">Category title</a></li>
                    </ul>
                </div>
            </div>

            <!-- panel OFFER-->
            <div class="visible-lg">
                <div class="panel panel-success text-center">
                    <div class="panel-body">
                        <p class="lead"> SPECIAL OFFER DISCOUNT -20% </p>
                    </div>
                </div>
            </div>
            <!-- / panel OFFER-->

            <!-- panel OFFER-->
            <div class="visible-lg">
                <div class="panel panel-success text-center">
                    <div class="panel-body">
                        <p class="lead"> SPECIAL OFFER DISCOUNT -20% </p>
                    </div>
                </div>
            </div>
            <!-- / panel OFFER-->

            <!-- panel OFFER-->
            <div class="visible-lg">
                <div class="panel panel-success text-center">
                    <div class="panel-body">
                        <p class="lead"> SPECIAL OFFER DISCOUNT -20% </p>
                    </div>
                </div>
            </div>
            <!-- / panel OFFER-->

            <!-- panel OFFER-->
            <div class="visible-lg">
                <div class="panel panel-success text-center">
                    <div class="panel-body">
                        <p class="lead"> SPECIAL OFFER DISCOUNT -20% </p>
                    </div>
                </div>
            </div>
            <!-- / panel OFFER-->

        </div>
        <!-- /left SIDE-->

        <!-- CONTENT SIDE-->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

            <!-- SLIDER -->
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/bannersale.jpg" alt="post image">
                            </div>
                            <div class="item">
                                <img src="images/iphone4s.jpg" alt="post image">
                            </div>
                            <div class="item">
                                <img src="images/thumb.jpg" alt="post image">
                                <div class="carousel-caption">
                                    <h4>Third Thumbnail label</h4>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a>
                    </div>
                </div>
            </div>
            <!-- / SLIDER -->
            <hr>
            <!-- MARKETING LINE-->
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-sm-8 col-lg-8">
                                    <p class="lead text-center">
                                        YOUR RECENT MARKETING SLOGAN OR OFFER!
                                    </p>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <a class="btn btn-warning btn-lg btn-block" href="#">BUY NOW!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /MARKETING LINE-->

            <!-- FEATURED PRODUCTS -->
            <div class="articles-grid row">
                <!-- ITEM -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="images/thumb.jpg" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class="">Featured product title</h3>
                            <p class="">This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features</p>
                            <p>
                                <a class="" href="#" title="">Read more →</a>
                            </p>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- END ITEM -->

                <!-- ITEM -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="images/thumb.jpg" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class="">Featured product title</h3>
                            <p class="">This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features</p>
                            <p>
                                <a class="" href="#" title="">Read more →</a>
                            </p>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- END ITEM -->

            </div>
            <!-- / FEATURED PRODUCTS -->

            <!-- MARKETING LINE-->
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-sm-8 col-lg-8">
                                    <p class="lead text-center">
                                        YOUR RECENT MARKETING SLOGAN OR OFFER!
                                    </p>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <a class="btn btn-warning btn-lg btn-block" href="#">BUY NOW!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /MARKETING LINE-->


            <!-- MAIN PRODUCTS GRID-->
            <div class="container-folio row">

                <!-- PROD GRID
                ============================================================ -->

                <!-- PROD. ITEM -->
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="images/thumb.jpg" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class="">Product title</h3>
                            <p class="">This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features</p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="lead">$21.000</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <a class="btn btn-success btn-block" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- PROD. ITEM -->

                <!-- PROD. ITEM -->
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="images/thumb.jpg" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class="">Product title</h3>
                            <p class="">This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features</p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="lead">$21.000</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <a class="btn btn-success btn-block" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- PROD. ITEM -->

                <!-- PROD. ITEM -->
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="images/thumb.jpg" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class="">Product title</h3>
                            <p class="">This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features</p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="lead">$21.000</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <a class="btn btn-success btn-block" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- PROD. ITEM -->

                <!-- PROD. ITEM -->
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="images/thumb.jpg" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class="">Product title</h3>
                            <p class="">This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features</p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="lead">$21.000</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <a class="btn btn-success btn-block" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- PROD. ITEM -->

                <!-- PROD. ITEM -->
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="images/thumb.jpg" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class="">Product title</h3>
                            <p class="">This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features</p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="lead">$21.000</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <a class="btn btn-success btn-block" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- PROD. ITEM -->

                <!-- PROD. ITEM -->
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <!-- IMAGE CONTAINER-->
                        <img src="images/thumb.jpg" alt="post image">
                        <!--END IMAGE CONTAINER-->
                        <!-- CAPTION -->
                        <div class="caption">
                            <h3 class="">Product title</h3>
                            <p class="">This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features</p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="lead">$21.000</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <a class="btn btn-success btn-block" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--END CAPTION -->
                    </div>
                    <!-- END: THUMBNAIL -->
                </div>
                <!-- PROD. ITEM -->



                <!-- / PROD GRID
                ======================================= -->
            </div>
            <!-- /INNER ROW-->
            <hr>
            <!-- PAGINATION-->
            <ul class="pagination pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" style="">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
            <!-- /PAGINATION-->
        </div>
        <!-- /CONTENT SIDE-->

    </div>
</div>
<!-- /container -->

<?php
include('templates/footer.php');
?>