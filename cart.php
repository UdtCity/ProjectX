<!DOCTYPE HTML>
<html>

<head>
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="n" />
    
    <link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/font-awesome.css" rel='stylesheet' type='text/css'>
    <link href="assets/css/icon-font.min.css" rel='stylesheet' type='text/css'/>
</head>
    
<body onload="loadCart();">
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
                                                    <a id="signout" class="signout"><button>Signout</button></a>
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
                                            <p><a href="javascript:;" class="simpleCart_empty"></a></p>
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
                    <div class="women_main">
                        <!-- start content -->
                        <div class="check">
        
                            <div class="col-md-9 cart-items">

                                <div class="row">
                                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Total</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <!--<tr>
                                                    <td class="col-md-6">
                                                    <div class="media">
                                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                        </div>
                                                    </div></td>
                                                    <td class="col-md-1" style="text-align: center">
                                                    <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                                                    </td>
                                                    <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                                                    <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                                                    <td class="col-md-1">
                                                    <button type="button" class="btn btn-danger">
                                                        <span class="glyphicon glyphicon-remove"></span> Remove
                                                    </button></td>
                                                </tr>-->
                                            </tbody>
                                            
                                            <tfoot>
                                                <tr>
                                                    <td>   </td>
                                                    <td>   </td>
                                                    <td>   </td>
                                                    <td><h5>Subtotal<br>Estimated shipping</h5><h3>Total</h3></td>
                                                    <td class="text-right"><h5><strong>$24.59<br>$6.94</strong></h5><h3>$31.53</h3></td>
                                                </tr>
                                                <tr>
                                                    <td>   </td>
                                                    <td>   </td>
                                                    <td>   </td>
                                                    <td>
                                                    <button type="button" class="btn btn-default">
                                                        <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                                                    </button></td>
                                                    <td>
                                                    <button type="button" class="btn btn-success">
                                                        Checkout <span class="glyphicon glyphicon-play"></span>
                                                    </button></td>
                                                </tr>
                                            </tfoot>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="clearfix"> </div>
                        </div>

                        <!-- end content -->
                        <div class="foot-top">

                            <div class="col-md-6 s-c">
                                <li>
                                    <div class="fooll">
                                        <h1>follow us on</h1>
                                    </div>
                                </li>
                                <li>
                                    <div class="social-ic">
                                        <ul>
                                            <li><a href="#"><i class="facebok"> </i></a></li>
                                            <li><a href="#"><i class="twiter"> </i></a></li>
                                            <li><a href="#"><i class="goog"> </i></a></li>
                                            <li><a href="#"><i class="be"> </i></a></li>
                                            <div class="clearfix"></div>
                                        </ul>
                                    </div>
                                </li>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-6 s-c">
                                <div class="stay">
                                    <div class="stay-left">
                                        <form>
                                            <input type="text" placeholder="Enter your email" required="">
                                        </form>
                                    </div>
                                    <div class="btn-1">
                                        <form>
                                            <input type="submit" value="join">
                                        </form>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>
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
                            <p>© 2016 Gretong. All Rights Reserved | Design by RINA</a></p>
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
    
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/cart.js"></script>
    <script src="assets/js/bootstrap.js"></script>
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
</body>
</html>