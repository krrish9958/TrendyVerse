<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/e86216e7e6.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/aedbdd0b54.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="aboutpage.css">
<!---->
<!--    <link rel="stylesheet" href="loginpage.css">-->
    <?php
        // require functions.php
        require('functions.php');
    ?>
    <title>TrendyVerse.com</title>
</head>

<body>
    <header>
        
        <nav class="navbar show-nav">
            <div class="logo">
                <a href="index.php">.TrendyVerse</a>
            </div>

            <ul class="navul" id="items-res">

               <li> <a href="index.php">Home</a></li>
               <li  class="Collections"> <a href="">Collections </a>
                <div class="collection">
                    <ul>
                        <li><a href="#">Women's Wear</a></li>                    
                        <li><a href="#">Men's Wear</a></li>
                        <li><a href="#">Kid's Wear</a></li>
                        <li><a href="#">FootWear</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul></div></li>
                 
               
              <li> <a href="contactus.php">Contact us</a></li>
              <li>  <a href="about.php" id="about" >About</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping icon"></i></a></li>
            </ul>
            <i class="fa-solid fa-bars nav-menu" onclick="menuFunc()"></i>
            <i class="fa-solid fa-bag-shopping cart-res"></i>
            <div class="login">
             <a class="login1" href="login.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20"  fill="currentColor" class="bi bi-person-circle" viewBox="0 0 20 16" >
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>Account</a>
            </div>

        </nav>
    </header>