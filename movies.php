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
                                                <li class="tab-current"><a href="#section-0" class="icon-shop"><span>LATHANGI</span></a></li>
                                                <li><a href="#section-1" class="icon-cup"><span>ANUSHAM</span></a></li>
                                                <li><a href="#section-2" class="icon-cup"><span>THAJ</span></a></li>
                                                <li><a href="#section-3" class="icon-food"><span>KALPNA</span></a></li>
                                            </ul>
                                        </nav>
                                        <div class="content tab">
                                            <section id="section-0" class="content-current">
                                                <div class="l_banner_info" id="home">
                                                    <div class="mcontainer">
                                                        <div class="about-grid2 w3l-agile">
                                                            <div class="col-md-6 col-sm-6 about-grid about-image">
                                                                <div class="moviename">
                                                                    <a2>Podhuvaga En Manasu</a2>
                                                                </div>
                                                                <br>

                                                                <img src="assets/images/biz/MOVIES/7000.jpg" class="img-responsive" alt="Capture">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 about-grid about-info">
                                                                <div class="moviereview">
                                                                    <a3>Review and Casting</a3>
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <p>Udhayanidhi Stalin as Ganesh Nivetha Pethuraj as Leelavathi Parthiepan as Ex-Sarpanch Oothukaandaan Soori as Tiger Pandi G. M. Sundar Mayilsamy Rama Rajendran Namo Narayana as Ramalingam</p><br>
                                                                <p>Podhuvaga En Manasu Thangam is a Tamil movie starring Udhayanidhi Stalin and Nivetha Pethuraj in prominent roles. The cast also includes R Mayilsamy and R Parthiban. It is an action comedy directed by Thalapathy Prabhu.</p>

                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </section>



                                            <section id="section-1" class="content">
                                                <div class="l_banner_info" id="home">

                                                    <div class="mcontainer">
                                                        <div class="about-grid2 w3l-agile">
                                                            <div class="col-md-6 col-sm-6 about-grid about-image">
                                                                <img src="assets/images/biz/MOVIES/7001.jpg" class="img-responsive" alt="Capture">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 about-grid about-info">
                                                                <h3> Podhuvaga En Manasu</h3>
                                                                <img src="assets/images/biz/MOVIES/7004.jpg" class="img-responsive" alt="Capture">

                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </section>

                                            <section id="section-2" class="content">
                                                <div class="l_banner_info" id="home">

                                                    <div class="mcontainer">
                                                        <div class="about-grid2 w3l-agile">
                                                            <div class="col-md-6 col-sm-6 about-grid about-image">
                                                                <img src="assets/images/biz/MOVIES/7002.jpg" class="img-responsive" alt="Capture">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 about-grid about-info">
                                                                <h3> Podhuvaga En Manasu</h3>
                                                                <img src="assets/images/biz/MOVIES/7004.jpg" class="img-responsive" alt="Capture">

                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </section>

                                            <section id="section-3" class="content">
                                                <div class="l_banner_info" id="home">

                                                    <div class="mcontainer">
                                                        <div class="about-grid2 w3l-agile">
                                                            <div class="col-md-6 col-sm-6 about-grid about-image">
                                                                <img src="assets/images/biz/MOVIES/7003.jpg" class="img-responsive" alt="Capture">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 about-grid about-info">
                                                                <h3> Podhuvaga En Manasu</h3>
                                                                <img src="assets/images/biz/MOVIES/7004.jpg" class="img-responsive" alt="Capture">

                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
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