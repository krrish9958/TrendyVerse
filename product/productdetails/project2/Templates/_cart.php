<?php

shuffle($products_list);

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['cart_submit'])){
        //    call method addtocart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
    if (isset($_POST['delete-cart-submit'])){
        //    call method deleteCart
                $deletedrecord = $Cart->deleteCart($_POST['item_id']);

    }

}
?>
?>
<section class="cart">
    <h3 class="cart-heading">Shopping Cart</h3> <br>
    <div class="container-cart">
        <div class="row">
            <div class="col-1">
                <?php

                foreach ($product->getData('cart') as $item):
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){               ?>
                <div class="sub-row">
                    <div class="sub-col-1">
                        <img src="<?php echo $item['item_image'] ?? "./images/f1.jpg" ?>" alt="">
                    </div>
                    <div class="sub-col-2">
                        <h6><?php echo $item['item_brand'] ?? "brandname"; ?> </h6>
                        <h5><?php echo $item['item_name'] ?? "itemname"; ?></h5>
                        <input class="cart-qty" type="number" value="1">
                    </div>
                    <div class="sub-col-3">
                        <form method="post">
                            <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                            <button type="submit" name="delete-cart-submit" class="dlt-btn">Delete</button>
                        </form>
                    </div>
                    <div class="sub-col-4">
                        ₹<span><?php echo $item['item_price'] ?? "price"; ?></span>
                    </div>

                </div>
                <?php
                        return $item['item_price'];
                    }, $cart); //closing array_map func
//                    print_r($subTotal);

                    endforeach;
                    ?>
            </div>
            <div class="col-2">
                <div class="sub-row-1">
                    <h5><i class="fas fa-check"></i> Your order is eligible for FREE delivery</h5>
                </div>
                <div class="sub-row-2">
                    <h5>Subtotal (<?php echo isset($subTotal)? count($subTotal) : 0; ?> item)&nbsp; <span>₹<?php echo isset($subTotal)? $Cart->getSum($subTotal): 0 ?></span></h5>
                </div>
                <button type="submit" class="btn btn-cart2" onclick="orderPlaced()">Proceed To Buy</button>

            </div>
        </div>
    </div>
</section>
<section class="explore-more">
    <h3 id="heading"> PEOPLE WHO BOUGHT THIS ALSO VIEWED</h3>
    <div class="featureproduct">
        <?php foreach ($products_list as $item){ ?>
            <a id="product-link" href="<?php printf('%s?item_id=%s', 'sproduct.php', $item['item_id']) ?>">

                <div class="product" >
                    <div class="productimg">
                        <img src="<?php echo $item['item_image'] ?? "images/f1.jpg"; ?>" alt="">

                    </div>
                    <div class="product-text">
                        <h2><?php echo $item['item_brand']?? "Unknown"; ?></h2>
                        <h1>
                            <?php echo $item['item_name'] ?? "Unknown"; ?>
                        </h1>
                        <h3>Rs.<?php echo $item['item_price']?? "Unknown"; ?> <span>(30% off)</span></h3>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                            <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <button class="btn-cart" type="submit" name="cart_submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                           fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></button>
                        </form>
                    </div>
                </div>  </a>
        <?php } //closing foreach function ?>
    </div>
</section>
