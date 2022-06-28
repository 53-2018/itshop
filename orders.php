<div class="container"> 
    <?php
    include_once 'header.php';
    require_once './config/DAO.php';
    ?>

<!----------------Our Location Section--------->

<div class="order-section mt-3">
      <table class="table table-striped table-hover">
<tr class="table-primary">
                    <th >Order id</th>
                    <th>Order Name</th>
                    <th>Addres</th>
                    <th>Date</th>
                    <th>Delete order</th>
                   <!-- <th>Order Details</th>
                    <th>Change order</th>
                    -->
                </tr>
<?php  
            $dao=new DAO();
            $orders=$dao->selectOrders();
            foreach($orders as $pom){?>  
                 <tr>
                    <td><?=$pom['order_id']?></td>  
                    <td><?=$pom['order_name']?></td>
                    <td><?=$pom['address']?></td>
                 <td><?=$pom['date']?></td>
                      <!-- <td><a href="orders-details.php">Order Details</a></td>
                    <td><a href="order-controller.php">Change</a></td>-->
                    <td><a href="order-controller.php?action=delete&order_id=<?= $pom['order_id'] ?>"><input type="button" class="btn btn-danger" value="Delete Order"></a></td>
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