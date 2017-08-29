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
                            <p>holiday comeback tommorrow</p>
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