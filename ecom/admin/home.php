<?php
require "connexion.php";
session_start();



if(!isset($_SESSION['email'])){
    echo "<script>window.open('index.php','_self')</script>";
  }
//  else if(isset($_SESSION['email'])){
//    echo "<script>window.open('index.php?dashboard','_self')</script>";
//  }
  else{
?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  
 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="global">
    <div class="container-for-admin">
      <!--Main Navigation-->
      <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
          <div class="container-fluid">

             <h4 class="mb-2 mb-sm-0 pt-1">
                <a target="_blank">Welcome</a>
              </h4>

              <form class="d-flex justify-content-center">
                <!-- Default input -->
                <input type="search" placeholder="search" aria-label="Search" class="form-control">
                <button class="btn  btn-sm my-0 p search" type="submit" style="background-color:#745975; color: white">
                  <i class="fa fa-search"></i>
                </button>


              </form>
        <a href="index.php?logout">
          <i class="fas fa-sign-out-alt"></i> Logout
          </a>
            

              

            </div>

         
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

          <a>
            <img src="../img/LOGODEYARN.png" style="width: 150px; height: 80px; margin-bottom: 50px; margin-top: 50px; margin-left: 40px">
          </a>

          <div class="list-group list-group-flush">
          	<a class="list-group-item list-group-item-action waves-effect users">
           Users</a>    
           <a href="#" class="list-group-item list-group-item-action waves-effect admin">
              admin</a>
              <a href="#" class="list-group-item list-group-item-action waves-effect Category">
              category</a>       
            <a  href="#" class="list-group-item list-group-item-action waves-effect products">
            products</a>
               <a href="#" class="list-group-item list-group-item-action waves-effect orders">
              Orders</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect carousel">
              Carousel</a>
            
           
          </div>

        </div>
        <!-- Sidebar -->

      </header>
      <!--Main Navigation-->

      <!--Main layout-->
      
      <main class="pt-5 mx-lg-6">

        <div class="container-fluid mt-5 glo">

          <!-- Heading -->
          

            <!--Card content-->
            

            
          
          <!-- Heading -->

          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-9 mb-4">

              <!--Card-->
              <div class="card">
              <div class="card-header">Users</div>
                <!--Card content-->
                <div class="card-body">
                	<table class="table table-hover">
                    <!-- Table head -->
                    <thead style="background-color:#745975; color: white" >
                      <tr>
                        <th>name</th>
                        <th>email</th>
                       </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                	<?php
                	$requete="SELECT * FROM `user`";
                	$reponse=$bdd->query($requete);
                	while($data=$reponse->fetch())
{
                	?>

                   
                      <tr>
                        <th scope="row"><?php echo $data['nom']?></th>
                        <td><?php echo $data['email']?></td>
                      </tr>
                     
                 
<?php
}
?>
   </tbody>
                    <!-- Table body -->
                  </table>
<a style="float: right; color: #5e115e ;float: right;" id="usertall">see all</a>
                </div>

              </div>
              <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 mb-4">


              <!--Card-->
              <div class="card mb-4">
                <div class="card-header">all</div>
                <!--Card content-->
                <div class="card-body">

                  <!-- List group links -->
                  <div class="list-group list-group-flush">
                  	<a class="list-group-item list-group-item-action waves-effect">products
                  	<span class="badge badge-danger badge-pill pull-right"> 
                  	<?php  
                   $req = $bdd->query("SELECT COUNT(id) AS NumberOfProducts FROM produits");
                    $donnees = $req->fetch();
                     $req->closeCursor();
                      echo $donnees['NumberOfProducts'];
                      ?>
                  </span>
                    </a>
                    <a class="list-group-item list-group-item-action waves-effect">user
                      <span class="badge badge-danger badge-pill pull-right"><?php  
                   $req = $bdd->query("SELECT COUNT(id) AS NumberOfuser FROM user");
                    $donnees = $req->fetch();
                     $req->closeCursor();
                      echo $donnees['NumberOfuser'];
                      ?>
                  </span>
                    </a>
                    <a class="list-group-item list-group-item-action waves-effect">Admin 
                      <span class="badge badge-primary badge-pill pull-right"><?php  
                   $req = $bdd->query("SELECT COUNT(id) AS NumberOfProducts FROM admin");
                    $donnees = $req->fetch();
                     $req->closeCursor();
                      echo $donnees['NumberOfProducts'];
                      ?></span>
                    </a>
                 
                  </div>
                  <!-- List group links -->

                </div>

              </div>
              <!--/.Card-->

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
          
            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->
              <div class="card">
                  <div class="card-header">Admin</div>
                <!--Card content-->
                <div class="card-body">

                 <table class="table table-hover">
                    <!-- Table head -->
                    <thead style="background-color:#745975; color: white" >
                      <tr>
                        <th>name/th>
                        <th>email</th>
                       </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                	<?php
                	$requete="SELECT * FROM `admin`";
                	$reponse=$bdd->query($requete);
                	while($data=$reponse->fetch())
{
                	?>

                   
                      <tr>
                        <th scope="row"><?php echo $data['nom']?></th>
                        <td><?php echo $data['email']?></td>
                      </tr>
                     
                 
<?php
}
?>
   </tbody>
                    <!-- Table body -->
                  </table>
                  <a style="color: #5e115e ; float: right;" id="admintall">see all</a>

                </div>
              </div>
              <!--/.Card-->

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-lg-6 col-md-6 mb-4">

              <!--Card-->
              <div class="card">

                <!-- Card header -->
                <div class="card-header">Products</div>

                <!--Card content-->
                <div class="card-body">
 <table class="table table-hover">
                    <!-- Table head -->
                    <thead style="background-color:#745975; color: white" >
                      <tr>
                        <th>name</th>
                        <th>price</th>
                       </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                	<?php
                	$requete="SELECT * FROM `produits`";
                	$reponse=$bdd->query($requete);
                	while($data=$reponse->fetch())
{
                	?>

                   
                      <tr>
                        <th scope="row"><?php echo $data['nom']?></th>
                        <td><?php echo $data['prix']?></td>
                      </tr>
                     
                 
<?php
}
?>
   </tbody>
                    <!-- Table body -->
                  </table>
 <a style="float: right; color: #5e115e" id="" href="yarns.php">see all</a>
                </div>

              </div>
              <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-6 mb-4">

              <!--Card-->
              <div class="card">

                <!-- Card header -->
                <div class="card-header">Category</div>

                <!--Card content-->
                <div class="card-body">

                  <table class="table table-hover">
                    <!-- Table head -->
                    <thead style="background-color:#745975; color: white" >
                      <tr>
                        <th>name</th>
                        <th>shop</th>
                       </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                	<?php
                	$requete="SELECT * FROM `shopcat`";
                	$reponse=$bdd->query($requete);
                	while($data=$reponse->fetch())
{
                	?>

                   
                      <tr>
                        <th scope="row"><?php echo $data['nom']?></th>
                        <td><?php echo $data['id_shop']?></td>
                      </tr>
                     
                 
<?php
}
?>
   </tbody>
                    <!-- Table body -->
                  </table>
  <a style="color: #5e115e ; float: right;" id="catall">see all</a>

                </div>

              </div>
              <!--/.Card-->

            </div>
            <!--Grid column-->

         

          
      <!--Main layout-->

     
    </div>
    


   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

    <!-- jQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="js/script.js"></script>
    
    

    <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




  </body>

</html>
<?php } ?>