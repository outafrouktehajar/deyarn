<?php
session_start();
require "connexion.php";
if(!isset($_SESSION['order']))
{
  ?>

<div class="alert alert-info" role="alert" style="width: 30%; margin-top: 10px ; margin-left: 35%;">
 No order!!
</div>
  <?php
}
else
{
?>
 
 <div align="center" style="margin-bottom: 30px; margin-top:30px; ">
  <h3>Basket
     <span class="badge" style="background-color:  #745975 !important">

    <?php
                if(!isset($_SESSION['order']))
                {
                 echo 0;
                }
                else
                {
                  echo count($_SESSION['order']['id']);
                }


                ?>
     product
     </span>
  </h3> 
  
 </div>
 <center>
<table class="table table-hover grey lighten-5" style="border-radius:50px;">
  <thead>
    <tr class="white text-black-50" >
      <th scope="col"></th>
      <th scope="col">Produit</th>
      <th scope="col">Prix</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php
$totalprix=0;
for ($i=0; $i <count($_SESSION['order']['id']) ; $i++) 
{ 
    $idprd=$_SESSION['order']['id'][$i];
     $reponse=$bdd->query("SELECT `id`, `nom`,`prix` FROM `produits` WHERE `id`=$idprd");

          if($data=$reponse->fetch())
           {
        ?>
            <tr>

            <td> <img src="photoPrd/<?php echo $idprd ?>.jpg" width="100"></td>
              <td><?php echo $data['nom'] ?></td>
              <td><?php echo $data['prix'] ?> Dh</td>
               <td class="font-weight-bold "><?php echo $data['prix']*$_SESSION['panier']['qnt'][$i] ?> Dh
               
            </tr>
         
         
            <?php
            $totalprix+=$data['prix']*$_SESSION['panier']['qnt'][$i];
            }
             }
            
            
?> 


<tr>
  <td colspan="3"></td>
  <td>Total: </td>
  <td class="font-weight-bold"><?php echo $totalprix;?> Dh</td>
  <td colspan="2">
</tr> 

  </tbody>
</table>
</center>

<?php
}
?>


