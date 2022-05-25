

<div class="container"> 
<?php
include_once 'header.php';
require_once 'DAO.php';
?>

  <!--------SHOP SECTION------------------->
<div class="container">
    <div class="row" id="row-categories"> 
    <div class="col-sm-3 mt-4 mb-4">
        <div class="card" style="width: 14rem;">
            <div id="home-card" class="card-body" >
                <h3>Home</h3>
            <a href="">Laptops   ></a> <br>
            <a href="">Television   ></a> <br>
            <a href="">All Conditioners</a> <br>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-sm-3  mb-2">
                <div class="card" style="width: 14rem;">
                    <div class="categories-card" >
                        <h3>Categories</h3> <br>
                        <input type="checkbox"> All Conditioners <br>              
                        <input type="checkbox"> Laptops     <br>         
                        <input type="checkbox"> Television               
                    </div>
                  </div>
            </div>
          </div>
    </div>
    <div class="col-sm-3 mt-4 mb-4">
        <h4>HOME</h4>
        <div class="card" style="width: 13rem;">
            <div id="home-card" class="card-body">
            
           <img id="tshirt" src="img/tshirt.jpg" alt="">
            </div>
          </div>
          <a href="" style="text-decoration: none; color: grey;"><h5 style="margin-left: 60px;padding-top: 15px;">Laptops</h5></a>
          <p style="width: 13rem;">Discover our favorites  fashionable discoveries, a selection of cool items to integrate inm your wardrobe.Compose a..</p>
        
    </div>
    <div class="col-sm-3 mt-4 mb-4">
      
        <div id="secondcard" class="card" style="width: 13rem;">
            <div id="home-card" class="card-body" >
            
           <img id="tshirt" src="img/tvlcd.jpeg" alt="">
            </div>
          </div>
          <a href="" style="text-decoration: none; color: grey;"><h5 style="margin-left: 60px;padding-top: 15px;">Television</h5></a>
          <p style="width: 13rem;">Discover our favorites  fashionable discoveries, a selection of cool items to integrate inm your wardrobe.Compose a..</p>
        
    </div>
    <div class="col-sm-3 mt-4 mb-4">
     
        <div id="thirdcard" class="card" style="width: 13rem;">
            <div id="home-card" class="card-body" >
            
           <img id="tshirt" src="img/notes2.jpeg" alt="">
            </div>
          </div>
          <a href="" style="text-decoration: none; color: grey;"><h5 style="margin-left: 60px;padding-top: 15px;">All Conditioners</h5></a>
          <p style="width: 13rem;">Discover our favorites  fashionable discoveries, a selection of cool items to integrate inm your wardrobe.Compose a..</p>
        
    </div>
    </div>
    <!--SECOND ROW-->
    <div class="row">
        
        <div class="col-sm-3  mb-2">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <h3>Size</h3> <br>
                    <input type="checkbox"> S <br>              
                    <input type="checkbox"> M     <br>         
                    <input type="checkbox"> L   <br>            
                    <input type="checkbox"> XL   <br>            
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-3  mb-2">
                    <div class="card" style="width: 14rem;">
                        <div id="home-card" class="card-body" >
                            <h3>Color</h3> <br>
                            <input type="checkbox"> White <br>              
                            <input type="checkbox"> Black     <br>         
                                   
                        </div>
                      </div>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/phonep30.jpeg" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$19,12</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/macbookair.jpeg" alt="" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$500</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/tvlcd.jpeg" alt="" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$1000</h6>
                </div>
              </div>
        </div>
    </div>
    <!--THIRD ROW-->
    <div class="row">
        <div class="col-sm-3  mb-2">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <h3>Composition</h3> <br>
                    <input type="checkbox"> Ceramic <br>              
                    <input type="checkbox"> Matt paper     <br>         
                    <input type="checkbox"> Polyester     <br>         
                    <input type="checkbox"> Recycled cardboard    <br>         
                           
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-3  mb-2">
                    <div class="card" style="width: 14rem;">
                        <div id="home-card" class="card-body" >
                            <h3>Property</h3> <br>
                            <input type="checkbox"> 120 pages <br>              
                            <input type="checkbox"> Long seleeves    <br>         
                            <input type="checkbox"> Removable cover  <br>            
                            <input type="checkbox"> Short sleeves  <br>            
                        </div>
                      </div>
                </div>
              </div>
        </div>

        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/tvlcd.jpeg" alt="" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$500</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/phonep30.jpeg" alt="" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$400</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/macbookair.jpeg" alt="" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$7000</h6>
                </div>
              </div>
        </div>
    <!--Fourth ROW-->
    <div class="row">
        <div class="col-sm-3  mb-2">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <h3>Brand</h3> <br>
                    <input type="checkbox"> Samsung<br>              
                    <input type="checkbox"> Honor   <br>         
                    <input type="checkbox"> HP   <br>         
                    <input type="checkbox"> Dell Computers   <br>         
   
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/macbookair.jpeg" alt="" width="180px" height="200px">   
                    <span>PHONES</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$6000</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/macbookair.jpeg" alt="" width="180px" height="200px">   
                    <span>PHONES</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$1928</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/macbookair.jpeg" alt="" width="180px" height="200px">   
                    <span>PHONES</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$1800</h6>
                </div>
              </div>
        </div>
    </div>
    <!--Fourth ROW-->
    <div id="fourthrow" class="row">
        
        <div class="col-sm-3  mb-2">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <h3>Price</h3> <br>
                    <input id="range-slider" type="range" min="0" max="10000" value="500"> <br>              
                           <div id="value"></div>   
                </div> 
              </div>
              <div class="row mt-4">
                <div class="col-sm-3  mb-2">
                    <div class="card" style="width: 14rem;">
                        <div id="home-card" class="card-body" >
                            <h3>Dimension</h3> <br>
                            <input type="checkbox"> 40x60cm <br>              
                            <input type="checkbox"> 60x90cm     <br>         
                            <input type="checkbox"> 80x120cm     <br>         
                                   
                        </div>
                      </div>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/phonep30.jpeg" alt="" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$8000</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/macbookair.jpeg" alt="" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$8200</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-3 mt-4 mb-4">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <img src="img/tvlcd.jpeg" alt="" width="180px" height="200px">   
                    <span>TABLETS</span>    
                    <h6>Samsung Galaxy M51</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6>$7500</h6>
                </div>
              </div>
        </div>
    </div>
 </div>
 </div>

