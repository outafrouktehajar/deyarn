<?php
session_start();
require "../connexion.php";

if(isset($_POST['nameca']))
{
	$idca=$_POST['idca'];
    $nomca=$_POST['nameca'];
    $imgca=$_POST['imgca'];
   

    $reponse=$bdd->query("INSERT INTO `carous` (`id`, `caro_title`, `caro_img`) VALUES (NULL, '$nomca', '$imgca')");

  echo'Your Record Has Been Saved in the Database';?>
  
<?php
}
?>