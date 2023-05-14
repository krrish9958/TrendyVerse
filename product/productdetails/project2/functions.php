<?php 
        // require mySQL Connection
        require('Database/DBcontroller.php');

        // require Product class
        require('Database/Product.php');

        // require Cart class
        require('Database/Cart.php');

        // DBcontroller object
        $db = new DBcontroller();

        //Product object
        $product = new Product($db);
$products_list = $product->getData();

        //    Cart object
        $Cart = new Cart($db);
        print_r($Cart->getCartId($product->getData('cart')));






?>