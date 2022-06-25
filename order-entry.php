<div class="container"> 
    <?php
    include_once 'header.php';
    require_once './config/DAO.php';
    
   
    ?>

<!----------------Our Location Section--------->

<div class="order-entry mt-3">
      
<form class="row g-3" action="order-controller.php" method="POST">
  <div class="col-md-6">
    <label  class="form-label">Order Type</label>
    <input type="text" class="form-control" name="type"  >
  </div>
  <div class="col-md-6">
    <label  class="form-label">Date</label>
    <input type="date" class="form-control" name="date" >
  </div>
  <div class="col-6">
    <label  class="form-label">Customer Adress</label>
    <input type="text" class="form-control"  name="address" >
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Street</label>
    <input type="text" class="form-control" >
  </div>
  <div class="col-md-4">
    <label f class="form-label">Payment Type</label>
    <select i class="form-select">
      <option selected>Choose...</option>
      <option>Card</option>
      <option>Paypal</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Not a robot
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="action" class="btn btn-primary" value="Send">CONFIRM</button>
  </div>
</form>

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