<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Shop</title>
    <link rel="stylesheet" href="style.css">
    <script src="validation.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body> 
    <div class="container"> 
   
<?php
include_once 'header.php';
?>

</div>
  <!--------SHOP SECTION------------------->
<div class="container">
    <div class="row"> 
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
                    <div id="home-card" class="card-body" >
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
            <div id="home-card" class="card-body" >
            
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
                    <h6>$19,12</h6>
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
                    <h6>$19,12</h6>
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
                    <h6>$19,12</h6>
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
                    <h6>$19,12</h6>
                </div>
              </div>
        </div>
    <!--Fourth ROW-->
    <div class="row">
        <div class="col-sm-3  mb-2">
            <div class="card" style="width: 14rem;">
                <div id="home-card" class="card-body" >
                    <h3>Brand</h3> <br>
                    <input type="checkbox"> Graphic Designer <br>              
                    <input type="checkbox"> Studio Designer    <br>         
                           
                           
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
                    <h6>$19,12</h6>
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
                    <input type="range"> <br>              
                              
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
                    <h6>$19,12</h6>
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
                    <h6>$19,12</h6>
                </div>
              </div>
        </div>
    </div>



    </div>

<p>Proba</p>
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
</div>

<?php
include_once 'footer.php';
?>

<?php

$articles=[
    ["name"=>"laptops","title">="Macbook Air","price"=>"250","size">="m","color"=>"white"],
    ["name"=>"televisions","title">="Macbook Air","price"=>"250","size">="m","color"=>"white"],
    ["name"=>"laptops","title">="Macbook Air","price"=>"250","size">="m","color"=>"white"],
    ["name"=>"air conditioners","title">="Macbook Air","price"=>"250","size">="m","color"=>"white"],
    ["name"=>"laptops","title">="Macbook Air","price"=>"250","size">="m","color"=>"white"],
    ["name"=>"air conditioners","title">="Macbook Air","price"=>"250","size">="m","color"=>"white"],
    ["name"=>"laptops","title">="Macbook Air","price"=>"250","size">="m","color"=>"white"],
]

?>


</body>

</html>