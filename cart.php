<?php include 'common/commonHead.php'; ?>
        
<body onload="loadCart();">
<?php require_once 'model/appConnection.php'; ?>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="inner-content">
                <?php include 'common/commonHeader.php'; ?>
                <!--content-->
                <div class="content">
                    <div class="women_main">
                        <div class="check">
                            <div class="col-md-9 cart-items">
                                
                                <?php include 'common/cartTable.php'; ?>
                            </div>
                        </div>
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
                    </div>
                </div>
                <!--content-->
                <?php include 'common/commonFooter.php'; ?>
                <?php include 'common/commonNavigation.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>