<?php
session_start();
if(isset($_GET['logout']))
{
  $_SESSION['connexion']=NULL;
  $_SESSION['panier']=NULL;
  $_SESSION['like']=NULL;
  $_SESSION['order']=NULL;
  session_destroy();
}



require "web/connexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YARNS</title>
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
  <link rel="stylesheet" href="css/ecom.css" >
  <link rel="stylesheet" href="css/menucat.css">
</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

<?php
  require "web/navigation.php";
?>

  <!-- Page Content -->
  <div class="container divglo">

    <div class="row">
    

    <section  class="dark-grey-text">

        <div id="wlc"  class="row pr-lg-5">
                <div class="col-md-5 mb-4">

                  <div class="view" style=" margin-top: 250px;">
                    <img src="img\about.png" class=" img-fluid" alt="smaple image"  style="height:700px; width:400px;">
                  </div>

                </div>
                 <div class="col-md-7 " style="margin-top: 40px !important; ">
                 
                    <h2 class="article__title font-weight-bold mb-4 wow bounceInUp " style="text-align: center;">About Us</h2>
                     <H5 class="article__title animated bounceInUp wow " style="text-align: center;">Our Mission Statement</H5>
                     <div class="shadow p-4 mb-4 bg-white">
      

        <ol class="step pl-0">
          <li class="step-element pb-0">
            <div class="step-number">
              <span class="number">1</span>
            </div>
            <div class="step-excerpt">
              <h6 class="font-weight-bold dark-grey-text mb-3">We ?</h6>
              <p class="text-muted">Deyarn® Yarn Company is a fifth generation, family-owned business. We are passionate about helping people enjoy the pleasures of working with yarn. Deyarn® yarns are sold online, at craft chains, discount chains and independent shops across the United States. Through our website, we ship to virtually every country in the world.

                          You can purchase over eighty different types of yarn here on our official website, where you’ll find the most complete selection of Deyarn® yarns in addition to tools and accessories. We offer a selection of Morocco made yarns including Homespun®, Heartland® and Hometown Morocco®, and a variety of different fibers and weights.

                          The Deyarn Collection® of yarns is an exclusive line of specialty yarns that you will only find on this site and in our Manhattan Studio and New Jersey Outlet. It includes fine fibers, one-of-a-kind hand dyed yarns, and limited edition yarns.
</p>
            </div>
          </li>
          <li class="step-element pb-0">
            <div class="step-number">
              <span class="number">2</span>
            </div>
            <div class="step-excerpt">
              <h6 class="font-weight-bold dark-grey-text mb-3">community of yarn crafters</h6>
              <p class="text-muted">We believe in giving back to the community of yarn crafters. We partner with Warm Up America, as well as other charities that accept donations of garments and afghans made with yarn. We also support fiber artists whose work is on exhibit at museums and public spaces around the world.</p>
            </div>
          </li>
          <li class="step-element pb-0">
            <div class="step-number">
              <span class="number">3</span>
            </div>
            <div class="step-excerpt">
              <h6 class="font-weight-bold dark-grey-text mb-3">Orders</h6>
              <p class="text-muted">All international orders will be shipped via Fedex, Hong Kong Post Office service or SF Express. Import Duties & Taxes are Due on delivery, paid to the carrier. We are not responsible for international duty and taxes. We do not accept responsibility for orders not accepted due to failure to pay duties and taxes. We cannot make any exceptions. International shipping, duty, and taxes are non-refundable in the event of a return/exchange.</p>
            </div>
          </li>
        </ol>

      
                     </div> </div>

      
     <section class="text-center dark-grey-text" style="margin-top: 40px">
    
   
    <!-- Section heading -->
    <h2 class="font-weight-bold">More Than You Think</h2>
    <hr class="w-header my-4">
    <!-- Section description -->
      <div class="row">

      <!-- Grid column -->
            <div class="col-md-4 mb-4">

              <i class="fas fa-brain fa-3x " style="color:#745975"></i>
              <h5 class="font-weight-bold my-4 text-uppercase" style="color:#745975">Creativity</h5>
              <p class="mb-md-0 mb-5">The LB Collection® of yarns is an exclusive line of specialty yarns that you will only find on this site and in our Manhattan Studio and New Jersey Outlet. It includes fine fibers, one-of-a-kind hand dyed yarns, and limited edition yarns.
              </p>

            </div>
      <!-- Grid column -->

      <!-- Grid column -->
            <div class="col-md-4 mb-4">

              <i class="far fa-2x fa-heart " style="color:#745975"></i>
              <h5 class="font-weight-bold my-4 text-uppercase" style="color:#745975">Today</h5>
              <p class="mb-md-0 mb-5">Since 1878, we have inspired and educated knitters and crocheters. Today, research shows that knitting and crocheting helps relieve stress through the soothing, repetitive motions of the craft and by helping people achieve a create outlet that produces tangible and useful products. We would love to hear from you about what working with yarn has meant to you.
              </p>

            </div>
      <!-- Grid column -->

      <!-- Grid column -->
          <div class="col-md-4 mb-4">

            <i class="fas fa-users fa-3x " style="color:#745975"></i>
            <h5 class="font-weight-bold my-4 text-uppercase" style="color:#745975"> Community</h5>
            <p class="mb-0">We invite you to join an active and supportive community by connecting with us on Facebook, Instagram, Twitter, Pinterest, and by reading our blog and subscribing to our newsletter. You may contact us through any of these means or through Support@lionbrand.com if you need assistance, have questions or comments. It would be great to see the creations you’ve made with our yarns.
            </p>

          </div>
      <!-- Grid column -->

        </div>
      </section>


    </div>
    <!-- /.row -->

  </div>

    <div class="card">

      <div class="row">
        <div class="col-md-6">

          <!-- Google Maps -->
          <div id="map-within-card-2" class="map-container rounded-left" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=Seattle&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
          <!-- Google Maps -->

        </div>

        <div class="col-10 col-md-4 mx-auto align-self-center py-4">

          <h6 class="font-weight-bold grey-text text-uppercase small">Head Office</h6>
          <h5 class="font-weight-normal mb-4">Seattle, WA</h5>
          <p class="text-muted font-weight-light">2651 Main Street, Suit 124<br>Seattle, WA, 98101</p>
          <p class="text-muted font-weight-light mb-0">Phone: +1 987 123 6548<br>Email: hello@thetheme.io</p>

        </div>
      </div>

    </div>

   </div>
  <!-- /.container -->

 <div>
       <?php 
            require "web/footer.php";
            ?>
          
       </div>
 
<!-- JQuery -->
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
