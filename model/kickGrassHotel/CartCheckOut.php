<?php

    require_once 'CartModel.php';

//echo json_encode($_POST);die;

/* Simulating Cart Model */

    /*$_POST['Items'] = [];
    $_POST['Items'][1001] = '{"name":"Chicken Burger With Fries ","price":"140","quant":"1"}';
    $_POST['Items'][1006] = '{"name":"Chicken Pizza","price":"340","quant":"1"}';
    $_POST['Class'] = 'KICKGRASS';*/

/* Simulating Cart Model */

/* Updating Admin Dashboard and Delivery Dashboard */

    if(isset($_POST['Items']) && isset($_POST['Class'])) {
        
        $bookSuccess = CheckOut::bookTheOrder($_POST['Items'], $_POST['Class']);
        
        if($bookSuccess) {
            echo 'Success';
        }
        else {
            echo 'Failed';
        }
    }

/* Updating Admin Dashboard and Delivery Dashboard */

    /*if($_POST) {

        $updateTimeCheck = orderDispatched($_POST['book_id']);

        if($updateTimeCheck) {
            echo json_encode('Dispatch Time Updated');
        }
        else {
            echo json_encode('Dispatch Time Failed');        
        }

    }*/

?>
