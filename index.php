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
                    <div class="l_banner_info" id="home">
                        <div href="news.php" class="slider">
                            <div class="callbacks_container">
                                <a  href="news.php">
                                <ul class="rslides" id="slider3">
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
      
                    <div class="trending-ads">
                        <div class="container">
                            <!-- slider -->
                            <div class="trend-ads">
                                <h2>Trending Ads</h2>
                                <ul id="flexiselDemo3">
                                    <li>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p1.jpg" />
                                                <span class="price">Rs 450</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>There are many variations of passages</h5>
                                                <span>1 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p2.jpg" />
                                                <span class="price">Rs 399</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>Lorem Ipsum is simply dummy</h5>
                                                <span>3 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p3.jpg" />
                                                <span class="price">Rs 199</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>It is a long established fact that a reader</h5>
                                                <span>8 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p4.jpg" />
                                                <span class="price">Rs 159</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>passage of Lorem Ipsum you need to be</h5>
                                                <span>19 hour ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p5.jpg" />
                                                <span class="price">Rs 1599</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>There are many variations of passages</h5>
                                                <span>1 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p6.jpg" />
                                                <span class="price">Rs 1099</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>passage of Lorem Ipsum you need to be</h5>
                                                <span>1 day ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p7.jpg" />
                                                <span class="price">Rs 109</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>It is a long established fact that a reader</h5>
                                                <span>9 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p8.jpg" />
                                                <span class="price">Rs 189</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>Lorem Ipsum is simply dummy</h5>
                                                <span>3 hour ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p9.jpg" />
                                                <span class="price">Rs 2599</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>Lorem Ipsum is simply dummy</h5>
                                                <span>3 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p10.jpg" />
                                                <span class="price">Rs 3999</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>It is a long established fact that a reader</h5>
                                                <span>9 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p11.jpg" />
                                                <span class="price">Rs 2699</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>passage of Lorem Ipsum you need to be</h5>
                                                <span>1 day ago</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 biseller-column">
                                            <a href="single.html">
                                                <img src="images/p12.jpg" />
                                                <span class="price">Rs 899</span>
                                            </a>
                                            <div class="ad-info">
                                                <h5>There are many variations of passages</h5>
                                                <span>1 hour ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <script type="text/javascript">
                                    $(window).load(function() {
                                        $("#flexiselDemo3").flexisel({
                                            visibleItems: 2,
                                            animationSpeed: 1000,
                                            autoPlay: true,
                                            autoPlaySpeed: 5000,
                                            pauseOnHover: true,
                                            enableResponsiveBreakpoints: true,
                                            responsiveBreakpoints: {
                                                portrait: {
                                                    changePoint: 480,
                                                    visibleItems: 3
                                                },
                                                landscape: {
                                                    changePoint: 640,
                                                    visibleItems: 3
                                                },
                                                tablet: {
                                                    changePoint: 768,
                                                    visibleItems: 3
                                                }
                                            }
                                        });

                                    });
                                </script>
                                <script type="text/javascript" src="assets/js/jquery.flexisel.js"></script>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //slider -->


                    <br><br>
                    <div class="women_main">
                        <div class="deals">

                            <div class="mcontainer">
                                <div class="tab-inner">
                                    <div id="tabs" class="tabs">
                                        <h3>DEALS OF THE DAY </h3>
                                        <div class="graph">
                                            <nav>
                                                <ul>
                                                    <li class="tab-current"><a class="icon-shop"><span>MObile</span></a></li>
                                                    <li class="tab-current"><a href="kickGrass.php" class="icon-cup"><span>Hotels</span></a></li>
                                                    <li class="tab-current"><a href="movies.php" class="icon-food"><span>MOVIES</span></a></li>
                                                    <li class="tab-current"><a class="icon-lab"><span>parlours</span></a></li>
                                                    <li class="tab-current"><a class="icon-truck"><span>clothing</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- /tabs -->
                                    </div>
                                </div>
                            </div>

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


                        </div>
                    </div>
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
												items : 3,
												lazyLoad : true,
												autoPlay : true,
												pagination : true,
												nav:true,
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