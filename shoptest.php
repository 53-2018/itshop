<div class="col-sm-3 mt-4 mb-4">
        <h4>Products</h4>
        <div class="card" style="width: 13rem;">
            <div id="home-card" class="card-body">
            
           <img id="tshirt" src="img/tshirt.jpg" alt="">
            </div>
          
          <a href="" style="text-decoration: none; color: grey;"><h5 style="margin-left: 60px;padding-top: 15px;">Laptops</h5></a>
          <p style="width: 13rem;">Discover our favorites  fashionable discoveries, a selection of cool items to integrate inm your wardrobe.Compose a..</p>
        </div>
    </div>
    <div class="col-sm-3 mt-4 mb-4">
      
        <div id="secondcard" class="card" style="width: 13rem;">
            <div id="home-card" class="card-body" >
            
           <img id="tshirt" src="img/tvlcd.jpeg" alt="">
            </div>
         
          <a href="" style="text-decoration: none; color: grey;"><h5 style="margin-left: 60px;padding-top: 15px;">Television</h5></a>
          <p style="width: 13rem;">Discover our favorites  fashionable discoveries, a selection of cool items to integrate inm your wardrobe.Compose a..</p>
         </div>
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




    <?php  
            $dao=new DAO();
            $products=$dao->selectProducts();
            for($i=0;$i<count($products);$i++){?>  
            <div class="col-sm-4  mb-4">  
                  <div class="row ">
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
     </div>
              <?php }?>














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


          </div>
        
    </div>














    <div class="container">
    <div class="row"></div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
</div>