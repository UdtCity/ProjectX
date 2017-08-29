<?php

    require_once 'AdminModel.php';

    $class = [];
    $products = array('BURGER', 'PIZZA', 'SANDWICH', 'STARTER', 'CURRIES', 'BREADS', 'BRIYANI', 'RICE', 'NOODLES', 'PASTAS', 'SOUP', 'MOJITOS AND COOLERS', 'MILKSHAKES', 'DESSERTS', 'COLD BEVERAGES', 'FRESH JUICE', 'HOT BEVERAGES', 'ICE CREAM','SIDES');

    foreach($products as $items) {
        $class[$items] = KickGrassAdmin::fetchProducts($items);
    }
