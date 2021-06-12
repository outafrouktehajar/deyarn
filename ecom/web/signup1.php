 <?php
session_start();
require "connexion.php";

if(isset($_POST['nom']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $gsm=$_POST['gsm'];
    $adresse=$_POST['adresse'];
    $mp=$_POST['mp'];

    $reponse=$bdd->query("INSERT INTO `user` (`id`, `nom`, `email`, `passw`) VALUES (NULL, '$nom', '$email', '$mp')");

    $_SESSION['connexion']=$nom;
    ?>
    <div class="alert alert-warning mx-2" role="alert">
          Bonjour : <?php echo $_SESSION['connexion'] ;?>
          <br>
          <a href="?logout">Logout</a>
        </div>

    <?php


}
else
{
?>
<!--Section: Contact v.2-->
<section >

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Sign Up </h2>
    <!--Section description-->
         

   
        <!--Grid column-->
            <form id="inscriptionform" name="contact-form" action="#" method="POST">
			            <div class="view" >
			                  <center>
			                <img style="width:400px ; height: 200px;" src="img\log.png" alt="smaple image">
			                </center>
			                </div>
               

                <!--Grid row-->
                <div style="margin-left: 400px !important ;">
             
		                <div class="row">

		                    <!--Grid column-->
		                    <div class="col-md-6">
		                        <div class="md-form form-sm">
		                     <i class="fa fa-user prefix"></i>
		                            <input type="text" id="nom" name="nom" class="form-control mb-2" required>
		                            <label for="nom" class="">your name</label>
		                        </div>
		                    </div>

		                </div>

		                 <div class="row">

		                    <!--Grid column-->
		                    <div class="col-md-6">
		                         <div class="md-form form-sm">
		                   <i class="fas fa-envelope prefix"></i>
		                            <input type="email" id="email" name="email" class="form-control" required>
		                            <label for="email" class="">your email</label>
		                        </div>
		                    </div>
		                    <!--Grid column-->

		                   
		                </div>
                <!--Grid row-->
		            <div class="row">

		                    <!--Grid column-->
		                   <div class="col-md-6">
		                        <div class="md-form form-sm">
		                        	<i class="fas fa-lock prefix"></i>
		                            <input type="password" id="mp" name="mp" class="form-control" required>
		                            <label for="mp" class="">Your password </label>
		                        </div>
		                    </div>
		                    <!--Grid column-->

		                </div>
                <!--Grid row-->
		                <div class="row"><div class="col-md-6">
		                      <div class="md-form form-sm">
		                        	<i class="fas fa-lock prefix"></i>
		                            <input type="text" id="adresse" name="adresse" class="form-control" required>
		                            <label for="adresse" class="">Adresse</label>
		                        </div>
		                    </div>
		                </div>
		                <!--Grid row-->

	                <div class="text-center text-md-left">
	                 <button class="btn" style="background-color: #5a7559; border-color: #5a7559 ;margin-left: 400px !important ;"  type="submit">Inscription</button>
	                </div>
                <div class="status"></div>

</div>
            </form>

            
        
        <!--Grid column-->

    

</section>
<!--Section: Contact v.2-->

<?php
}
?>