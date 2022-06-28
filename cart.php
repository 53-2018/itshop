<?php
    if(!isset($_SESSION)) session_start();
    if($_SESSION['cart']!=''){
        $cart = $_SESSION['cart'];
       // var_dump($cart);
?>
    <title>Cart</title>

 <div class="container"> 
    <?php include_once 'header.php' ?>
          <!--navigation-->

    <h1 class="text-center py-3">CART</h1>
    <div class="container table-cart">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Id Type</th>
                    <th>Id brand</th>
                </tr>
            </thead>
        <?php
            foreach($cart as $c){
        ?>
                  <tr>
                    <td><?=$c['id'] ?></td>
                    <td><?=$c['name'] ?></td>
                    <td><?=$c['price'] ?> $</td>
                    <td><img src="image/<?=$c['image'] ?>" width="60px" height="60px" alt=""></td>
                    <td><?=$c['id_type'] ?></td>
                    <td><?=$c['id_brand'] ?></td>
                </tr>
        <?php 
            }
        ?>
        <tr >
            <td colspan="7"><a href="cart-controller.php?action=Charge"><input type="button" class="btn btn-warning" value="Charge"></a></td>
        </tr>
        <ul class="nav-item active">
         <a class="nav-link" href="cart-controller.php?action=empty"><input type="button" class="btn btn-warning" value="Empty Cart"></a>
        </ul>

        </table>
    </div>


<?php
    }else{
        header('Location: shop.php');
    }
?>
</div>