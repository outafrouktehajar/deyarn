
<?php
session_start();
require "connexion.php";

if(isset($_POST['email']))
{

$logemail=$_POST['email'];
$logpassword=$_POST['pw'];

$reponse=$bdd->query("SELECT * FROM admin WHERE email='$logemail' AND password='$logpassword'");

    if($data=$reponse->fetch())
    {
        $_SESSION['email']=$data['email'];
        
        echo "<script>window.open('home.php','_self')</script>";
?>
    

        <?php
    }
    


 else
    {
        
           echo "erreur de connexion !!!";
            require "index.php";
         ?>

        <?php
}

}

 ?>
