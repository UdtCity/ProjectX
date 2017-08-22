<?php include 'common/commonHead.php'; ?>

<body>
<?php require_once 'model/appConnection.php';
      require_once 'model/kickGrassHotel/HotelDisplayItems.php'; ?>
    <!--<script src="assets/js/cart.js"></script>-->
    <div class="page-container">
        <div class="left-content">
            <div class="inner-content">
               <?php include 'common/commonHeader.php'; ?> 
                <!--content-->
                    <div class="content">
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="women_main">
                            <div class="tab-main">
                                <div class="tab-inner">
                                    <div id="tabs" class="tabs">
                                        <div class="graph">
                                            <nav>
                                                <ul>
                                                    <li class="tab-current"><a href="#section-1" class="icon-shop"><span>BURGER</span></a></li>
                                                    <li><a href="#section-2" class="icon-cup"><span>PIZZA</span></a></li>
                                                    <li><a href="#section-3" class="icon-food"><span>SANDWICH</span></a></li>
                                                    <li><a href="#section-4" class="icon-lab"><span>STARTER</span></a></li>
                                                    <li><a href="#section-5" class="icon-truck"><span>CURRIES</span></a></li>
                                                    <li><a href="#section-6" class="icon-food"><span>BREADS</span></a></li>
                                                    <li><a href="#section-7" class="icon-food"><span>BRIYANI</span></a></li>
                                                </ul>
                                            </nav>
                                            <div class="content tab">
                                                <section id="section-1" class="content-current">
                                                    <?php foreach($class['BURGER'] as $row) { ?>
                                                    <div class="grid1_of_4">
                                                        <div class="content_box"><a href=".html">
			   	   	 <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                                            <h4>
                                                                <a href=".html">
                                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                                </a>
                                                            </h4>
                                                            <div class="grid_1 simpleCart_shelfItem">

                                                                <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                                                <div class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="item_price"><a href="#">add to cart</a></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </section>

                                                <section id="section-2" class="content">
                                                    <?php foreach($class['PIZZA'] as $row) { ?>
                                                    <div class="grid1_of_4">
                                                        <div class="content_box"><a href=".html">
			   	   	 <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                                            <h4>
                                                                <a href=".html">
                                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                                </a>
                                                            </h4>
                                                            <div class="grid_1 simpleCart_shelfItem">

                                                                <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                                                <div class="item_ad" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="item_price"><a href="#">add to cart</a></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </section>

                                                <section id="section-3" class="content">
                                                    <?php foreach($class['SANDWICH'] as $row) { ?>
                                                    <div class="grid1_of_4">
                                                        <div class="content_box"><a href=".html">
			   	   	 <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                                            <h4>
                                                                <a href=".html">
                                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                                </a>
                                                            </h4>
                                                            <div class="grid_1 simpleCart_shelfItem">

                                                                <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                                                <div class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="item_price"><a href="#">add to cart</a></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </section>

                                                <section id="section-4" class="content">
                                                    <?php foreach($class['STARTER'] as $row) { ?>
                                                    <div class="grid1_of_4">
                                                        <div class="content_box"><a href=".html">
			   	   	 <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                                            <h4>
                                                                <a href=".html">
                                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                                </a>
                                                            </h4>
                                                            <div class="grid_1 simpleCart_shelfItem">

                                                                <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                                                <div class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="item_price"><a href="#">add to cart</a></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </section>

                                                <section id="section-5" class="content">
                                                    <?php foreach($class['CURRIES'] as $row) { ?>
                                                    <div class="grid1_of_4">
                                                        <div class="content_box"><a href=".html">
			   	   	 <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                                            <h4>
                                                                <a href=".html">
                                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                                </a>
                                                            </h4>
                                                            <div class="grid_1 simpleCart_shelfItem">

                                                                <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                                                <div class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="item_price"><a href="#">add to cart</a></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </section>

                                                <section id="section-6" class="content">
                                                    <?php foreach($class['BREADS'] as $row) { ?>
                                                    <div class="grid1_of_4">
                                                        <div class="content_box"><a href=".html">
			   	   	 <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                                            <h4>
                                                                <a href=".html">
                                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                                </a>
                                                            </h4>
                                                            <div class="grid_1 simpleCart_shelfItem">

                                                                <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                                                <div class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="item_price"><a href="#">add to cart</a></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </section>

                                                <section id="section-7" class="content">
                                                    <?php foreach($class['BRIYANI'] as $row) { ?>
                                                    <div class="grid1_of_4">
                                                        <div class="content_box"><a href=".html">
			   	   	 <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                                            <h4>
                                                                <a href=".html">
                                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                                </a>
                                                            </h4>

                                                            <div class="grid_1 simpleCart_shelfItem">

                                                                <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                                                <div class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="item_price"><a href="#">add to cart</a></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </section>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--content-->
                <?php include 'common/commonFooter.php'; ?>
                <?php include 'common/commonNavigation.php'; ?>
            </div>
        </div>
    </div>
    <script src="assets/js/cbpFWTabs.js"></script>
    <script>
        new CBPFWTabs(document.getElementById('tabs'));
    </script>
</body>
</html>