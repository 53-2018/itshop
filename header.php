
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocetna strana</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src=""></script>
</head>
<header> 
    <nav class="first_nav">
            <ul>
                <li class="left_list">
                    <a href="">Shipping</a>
                    <a href="">FAQ</a>
                    <a href="contact.php">Contact</a>
                    <a href="orders.php">Track Order</a>
                    <a href="order-entry.php">Order Entry</a>
                </li>
                
                <li class="right_nav">
                    <a href="">Free 30 Day Money Back Guarantee</a>
                    <select name="first-select" >
                        <option value="usd">USD</option>
                        <option value="usd">EUR</option>
                    </select>
                    <select name="second-select" >
                        <option value="usd">English</option>
                        <option value="usd">France</option>
                    </select>

                </li>
            </ul>
    </nav>
</header>
<section class="first_section">
        
 <div class="row ">
    <div id="logotext" class="col-sm">
        <img src="img/techogy-logo.svg" width="150px" height="130px" alt="">
      
    </div>
    <div id="send_message" class="col-sm">
        <p>Send us a message</p>
        <a href="mailto:demo@demo.com">demo@demo.com</a>
    </div>
    <div class="col-sm">
        <p>Need help? Call Us:</p>
       <p>012 345 7892</p>
    </div>
    <divi id="icons" class="col-sm">
    <p>
                Welcome
                <strong>
                    <?php
                    if (isset($_SESSION['email'])) { 
                  
                     echo $_SESSION['email']['username']; 
                    }
                     ?>
                </strong>
            </p>
        <a href="login.php">LOGIN</a>
        <strong>

        </strong>
        <img src="img/user.png" width="15px" alt="">0
        <img src="img/heart.png" width="15px" alt=""> 0
        <img src="img/shopping-bag.png" width="15px" alt="">
    </div>
    </section>
    <hr>
    <section class="third_section">
                <select class="btn" name="browse" i>
                    <option value="categories">BROWSE CATEGORIES</option>
                </select>
                </button>
                <a href="index.php"> 
                    <select name="home" id="home-option">
                        <option value="">HOME</option>
                    </select>
                </a>
                <a href="shop.php"> SHOP
                    <select name="shop" id="shop-option">
                        <option value="shopPage1"></option>
                        <option value="shopPage2"></option>
                    </select>
                </a>
                <a href="#"> PAGES
                    <select name="pages" id="pages-option">
                        <option value=""></option>
                    </select>
                </a>
                <a href="index.php">BLOGS</a>
                <a href="contact.php">CONTACT</a>
                <input type="text" placeholder="Search our catalog">
                
    </section>
