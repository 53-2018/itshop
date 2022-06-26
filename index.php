
    <div class="container"> 
    <?php
    include_once 'header.php'
    ?>
</div>
<br>
<div class="container"> 
<section id="first">
            <div>
                <div>
                <p>MIDWEEK DEALS</p>
                <h3>SMARTPHONES ACCESSORIES</h3>
                <p>Up to 40% off</p>
                <a href="shop.php"><button type="button" class="btn btn-light">Shop Now ></button></a>
                </div>
                <img id="huaweip50" src="img/phonep30.jpeg" alt="">
            </div>
            <div>
                <div>
                <p>LIMITED STOCK</p>
                <h3>MACBOOK AIR</h3>
                <p>Starfing from $900.99</p>
               <a href="shop.php" id="btnShopNow">Shop Now ></a>
                </div>
                <img id="huaweip50" src="img/macbookair.jpeg" class="iphone" alt="">
            </div>
            <div>
                <div>
                <p>DISCOVER</p>
                <h3>BEAT PRO X3</h3>
                <p>$259.99 $900.99</p>
                <a href="shop.php" id="btnShopNow">Shop Now ></a>
                </div>
                <img id="huaweip50" src="img/AppleAirPods.jpeg" class="iphone" alt="">
            </div>
        </section>
        <section id="second">
            <div>
                 <h2>Our featured Offers</h2>
                 <p>View All ></p>
            </div>
            <div>
                <div class="card">
                    <img src="img/phonep30.jpeg" alt="" class="card-img">
                    <div>
                        <p>TABLETS</p>
                        <h4>Samsung Galaxy M51</h4>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>$23.90 <span>$19.12</span></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/macbookair.jpeg" alt="" class="card-img">
                    <div>
                        <p>MOBILES</p>
                        <h4>Lenovo IdeaPad S540 13.3"</h4>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>$23.90 <span>$28.72</span></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/tvlcd.jpeg" alt="" class="card-img">
                    <div>
                        <p>AIR CONDITIONERS</p>
                        <h4>TV LED LG Full HD 43 Inch 43LK5000</h4>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>$29.00 <span>$27.55</span></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/macbookair.jpeg" alt="" class="card-img">
                    <div>
                        <p>AIR CONDITIONERS</p>
                        <h4>HP Pavilion X360 Convertibile 14-Dy0064TU</h4>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p><span>$29.00</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="third">
            <div>
                <div>
                    <h2>This Week Deals</h2>
                    <p><?php echo date("l jS \of F Y H:i:s A");
?></p>
                </div>
                <p>View All Deals ></p>
            </div>
            <div>
                <div>
                    <img src="img/phonep30.jpeg" alt="" class="card-img">
                    <div>
                        <p>TABLETS</p>
                        <h4>Samsung Galaxy M51</h4>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>$23.90 <span>$19.12</span></p>
                    </div>
                </div>
                <div>
                    <img src="img/macbookair.jpeg" alt="" class="card-img">
                    <div>
                        <p>MOBILES</p>
                        <h4>Lenovo IdeaPad S540 13.3"</h4>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>$23.90 <span>$28.72</span></p>
                    </div>
                </div>
            </div>
        </section>    
<!-------------------BEFORE FOOTER------------------------>
<section id="before-footer">
   <div class="row mb-4 ">
       <div class="col md-2">
        <img src="img/camerax-logo.png" width="60px" alt=""> CAMERAX
       </div>
       <div class="col md-2">
       <img src="img/camerax-logo.png" width="60px" alt="">  COMPUTERUP
       </div>
       <div class="col md-2">
       <img src="img/camerax-logo.png" width="60px" alt=""> DIGITLSTORE
       </div>
       <div class="col md-2">
       <img src="img/camerax-logo.png" width="60px" alt=""> DIGITECH
       </div>
       <div class="col md-2">
       <img src="img/camerax-logo.png" width="60px" alt=""> ELECTRONICS
       </div>
       <div class="col md-2">
       <img src="img/camerax-logo.png" width="60px" alt=""> Games Spot
       </div>
   </div>
</section>
</div>
<!-------------------FOOTER----------------------->
<?php
include_once 'footer.php';
?>
</body>
</html>