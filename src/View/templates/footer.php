<!-- FOOTER-->
<footer class="">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <h4 class="line3 center standart-h4title"><span>Navigation</span></h4>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">project</a></li>
                    <li><a href="#">Elements</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <h4 class="line3 center standart-h4title"><span>Useful Links</span></h4>
                <ul class="footer-links">
                    <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
                    <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
                    <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
                    <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
                    <li><a href="http://www.bootstraptor.com">Bootstrap templates</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <h4 class="line3 center standart-h4title"><span>Useful Links</span></h4>
                <ul class="footer-links">
                    <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
                    <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
                    <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
                    <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
                    <li><a href="http://www.bootstraptor.com">Bootstrap templates</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <h4 class="line3 center standart-h4title"><span>Our office</span></h4>
                <address>
                    <strong>bootstraptor.com, LLC.</strong><br>
                    <i class="fa-icon-map-marker"></i> 795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <i class="fa-icon-phone-sign"></i> + 4 (123) 456-7890

                </address>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 ">
                    <p>© bootstraptor.com Company 2013</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer-->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= $router->url('Default#home'); ?>assets/js/jquery.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?= $router->url('Default#home'); ?>assets/js/bootstrap.min.js"></script>

<script>
    /***************************************************
     responsive menu
     ***************************************************/

    jQuery(function (jQuery) {
        jQuery("#cat-navi").append("<select/>");
        jQuery("#cat-navi select").addClass("form-control");
        jQuery("<option />", {
            "selected": "selected",
            "value": "",
            "text": "Choose category"
        }).appendTo("#cat-navi select");
        //new dropdown menu
        jQuery("#cat-navi a").each(function () {
            var el = jQuery(this);
            var perfix = '';
            switch (el.parents().length) {
                case (11):
                    perfix = '-';
                    break;
                case (13):
                    perfix = '--';
                    break;
                default:
                    perfix = '';
                    break;

            }
            jQuery("<option />", {
                "value": el.attr("href"),
                "text": perfix + el.text()
            }).appendTo("#cat-navi select");
        });

        jQuery('#cat-navi select').change(function () {

            window.location.href = this.value;

        });
    });

</script>

</body>
</html>