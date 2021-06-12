<?php
session_start();
require "../connexion.php";

if(isset($_POST['namec']))
{
	$idc=$_POST['idc'];
    $nomc=$_POST['namec'];
    $idsc=$_POST['idsc'];
    

    $reponse=$bdd->query("INSERT INTO `shopcat` (`id`, `nom`, `id_shop`) VALUES (NULL, '$nomc', '$idsc')");

  
     
    echo'Your Record Has Been Saved in the Database';?>
  
<?php
}
?>