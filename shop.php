

<div class="container"> 
    <link rel="stylesheet" href="style.css">
<?php
include_once 'header.php';
require_once './config/DAO.php';
?>

  <!--------SHOP SECTION------------------->
  <?php
        $dao=new DAO();
        $brands=$dao->selectBrands();
        $manufacturers=$dao->selectManufactures();
        $products=$dao->selectProducts();
        $types=$dao->selectProductTypes();
    ?>
    <main>
        <section id="shop-container">
            <section id="filter-section">
                <div>
                    <h3>Home</h3>
                 
                    <button type="button" class="btn btn-danger"  onclick="showAllProduct()" >Show All Products</button>
               </div>

                <div>
                    <h3>Categories</h3>
                    <?php for($i=0;$i<count($types);$i++) {?>
                    <input type="checkbox" onchange="categoriesListChange(<?= $types[$i]['id_type']?>)" id="categories-<?= $types[$i]['id_type']?>">
                    <label> <?= $types[$i]['name_type']?></label> <br>
                    <?php } ?>
                </div>


                <div>
                    <h3>Brand</h3>
                    <?php for($i=0;$i<count($brands);$i++) {
                        if($brands[$i]['id_brand'])?>
                    <input type="checkbox" onchange="brandListChange(<?= $brands[$i]['id_brand']?>)" id="brand-<?= $brands[$i]['id_brand']?>" value="<?= $brands[$i]['name_brand']?>">
                    <label for="brand-<?= $brands[$i]['id_brand']?>"> <?= $brands[$i]['name_brand']?></label> <br>
                    <?php }?>
                </div>
                <div>
                    <h3>Manufacturers</h3>
                    <?php for($i=0;$i<count($manufacturers);$i++) {?>
                    <input type="checkbox"  onchange="manufactListChange(<?= $manufacturers[$i]['id_manufacturer']?>)" id="manufacturer-<?= $manufacturers[$i]['id_manufacturer']?>" value="<?=$manufacturers[$i]['name_manufacturer']?>">
                    <label><?= $manufacturers[$i]['name_manufacturer']?></label> <br>
                    <?php }?>
                </div>
                <div>
                    <h3>Price</h3>    
                    <label for="price-min">Min:</label>
                    <input type="range" name="price-min" id="price-min" value="0" min="0" max="599" onchange="filterByPrice()">
                    <label for="price-max">Max:</label>
                    <input type="range" name="price-max" id="price-max" value="2000" min="600" max="2000" onchange="filterByPrice()">
                    <p>Price from:</p>
                    <input type="text" id="price-from" readonly>
                    <p>to:</p>
                    <input type="text" id="price-to" readonly>
                  
                    <button type="button" class="btn btn-danger" value="Apply price" onclick="showByPrice()" >Apply price</button>
                </div>
            </section>

            <section id="article-section">
                <section id="article-groups">
                    <div>
                        <div>
                            <img src="img/macbookair.jpeg">
                        </div>
                        <h4>Laptops</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nisi, suscipit culpa rem laudantium aliquam quia omnis ab! Cumque, totam.</p>
                    </div>

                    <div>
                        <div>
                        <img src="img/tvlcd.jpeg">
                        </div>
                        <h4>Television</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nisi, suscipit culpa rem laudantium aliquam quia omnis ab! Cumque, totam.</p>
                    </div>

                    <div>
                        <div>
                        <img src="img/air-conditioner-1.jpeg">
                        </div>
                        <h4>Air Conditioners</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nisi, suscipit culpa rem laudantium aliquam quia omnis ab! Cumque, totam.</p>
                    </div>
                </section>

                <section id="article-cards">
                </section>
                
            </section>
        </section>
    </main>


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


<script>
        let brands=<?php echo json_encode($brands)?>;
        let products=<?php echo json_encode($products)?>;
        let manufacturers=<?php echo json_encode($manufacturers)?>;
      

    </script>
        <script src="filter.js"></script>

</body>

</html>