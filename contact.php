
    <?php
    include_once 'header.php'
    ?>

<!----------------Our Location Section--------->
<div class="contactsection">
    <h2>Drop Us A Line</h2>
    <p>Have a question or comment? Use the form below to send us a message or contact us by mail</p>
    <form action="" name="myForm" method="GET" >
        <div class="row"> 
<div class="col-sm-6">
        <select class="form-select" >
            <option selected>Customer service</option>
            <option value="1">Other services</option>
          </select>
</div>
          <div class="col-sm-6">

          <input onchange="checkEmail()" type= "text" id="email" placeholder="your@email.com"/>
          <p id="test"></p>          
          </div>
</div>
<div class="mb-3">
    <label  for="formFile bg-danger " class="form-label " ></label>
    <input class="form-control  " type="file" id="formFile"> 
  </div>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="comment_box" style="height: 300px"></textarea>
    <label for="floatingTextarea2">How can we help?</label>
  </div>
  <div class="dugme mt-4">
    <p class="comment_error"  id="comment_error"></p>
    <p class="comment_error_email"></p>
    <input id="btn" type="submit" name="commit" value="Post Comment"onclick="return check()">
  </div>
    </form>

</div>

</section>
<br>
<?php
include_once 'footer.php';
?>

<script src="validation.js"></script>

</body>

</html>