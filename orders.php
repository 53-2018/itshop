<div class="container"> 
    <?php
    include_once 'header.php';
    require_once './config/DAO.php';
    ?>

<!----------------Our Location Section--------->

<div class="order-section mt-3">
      <table class="table table-striped">
<tr>
                    <th>Order id</th>
                    <th>Order Name</th>
                    <th>Addres</th>
                    <th>Date</th>
                   <!-- <th>Order Details</th>
                    <th>Change order</th>
                    <th>Delete order</th>-->
                </tr>
<?php  
            $dao=new DAO();
            $orders=$dao->selectOrders();
            for($i=0;$i<count($orders);$i++){?>  
                 <tr>
                    <td><?=$orders[$i]['order_id']?></td>  
                    <td><?=$orders[$i]['order_name']?></td>
                    <td><?=$orders[$i]['address']?></td>
                 <td><?=$orders[$i]['date']?></td>
                      <!-- <td><a href="orders-details.php">Order Details</a></td>
                    <td><a href="order-controller.php">Change</a></td>
                    <td><a href="order-controller.php?action=delete&order_id=<?=$orders['order_id'] ?>">Delete order</a></td>-->
                  </tr>  
                
              <?php }?>
  </table>

</div>

</section>

<br>
<?php
include_once 'footer.php';
?>
</div>
<script src="validation.js"></script>

</body>

</html>