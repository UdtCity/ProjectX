                 <div class="content">
                        <div class="women_main">
                            <div class="tab-main">
                                <div class="tab-inner">
                                    <div id="tabs" class="tabs">
                                        <div class="graph">
                                            <nav>
                                                <ul>
                                                    <li class="tab-current"><a href="#section-0" class="icon-shop"><span>OFFERS</span></a></li>
                                                    <li><a href="#section-1" class="icon-cup" title="BURGER"><span><img src="assets/images/icons/018-hamburger.png" width="35px" height="35px"></span>BURGER</a></li>
                                                    <li><a href="#section-2" class="icon-cup"  title="PIZZA"><span><img src="assets/images/icons/019-food.png" width="35px" height="35px">PIZZA</span></a></li>
                                                    <li><a href="#section-3" class="icon-food"  title="SANDWICH"><span><img src="assets/images/icons/017-sandwich.png" width="35px" height="35px"></span>SANDWICH</a></li>
                                                    <li><a href="#section-4" class="icon-lab"  title="STARTER"><span><img src="assets/images/icons/016-starter.png" width="35px" height="35px">STARTER</span></a></li>
                                                    <li><a href="#section-5" class="icon-truck" title="CURRIES"><span><img src="assets/images/icons/013-food-1.png" width="35px" height="35px">CURRIES</span></a></li>
                                                    <li><a href="#section-6" class="icon-food" title="BREADS"><span><img src="assets/images/icons/014-restaurant.png" width="35px" height="35px">BREADS</span></a></li>
                                                    <li><a href="#section-7" class="icon-food" title="BRIYANI"><span><img src="assets/images/icons/012-rice.png" width="35px" height="35px">BRIYANI</span></a></li>
                                                </ul>
                                            </nav>
                                            <div class="content tab">
                                                <section id="section-0" class="content-current">
                                                    <div class="l_banner_info" id="home">
                        <div class="slider">
                            <div class="callbacks_container">
                                <ul class="rslides1" id="slider3">
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
                                                               <button type="button" class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="glyphicon glyphicon-shopping-cart"class="item_price"><a href="#">AddToCart</a></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="clearfix"></div>
                                                </section>
                                                
                                                <section id="section-1" class="content">
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
                                                               <button type="button" class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="glyphicon glyphicon-shopping-cart"class="item_price"><a href="#">AddToCart</a></span></button>
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
                                                               <button type="button" class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="glyphicon glyphicon-shopping-cart"class="item_price"><a href="#">AddToCart</a></span></button>
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
                                                               <button type="button" class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="glyphicon glyphicon-shopping-cart"class="item_price"><a href="#">AddToCart</a></span></button>
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
                                                               <button type="button" class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="glyphicon glyphicon-shopping-cart"class="item_price"><a href="#">AddToCart</a></span></button>
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
                                                                <button type="button" class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="glyphicon glyphicon-shopping-cart"class="item_price"><a href="#">AddToCart</a></span></button>
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
                                                               <button type="button" class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="glyphicon glyphicon-shopping-cart"class="item_price"><a href="#">AddToCart</a></span></button>
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
                                                               <button type="button" class="item_add" onclick="addingToCart('<?php echo $row['PRODUCT_ID'];?>','<?php echo $row['PRODUCT_NAME'];?>','<?php echo $row['PRICE'];?>','1')"><span class="glyphicon glyphicon-shopping-cart"class="item_price"><a href="#">AddToCart</a></span></button>
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