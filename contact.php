<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocetna strana</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body> 
    <div class="container"> 
    <header> 
   
    <nav class="first_nav">
        
            <ul>
                <li class="left_list">
                    <a href="">Shipping</a>
                    <a href="">FAQ</a>
                    <a href="">Contact</a>
                    <a href="">Track Order</a>
                </li>
                
                <li class="right_nav">
                    <a href="">Free 30 Day Money Back Guarantee</a>
                    <select name="usd" id="">
                        <option value="usd">USD</option>
                        <option value="usd">EUR</option>
                    </select>
                    <select name="usd" id="">
                        <option value="usd">English</option>
                        <option value="usd">France</option>
                    </select>

                </li>
            </ul>
       
    </nav>
</header>


<section class="first_section">
        

 <div class="row ">
    <div id="logotext" class="col-sm">
        <img src="img/technical-support (1).png" width="40px" alt="">
         <h3>technology</h3>
    </div>
    <div id="send_message" class="col-sm">
        <p>Send us a message</p>
        <a href="mailto:demo@demo.com">demo@demo.com</a>
    </div>
    <div class="col-sm">
        <p>Need help? Call Us:</p>
       <p>012 345 7892</p>
    </div>
    <divi id="icons" class="col-sm">
        <img src="img/user.png" width="15px" alt="">0
        <img src="img/heart.png" width="15px" alt=""> 0
        <img src="img/shopping-bag.png" width="15px" alt="">
    </div>
  
    </section>
    <hr>
    <section class="third_section">
        
                <select class="btn" name="usd" id="">
                    <option value="categories">BROWSE CATEGORIES</option>
                    
                </select>
                </button>

                <a href=""> 
                    <select name="" id="homme">
                        <option value="">HOMME</option>
                    </select>
                </a>
                <a href=""> SHOP
                    <select name="" id="">
                        <option value=""></option>
                    </select>
                </a>
                <a href=""> PAGES
                    <select name="" id="">
                        <option value=""></option>
                    </select>
                </a>
                <a href="">BLOGS</a>
                <a href="">CONTACT</a>

                <input type="text" placeholder="Search our catalog">
                
         
    </section>
<!----------------Our Location Section--------->

<div class="contactsection">
    <h2>Drop Us A Line</h2>
    <p>Have a question or comment? Use the form below to send us a message or contact us by mail</p>


    <form action="" name="myForm" >
        <div class="row"> 
<div class="col-sm-6">

        <select class="form-select" >
            <option selected>Customer service</option>
            <option value="1">Other services</option>
          </select>
</div>
          <div class="col-sm-6">

            <input id="email" type="text" class="form-control" placeholder="your@email.com">
            
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

    <p style="color: red;" id="comment_error"></p>
    <p style="color: red;" id="comment_error_email"></p>

    <input class="btncolor" type="submit" name="commit" value="Post Comment"onclick="return check()">

  </div>
    </form>

</div>


<!------------------------------------------->



</section>

<script src="validation.js"></script>

</body>

</html>