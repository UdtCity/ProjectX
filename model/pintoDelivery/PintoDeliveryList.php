<?php

    require_once 'PintoModel.php';

    $_SESSION['USERMB'] = 'Riniee';

    if(isset($_SESSION['USERMB'])) {
        
        $delivery = PintoDelivery::getDeliveryList($_SESSION['USERMB']);
        
    }
    

