<?php
session_start();
require "connexion.php";

if(isset($_POST['email']))
{

$logemail=$_POST['email'];
$logpassword=$_POST['pw'];

$reponse=$bdd->query("SELECT * FROM user WHERE email='$logemail' AND passw='$logpassword'");

    if($data=$reponse->fetch())
    {
        $_SESSION['connexion']=$data['nom'];
        ?>
        <div class="alert alert-warning mx-2" role="alert">
          Bonjour : <?php echo $_SESSION['connexion'] ;?>
          <br>
          <a href="?logout">Logout
          </a>

        </div>

        <?php
    }
    


 else
    {
        ?>
        <div class="alert alert-warning mx-2" role="alert">
          <?php echo "erreur de connexion !!!";?>
        </div>
         <?php
            require "logi.html";
         ?>

        <?php
}

}

 ?>