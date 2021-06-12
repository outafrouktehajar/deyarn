<?php
session_start();
require "../connexion.php";

if(isset($_POST['nom']))
{
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $mp=$_POST['mp'];

    $reponse=$bdd->query("INSERT INTO `user` (`id`, `nom`, `email`, `passw`) VALUES (NULL, '$nom', '$email', '$mp')");

    $_SESSION['connexion']=$nom;
     
    echo'Your Record Has Been Saved in the Database';?> : <?php echo $_SESSION['connexion'] ;?>
  
<?php
}
?>