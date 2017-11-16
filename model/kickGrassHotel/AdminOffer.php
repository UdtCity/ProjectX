<?php

    require_once 'AdminModel.php';
    
    if(isset($_POST) && isset($_FILES)) {
        
        $_FILES['file']['tmp_name'] = $_POST['offerName'];
        $_POST['image'] = $_FILES['file']['tmp_name'];
        
        $res = KickGrassAdmin::insertOffer($_POST);    
        
        if($res) {
            move_uploaded_file($_FILES['file']['tmp_name'],"assets/images/biz/kickgrass/".$POST['offerId'].".jpg");
        }
        else {
            return false;
        }  
        
        
        
    }