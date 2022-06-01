<div class="container"> 
    <?php
    include_once 'header.php';
    require_once './config/DAO.php';
    ?>

<!----------------Our Location Section--------->

<div class="order-section mt-3">
      <table class="table table-striped">
<tr>
                    <th>ID</th>
                    <th>CUSTOMER</th>
                    <th>ADRESS</th>
                    <th>DATE</th>
                    <th>ORDER STATUS</th>
                    <th>ORDER ID</th>
                    <th>MAIN ORDER</th>
                </tr>
<?php  
            $dao=new DAO();
            $orders=$dao->selectOrdersDetails();
            for($i=0;$i<count($orders);$i++){?>  
                 <tr>
                    <td><?=$orders[$i]['od_id']?></td>  
                    <td><?=$orders[$i]['customer']?></td>
                    <td><?=$orders[$i]['adress']?></td>
                    <td><?=$orders[$i]['date']?></td>
                    <td><?=$orders[$i]['order_status']?></td>
                    <td><?=$orders[$i]['order_id']?></td>
                    <td><a href="orders.php">Order</a></td>
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