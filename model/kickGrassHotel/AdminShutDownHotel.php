<?php

    require_once 'AdminModel.php';
    
    if(isset($_POST['status'])) {
        
        $booking = KickGrassAdmin::toggleOnOff($_POST['status']);    
        
        if($booking) {
            echo 'Success';
        }
        
        else {
            echo 'Failed';
        }
    }
 