<section id="pre_futera">
   <div class="row">
       <div class="col md-2">
        <img src="img/logo.png" width="40px" alt=""> CAMERAX
       </div>
       <div class="col md-2">
       <img src="img/logo.png" width="40px" alt=""> COMPUTERUP
       </div>
       <div class="col md-2">
       <img src="img/logo.png" width="40px" alt=""> DIGITLSTORE
       </div>
       <div class="col md-2">
       <img src="img/logo.png" width="40px" alt=""> DIGITECH
       </div>
       <div class="col md-2">
       <img src="img/logo.png" width="40px" alt=""> ELECTRONICS
       </div>
       <div class="col md-2">
       <img src="img/logo.png" width="40px" alt=""> Games Spot
       </div>
   </div>
</section>


<?php
include_once 'footer.php';
?>

<div id="allProducts">
    
</div>
    <!-- Show all products from database-->
<?php 
$dao=new DAO();
var_dump($dao->selectProducts());
$articles=$dao->selectProducts();
for ($i=0; $i <count($articles) ; $i++) {?>
<div class="card<?=$articles[$i]['type']?>">
<img src="img/<?=$articles[$i]['image']?>" class="home-card" alt="">
<div>
    <p><?=$articles[$i]['type']?></p>
    <h4><?=$articles[$i]['name']?></h4>
    <p><?=$articles[$i]['color']?></p>
    <p><?=$articles[$i]['size']?></p>
    <img src="img/heart.png<?=$articles[$i]['image']?>" class="home-card" alt="">
    <p><span><?=$articles[$i]['price']?>$</span></p>
 </div>
</div>
 
<?php }?>
    <!-- Show all brands from database-->
    
    <?php 
  
$dao=new DAO();
var_dump($dao->selectBrands());
$articles=$dao->selectBrands();

for ($i=0; $i <count($articles) ; $i++) {?>
<div class="card<?=$articles[$i]['name']?>">
  
<div>
  
    <h5><?=$articles[$i]['name']?></h5>
    <img src="img/heart.png<?=$articles[$i]['image']?>" class="home-card" alt="">
 </div>
</div>
 
<?php }?>
 <!-- Show all brands from database-->
    
 <?php 
  
  $dao=new DAO();
  var_dump($dao->selectManufactures());
  $articles=$dao->selectManufactures();
  
  for ($i=0; $i <count($articles) ; $i++) {?>
  <div class="card<?=$articles[$i]['manufacture_name']?>">
    
  <div>
  <h5><?=$articles[$i]['manufacture_name']?></h5>

   </div>
  </div>
   
  <?php }?>
<script>
    let products=<?php echo json_encode($articles);?>;
    for (let index = 0; index < products.length; index++) {
        
    document.getElementById("allProducts").innerHTML += products[index].name;
        
    }
</script>
</body>

</html>