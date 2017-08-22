<?php

    require_once 'HotelModel.php';

    $class = [];
    $products = array('BURGER', 'PIZZA', 'SANDWICH', 'STARTER', 'CURRIES', 'BREADS', 'BRIYANI', 'RICE', 'NOODLES', 'PASTAS', 'SOUP', 'MOJITOS AND COOLERS', 'MILKSHAKES', 'DESSERTS', 'COLD BEVERAGES', 'FRESH JUICE', 'HOT BEVERAGES', 'ICE CREAM','SIDES');

    foreach($products as $items) {
        $class[$items] = KickGrass::fetchProducts($items);
    }
    
<   
