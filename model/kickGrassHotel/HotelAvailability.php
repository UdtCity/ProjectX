<?php

    require_once 'HotelModel.php';
    
    $booking = KickGrass::hotelAvailability();

    if(empty($booking)) {
        
        echo 'Failed';
        
    }