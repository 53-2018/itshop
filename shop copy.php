

<div class="container"> 
<?php
include_once 'header.php';
require_once './config/DAO.php';
?>

  <!--------SHOP SECTION------------------->
<div class="container">
  
<div class="row" id="first-row">
    <div class="col-sm-3 mt-4">
    <div class="card" style="width: 14rem;">
            <div id="home-card" class="card-body" >
                <h3>Home</h3>
            <a href="">Laptops   ></a> <br>
            <a href="">Television   ></a> <br>
            <a href="">All Conditioners</a> <br>
            </div>
          </div>
    </div>
    <div class="col-sm-3">
    <div class="card" style="width: 13rem;">
            <div id="home-card" class="card-body">
            
           <img id="tshirt" src="img/tshirt.jpg" alt="">
            </div>
          
          <a href="" style="text-decoration: none; color: grey;"><h5 style="margin-left: 60px;padding-top: 15px;">Laptops</h5></a>
          <p style="width: 13rem;">Discover our favorites  fashionable discoveries</p>
        </div>
    </div>

    <div class="col-sm-3">
    <div class="card" style="width: 13rem;">
            <div id="home-card" class="card-body">
            
           <img id="tshirt" src="img/tshirt.jpg" alt="">
            </div>
          
          <a href="" style="text-decoration: none; color: grey;"><h5 style="margin-left: 60px;padding-top: 15px;">Laptops</h5></a>
          <p style="width: 13rem;">Discover our favorites  fashionable discoveries</p>        </div>
    </div>
    <div class="col-sm-3">
    <div class="card" style="width: 13rem;">
            <div id="home-card" class="card-body">
            
           <img id="tshirt" src="img/tshirt.jpg" alt="">
            </div>
          
          <a href="" style="text-decoration: none; color: grey;"><h5 style="margin-left: 60px;padding-top: 15px;">Laptops</h5></a>
          <p style="width: 13rem;">Discover our favorites  fashionable discoveries</p>        </div>
    </div>
    
</div>

<div class="row" id="second-row">
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
    <div class="row"> 
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <h3>Size</h3> <br>
                    <input type="checkbox"> S <br>              
                    <input type="checkbox"> M     <br>         
                    <input type="checkbox"> L   <br>            
                    <input type="checkbox"> XL   <br>            
                </div>
              </div>

</div>

    <?php  
            $dao=new DAO();
            $products=$dao->selectProducts();
            for($i=0;$i<count($products);$i++){?>  
            <div class="col-sm-4  mb-4">  
                
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                   <img src="img/<?=$products[$i]['image']?>" alt="" width="150px" height="150px">
                    <span><?=$products[$i]['type']?></span>    
                    <h6><?=$products[$i]['name']?></h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <h6><?=$products[$i]['price']?></h6> 
                </div>
              </div>
        
     </div>
              <?php }?>
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

    <!-- Show all brands from database-->
    
  
 <!-- Show all brands from database-->
    
 <?php 
  
  $dao=new DAO();
 // var_dump($dao->selectManufactures());
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