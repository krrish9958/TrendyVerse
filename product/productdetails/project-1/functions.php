<?php 
        // require mySQL Connection
        require('Database/DBcontroller.php');

        // require Product class
        require('Database/Product.php');

        // DBcontroller object
        $db = new DBcontroller();

        //Product object
        $product = new Product($db);

        $cart = new Cart($db);
        $cart->insertintoCart();







?>