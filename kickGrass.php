<?php include 'common/commonHead.php'; ?>

<body>
<?php require_once 'model/appConnection.php';
      require_once 'model/kickGrassHotel/HotelDisplayItems.php'; ?>
    <!--<script src="assets/js/cart.js"></script>-->
    <div class="page-container">
        <div class="left-content">
            <div class="inner-content">
               <?php include 'common/commonHeader.php'; ?>
                <?php

    /*require_once 'HotelModel.php';*/
    
    $booking = KickGrass::hotelAvailability();

    if(empty($booking )) {
        
       include 'kickgrassleave.php';
    }
        else
        {
                include 'kickgrassworking.php';         
    }
        ?>        
                
               
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