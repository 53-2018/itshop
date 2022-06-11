<div class="container"> 
    <?php
    include_once 'header.php'
    ?>

<!----------------Our Location Section--------->
<h3>Our Location</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.0485374978584!2d20.34338575109993!3d43.896261444594565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4757721072e6c487%3A0x7913d187911f27b6!2z0KHQstC10YLQvtCzINCh0LDQstC1IDY2LCDQp9Cw0YfQsNC6!5e0!3m2!1ssr!2srs!4v1654961077401!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
    <p class="comment_error"id="comment_error"></p>
    <p class="comment_error_email"></p>
    <input id="btn" type="submit" name="commit" value="Post Comment" onclick="return check()">
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