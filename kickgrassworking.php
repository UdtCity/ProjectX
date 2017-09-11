
                    <div class="content">
                        <div class="women_main">
                            <div class="tab-main">
                                <div class="tab-inner">
                                    <div id="tabs" class="tabs">
                                        <div class="graph">
                                            <nav>
                                                <ul>
                                                    <li class="tab-current"><a href="#section-0" class="icon-shop"><span>OFFERS</span></a></li>
                                                    <li><a href="#section-1" class="icon-cup"><span>BURGER</span></a></li>
                                                    <li><a href="#section-2" class="icon-cup"><span>PIZZA</span></a></li>
                                                    <li><a href="#section-3" class="icon-food"><span>SANDWICH</span></a></li>
                                                    <li><a href="#section-4" class="icon-lab"><span>STARTER</span></a></li>
                                                    <li><a href="#section-5" class="icon-truck"><span>CURRIES</span></a></li>
                                                    <li><a href="#section-6" class="icon-food"><span>BREADS</span></a></li>
                                                    <li><a href="#section-7" class="icon-food"><span>BRIYANI</span></a></li>
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