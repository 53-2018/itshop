<div class="container"> 
    <?php
    include_once 'header.php';
    require_once './config/DAO.php';
    ?>

<!----------------Our Location Section--------->

<div class="order-section mt-3">
      <table class="table table-striped">
<tr>
                    <th>ORDER ID</th>
                    <th>TYPE</th>
                    <th>ADRESS</th>
                    <th>DATE</th>
                    <th>ORDER DETAILS</th>
                </tr>
<?php  
            $dao=new DAO();
            $orders=$dao->selectOrders();
            for($i=0;$i<count($orders);$i++){?>  
                 <tr>
                    <td><?=$orders[$i]['order_id']?></td>  
                    <td><?=$orders[$i]['type']?></td>
                    <td><?=$orders[$i]['adress']?></td>
                    <td><?=$orders[$i]['date']?></td>
                    <td><a href="orders-details.php">Order Details</a></td>
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