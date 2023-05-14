<?php
$item_id = $_GET['item_id']??1;
foreach ($product->getData() as $item) :
    if($item['item_id'] == $item_id):
?>
<section class="product-details">
        <div class="details-container">
            <div class="details-img">
                <img src="<?php echo $item['item_image']??"product image";?>" alt="" id="main-img">
                <div class="small-img-group">
                    <div class="img-col">
                        <img src="<?php echo $item['item_image']??"./images/f1.jpg"; ?>" alt="" class="small-img">
                    </div>
                    <div class="img-col">
                        <img src="<?php echo $item['item_img_small2']??"./images/product-details/gallery1.jpg"; ?>" alt="" class="small-img">
                    </div>
                    <div class="img-col">
                        <img src="<?php echo $item['item_img_small3']??"./images/product-details/gallery2.jpg"; ?>" alt="" class="small-img">
                    </div>
                    <div class="img-col">
                        <img src="<?php echo $item['item_img_small4']??"./images/product-details/gallery3.jpg"; ?>" alt="" class="small-img">
                    </div>
                </div>
            </div>
            <div class="details">
                <h5>Home/<?php echo $item['item_category']??"category";?></h5>
                <h2><?php echo $item['item_brand']??"brand";?></h2>
                <h1> <?php echo $item['item_name']??"name";?></h1>
                <h3>Rs.<?php echo $item['item_price']??"price";?> <span id="original-price">Rs. 1499</span><span id="discounted-price">(74% off)</span></h3>
                <select>
                    <option>Select Size</option>
                    <option>XS</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                <input type="number" value="1"> <br>
                <button class="btn">Add To Cart</button>
                <button class="btn">Wishlist</button>
                <h4>Product Details</h4>
                <p><?php echo $item['item_description']??"description";?></p>
            </div>
        </div>
    </section>
<?php
endif;
endforeach;
?>
<?php
$products_list = $product->getData();
shuffle($products_list);

?>
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
                            <button class="btn-cart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                          fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></button>
                        </div>
                    </div>  </a>
            <?php } //closing foreach function ?>
        </div>
    </section>
