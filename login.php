<div class="container">
  <link rel="stylesheet" href="style-form.css"> 
    <?php
    include_once 'header.php';
    require_once './config/DAO.php';
    ?>
<!----------------Our Location Section--------->
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form action="loginController.php" method="POST" class="login-form">
      <input type="text" placeholder="username" name="email">
      <input type="password" placeholder="password" name="password">
      <button name="action" value="LOGIN">login</button>
      <br> <br>
      <input type="checkbox" name="rememberMe" value="yes">Remeber me<br>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>

<br>
<?php
include_once 'footer.php';
?>

</body>

</html>