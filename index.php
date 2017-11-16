<?php include 'common/commonHead.php'; ?>

<body>
    <?php require_once 'model/appConnection.php'; ?>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-content">
                <?php include 'common/commonHeader.php'; ?>
                <!--content-->
                <div class="content">
                    <!-- banner-slider -->

                    <div class="women_main">
                        <div class="deals">
                            <div class="mcontainer">
                                <div class="tab-inner">
                                    <div id="tabs" class="tabs">
                                        <h5>DEALS OF THE DAY </h5>
                                        <div class="graph">
                                            <nav>
                                                <ul>
                                                    <li class="tab-current"><img src="assets/images/icons/007-hand-graving-smartphone.png" width="45px" height="45px"><a href="#section-0" class="icon-shop"><span>Mobile</span></a></li>
                                                    <li><img href="kickGrass.php" src="assets/images/icons/006-food.png" width="45px" height="45px"><a href="kickGrass.php" class="icon-cup" title="RESTUARANT"><span></span>Restuarant</a></li>
                                                    <li><img src="assets/images/icons/005-video-player-sign.png" width="45px" height="45px"><a href="movies.php" class="icon-food"><span>Movies</span></a></li>
                                                    <li><img src="assets/images/icons/004-hair-salon-situation-of-two-persons.png" width="45px" height="45px"><a class="icon-lab"><span>Men's Parlours</span></a></li>
                                                    <li><img src="assets/images/icons/003-female-hair-shape-and-face-silhouette.png" width="45px" height="45px"><a class="icon-lab"><span>Women's Parlours</span></a></li>
                                                    <li><img src="assets/images/icons/002-tuxedo.png" width="45px" height="45px"><a class="icon-truck"><span>Men's Clothing</span></a></li>
                                                    <li><img src="assets/images/icons/001-dress.png" width="45px" height="45px"><a class="icon-truck"><span>Women's Clothing</span></a></li>

                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- /tabs -->
                                    </div>
                                </div>
                            </div>
                            <div class="content tab">
                                <section id="section-0" class="content-current">
                                    <!-- //banner-slider -->
                                    <div class="l_banner_info" id="home">
                                        <div class="slider">
                                            <div class="callbacks_container">
                                                <ul class="rslides" id="slider4">

                                                    <li>
                                                        <div class="slider-img">
                                                            <img src="assets/images/b2.jpg" class="img-responsive" alt="impetus">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="slider-img">
                                                            <img src="assets/images/b1.jpg" class="img-responsive" alt="impetus">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="slider-img">
                                                            <img src="assets/images/b3.jpg" class="img-responsive" alt="impetus">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <script>
                                        $(function() {
                                            // Slideshow 3
                                            $("#slider4").responsiveSlides({
                                                auto: true,
                                                pager: true,
                                                nav: true,
                                                speed: 400,
                                                namespace: "callbacks",
                                                before: function() {
                                                    $('.events').append("<li>before event fired.</li>");
                                                },
                                                after: function() {
                                                    $('.events').append("<li>after event fired.</li>");
                                                }
                                            });

                                        });

                                    </script>

                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="l_banner_info" id="home">

                        <div class="slider">
                            <div class="callbacks_container">
                                <a href="news.php">
                                    <ul class="rslides" id="slider3">
                                        <li>
                                            <div class="slider-img">
                                                <img src="assets/images/snake1.jpg" class="img-responsive" alt="impetus">
                                            </div>
                                            <div class="slider_banner_info">
                                                <div class="w3ls-info">
                                                    <h4 href="news.php">cLICK HERE TO KNOW ABOUT THIS PICS</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slider-img">
                                                <img src="assets/images/b1.jpg" class="img-responsive" alt="impetus">
                                            </div>
                                            <div class="slider_banner_info">
                                                <div class="w3ls-info">
                                                    <h4 href="news.php">cLICK HERE TO KNOW ABOUT THIS PICS</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slider-img">
                                                <img src="assets/images/b3.jpg" class="img-responsive" alt="impetus">
                                            </div>
                                            <div class="slider_banner_info">
                                                <div class="w3ls-info">
                                                    <h4 href="news.php">cLICK HERE TO KNOW ABOUT THIS PICS</h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <script src="assets/js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function() {
                            // Slideshow 3
                            $("#slider3").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function() {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function() {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });

                    </script>
                    <!-- //slider -->

                </div>
                <div class="col-md-5 skil">
                    <div class="content-top-1">
                        <div class="col-md-6 top-content">
                            <h5>UDT WHETHER</h5>
                            <label></label>
                        </div>
                        <div class="col-md-6 top-content1">
                            <div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value">25%</span> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="content-top-1">
                        <div class="col-md-6 top-content">
                            <h5>Petrol TODAYRATE</h5>
                            <label></label>
                        </div>
                        <div class="col-md-6 top-content1">
                            <div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value">50%</span> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="content-top-1">
                        <div class="col-md-6 top-content">
                            <h5>Cards</h5>
                            <label></label>
                        </div>
                        <div class="col-md-6 top-content1">
                            <div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value">75%</span> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-7 mid-content-top">
                    <div class="middle-content">
                        <h3>Latest Products
                        </h3>
                        <!-- start content_slider -->
                        <div id="owl-demo" class="owl-carousel text-center">
                            <div class="item">
                                <img class="lazyOwl img-responsive" data-src="assets/images/na.jpg" alt="name">
                            </div>
                            <div class="item">
                                <img class="lazyOwl img-responsive" data-src="assets/images/na1.jpg" alt="name">
                            </div>
                            <div class="item">
                                <img class="lazyOwl img-responsive" data-src="assets/images/na2.jpg" alt="name">
                            </div>
                            <div class="item">
                                <img class="lazyOwl img-responsive" data-src="assets/images/na.jpg" alt="name">
                            </div>
                            <div class="item">
                                <img class="lazyOwl img-responsive" data-src="assets/images/na1.jpg" alt="name">
                            </div>
                            <div class="item">
                                <img class="lazyOwl img-responsive" data-src="assets/images/na2.jpg" alt="name">
                            </div>
                            <div class="item">
                                <img class="lazyOwl img-responsive" data-src="assets/images/na.jpg" alt="name">
                            </div>

                        </div>
                    </div>
                    <!--//sreen-gallery-cursual---->
                    <!-- requried-jsfiles-for owl -->
                    <link href="assets/css/owl.carousel.css" rel="stylesheet">
                    <script src="assets/js/owl.carousel.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#owl-demo").owlCarousel({
                                items: 3,
                                lazyLoad: true,
                                autoPlay: true,
                                pagination: true,
                                nav: true,
                            });
                        });

                    </script>
                    <!-- //requried-jsfiles-for owl -->
                </div>
                <div class="clearfix"></div>
                <!--content-->
                <?php include 'common/commonFooter.php'; ?>
                <?php include 'common/commonNavigation.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>
