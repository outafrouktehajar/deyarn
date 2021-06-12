<?php
session_start();
require "../connexion.php";

if(isset($_POST['noma']))
{
	$ida=$_POST['ida'];
    $noma=$_POST['noma'];
    $emaila=$_POST['emaila'];
    $mpa=$_POST['passwa'];

    $reponse=$bdd->query("INSERT INTO `admin` (`id`, `nom`, `email`, `password`) VALUES (NULL, '$noma', '$emaila', '$mpa')");

  
     
    echo'Your Record Has Been Saved in the Database';?>
  
<?php
}
?>