<!DOCTYPE HTML>
<html>

<head>
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="n" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icon-font.min.css" type='text/css' />

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/custom.js"></script>
</head>

<body>
<?php require_once 'model/appConnection.php'; ?>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="inner-content">
                <!-- header-starts -->
                <div class="header-section">
                    <div class="header_bg">
                        <div class="header">
                            <div class="head-t">
                                <!-- start header_right -->
                                <div class="header_right">
                                    <div class="rgt-bottom">
                                        <div class="log">
                                            <?php if(!isset($_SESSION['USERNM'])) { ?>
                                            <div class="login">
                                                <div id="loginContainer"><a id="loginButton" class=""><span>Login</span></a>
                                                    <div id="loginBox" style="display: none;">
                                                        <form id="loginForm">
                                                            <fieldset id="body">
                                                                <fieldset>
                                                                    <label for="email">Mobile Number</label>
                                                                    <input type="text" name="email" id="mobl">
                                                                </fieldset>
                                                                <fieldset>
                                                                    <label for="password">Password</label>
                                                                    <input type="password" name="password" id="pass">
                                                                </fieldset>
                                                                <input type="submit" id="login" value="Sign in">
                                                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                                            </fieldset>
                                                            <span><a href="#">Forgot your password?</a></span>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } else { ?>                                            
                                            <div class="login">
                                                <div id="signout">
                                                     <button id="signout" data-hover="Signout" type="button1"  class="button1"><span><?php 
    { 
      echo $_SESSION["USERNM"];
  }
  ?></span> </button>
                                                    
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="reg">
                                            <a href="register.php">REGISTER</a>
                                        </div>
                                        <div class="cart box_1">
                                            <a href="cart.php">
                                                <h3> <span class="simpleCart_total"></span><span id="simpleCart_quantity" class="simpleCart_quantity"></span><img src="images/bag.png" alt=""></h3>
                                            </a>
                                            <p>
                                                <a href="javascript:;" class="simpleCart_empty"></a>
                                            </p>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="create_btn">
                                            <a href="cart.php">CART</a>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="search">
                                        <form>
                                            <input type="text" value="" placeholder="search...">
                                            <input type="submit" value="">
                                        </form>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- //header-ends -->

                    <!--content-->
                    <div class="content">




                        <!-- banner-slider -->
                        <div class="l_banner_info" id="home">
                            <div class="slider">
                                <div class="callbacks_container">
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

                                <div class="maincontainer">
                                    <div class="tab-inner">
                                        <div id="tabs" class="tabs">
                                            <h3>DEALS OF THE DAY </h3>
                                            <div class="graph">
                                                <nav>
                                                    <ul>
                                                        <li class="tab-current"><a class="icon-shop"><span>MObile</span></a></li>
                                                        <li class="tab-current"><a href="kick.php" class="icon-cup"><span>Hotels</span></a></li>
                                                        <li class="tab-current"><a class="icon-food"><span>MOVIES</span></a></li>
                                                        <li class="tab-current"><a class="icon-lab"><span>parlours</span></a></li>
                                                        <li class="tab-current"><a class="icon-truck"><span>clothing</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <!-- /tabs -->
                                        </div>
                                        <script src="js/cbpFWTabs.js"></script>
                                        <script>
                                            new CBPFWTabs(document.getElementById('tabs'));
                                        </script>
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
                                
                                <div class="footer">
                                    <div class="col-md-3 cust">
                                        <h4>CUSTOMER CARE</h4>
                                        <li><a href="contact.html">Help Center</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="details.html">How To Buy</a></li>
                                        <li><a href="checkout.html">Delivery</a></li>
                                    </div>
                                    <div class="col-md-2 abt">
                                        <h4>ABOUT US</h4>
                                        <li><a href="products.html">Our Stories</a></li>
                                        <li><a href="products.html">Press</a></li>
                                        <li><a href="faq.html">Career</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </div>
                                    <div class="col-md-2 myac">
                                        <h4>MY ACCOUNT</h4>
                                        <li><a href="register.php">Register</a></li>
                                        <li><a href="checkout.html">My Cart</a></li>
                                        <li><a href="checkout.html">Order History</a></li>
                                        <li><a href="details.html">Payment</a></li>
                                    </div>
                                    <div class="col-md-5 our-st">
                                        <div class="our-left">
                                            <h4>OUR STORES</h4>
                                        </div>

                                        <li><i class="add"> </i>Mark peter</li>
                                        <li><i class="phone"> </i>012-586987</li>
                                        <li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <p>© 2016 Gretong. All Rights Reserved | Design by RINA</p>
                                </div>
                            </div>

                        </div>
                        <!--content-->
                    </div>
                </div>
                <!--//content-inner-->
                <div class="sidebar-menu">
                    <header class="logo1">
                        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
                    </header>
                    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                    <div class="menu">
                        <ul id="menu">
                            <li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
                            <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>UDT information</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                <ul id="menu-academico-sub">
                                    <li id="menu-academico-avaliacoes"><a href="shoes.html">government</a></li>
                                    <li id="menu-academico-avaliacoes"><a href="products.html">feeds</a></li>
                                    <li id="menu-academico-boletim"><a href="sunglasses.html">gossips</a></li>
                                </ul>
                            </li>
                            <li id="menu-academico"><a href="sunglasses.html"><i class="fa fa-file-text-o"></i> <span>Resturant Offers</span></a></li>
                            <li><a href="default.html"><i class="lnr lnr-pencil"></i> <span>Mobiles</span></a></li>
                            <li id="menu-academico"><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Electronics</span></a></li>
                            <li id="menu-academico"><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
                            <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
                            <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a></li>
                            <li id="menu-academico"><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                <ul id="menu-academico-sub">
                                    <li id="menu-academico-avaliacoes"><a href="tabs.html">Tabs</a></li>
                                    <li id="menu-academico-boletim"><a href="calender.html">Calender</a></li>

                                </ul>
                            </li>
                            <li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                <ul>
                                    <li><a href="input.html"> Input</a></li>
                                    <li><a href="validation.html">Validation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
            <script>
                var toggle = true;

                $(".sidebar-icon").click(function() {
                    if (toggle) {
                        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                        $("#menu span").css({
                            "position": "absolute"
                        });
                    } else {
                        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                        setTimeout(function() {
                            $("#menu span").css({
                                "position": "relative"
                            });
                        }, 400);
                    }

                    toggle = !toggle;
                });
            </script>
            <!--js -->
            <script src="assets/js/jquery.nicescroll.js"></script>
            <script src="assets/js/scripts.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>