<?php
    if(!isset($_SESSION)) session_start();
    if($_SESSION['cart']!=''){
        $cart = $_SESSION['cart'];
        //var_dump($cart);
        include_once 'config/DAO.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <style>
        td {
            height: 80px;
            width: 160px;
            text-align: center;
            vertical-align: middle;
        }
        tr:last-child > td{
            text-align: right;
        }
    </style>
    <title>Cart</title>
</head>
<body>
    <?php include_once 'header.php'; ?>
          <!--navigation-->
   
    <h1 class="text-center py-3">CART</h1>
    <div class="container table-cart">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                   
                </tr>
            </thead>
        <?php
           $dao=new DAO();
           $cart=$dao->selectProducts();
             for($i=0;$i<count($cart);$i++){?>  
        
                <tr>
                <td><?=$cart[$i]['id']?></td>  
                    <td><?=$cart[$i]['name'] ?></td>
                    <td><?=$cart[$i]['price'] ?></td>
                    
                </tr>
        <?php 
            }
        ?>
        <tr >
            <td colspan="7"><a href="./cart-controller.php?action=Charge"><input type="button" value="Charge"></a></td>
        </tr>

        </table>
    </div>
    <?php include_once 'footer.php'; ?>

</body>
</html>
<?php
    }else{
        header('Location: shop.php');
    }
?>

