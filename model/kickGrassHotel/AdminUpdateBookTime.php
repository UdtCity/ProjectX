<?php

    require_once 'AdminModel.php';
    require_once '../pintoDelivery/PintoModel.php';

    if(isset($_POST['book_id'])) {
        
        $trueCheck = KickGrassAdmin::updateBookTime($_POST['book_id']);
        $trueCheck1 = PintoDelivery::updateDispatchTime($_POST['book_id']);
        if($trueCheck && $trueCheck1) {
            echo json_encode('success');
        }
        
        else {
            echo json_encode('failed');
        }
        
    }