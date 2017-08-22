<?php

    require_once 'AdminModel.php';

    $_SESSION['USERMB'] = 'Riniee'; // HardCoded Values - Will be removed shortly

    if(isset($_SESSION['USERMB'])) {
        
        $booking = KickGrassAdmin::getBookingList();    
        
    }
 