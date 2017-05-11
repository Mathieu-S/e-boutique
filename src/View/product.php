<?php
include('templates/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img class="img-responsive" src="images/iphone4s.jpg" alt="post image">
                    </div>
                    <div class="item active">
                        <img class="img-responsive" src="images/iphone4s.jpg" alt="post image">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="images/iphone4s.jpg" alt="post image">
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a>
            </div>
            <hr>
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">INFO &amp; CARE</a></li>
                <li class=""><a href="#profile" data-toggle="tab">DELIVERY</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">RETURN<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="#dropdown1" data-toggle="tab">@fat</a></li>
                        <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
                    </ul>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content" style="margin-bottom:20px;">
                <div class="tab-pane fade active in" id="home">
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div class="tab-pane fade" id="profile">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                </div>
                <div class="tab-pane fade" id="dropdown1">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                </div>
                <div class="tab-pane fade" id="dropdown2">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                </div>
            </div>


        </div><!-- /.col-xs-12 col-sm-12 col-md-6 .carousel -->

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                    <h2>Product title</h2>
                    <p>$20</p>
                    <p class="lead text-danger"><strong>NOW $10</strong></p>
                    <ul class="hidden-xs">
                        <li>Product feature title</li>
                        <li>Product feature title</li>
                        <li>Product feature title</li>
                        <li>Product feature title</li>
                        <li>Product feature title</li>
                    </ul>
                    <p>
                        Product short description. This project presents beautiful style graphic &amp; design. Bootstraptor provides modern features
                    </p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <select class="form-control" style="margin-bottom:10px;">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option  5</option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-bottom:10px;">
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <a class="btn btn-block btn-warning" href="<?= $router->url('Panier#addArticle', ['id' => 17]); ?>" title="" style="margin-bottom:10px;">ADD TO BAG</a>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <a class="btn btn-block btn-default" href="#" title="" style="margin-bottom:10px;">SAVE FOR LATER</a>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('templates/footer.php');
?>