
<?php
session_start();
if(isset($_GET['logout']))
{
  $_SESSION['email']=NULL;
 
  session_destroy();
}



require "connexion.php";
?><!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


<!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/style.css" >
  
    
</head>
<body>
<!-- Start - Signup Box-->
<div class="signup-box">    
    <!-- Start Side-->
    <div class="rightside" >
       <div class="form-box">
           <form>
              <div class="inputbox">
                <img src="../img/LOGODEYARN.png" style="width: 300px ; height: 150px;">  
              	<h2 class="form-head" style="margin-top: 50px">Administrator Login</h2>
              </div>
              
             <div class="md-form form-sm" id="reponseLogin">
      
     <input type="email" id="chemail" class="form-control mb-2 email" name="email" required>
      <label for="form2">Your email</label>
      </div>
                  <div class="md-form form-sm">
                   <input type="password" id="chpw" class="form-control mb-2"  name="pw" required>
                  <label for="form14">Your password</label>
                </div>
                
    <!-- Password -->
   

    <!-- Sign in button -->
    <button class="btn  btn-block" type="submit" id="btnsubmit" name="btnsubmit" style="background-color:#745975">Connexion</button>
    
              



           </form>
       </div>
        
    </div>
    <!-- End - Right Side-->
</div>
<?php
          if(isset($_GET['logout'])){
            include("logout.php");
          }
        ?>
<!-- End - Signup Box-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>

</body>
</html>