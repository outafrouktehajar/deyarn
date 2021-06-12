<?php
session_start();
require "connexion.php";
if(!isset($_SESSION['panier']))
{
  ?>

<div class="alert alert-info" role="alert" style="width: 30%; margin-top: 10px ; margin-left: 35%;">
 EMPTY BASKET!!
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
                if(!isset($_SESSION['panier']))
                {
                 echo 0;
                }
                else
                {
                  echo count($_SESSION['panier']['id']);
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
      <th scope="col">QUANTITÉ</th>
      <th scope="col">SOUS-TOTAL</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php
$totalprix=0;
for ($i=0; $i <count($_SESSION['panier']['id']) ; $i++) 
{ 
    $idprd=$_SESSION['panier']['id'][$i];
     $reponse=$bdd->query("SELECT `id`, `nom`,`prix` FROM `produits` WHERE `id`=$idprd");

          if($data=$reponse->fetch())
           {
        ?>
            <tr>

            <td> 
               <input type="hidden" class="idproduit" value="<?php echo $data['id']?>">
              <img src="photoPrd/<?php echo $idprd ?>.jpg" width="100"></td>

              <td><?php echo $data['nom'] ?></td>
              <td><?php echo $data['prix'] ?> Dh</td>
              <td>
                <i class="fas fa-minus mr-2 btndown" rel="<?php echo $idprd ?>" ></i>

                <?php echo $_SESSION['panier']['qnt'][$i] ?>

                 <i class="fas fa-plus ml-2 btnup" rel="<?php echo $idprd ?>" ></i> 
                </td>
               <td class="font-weight-bold "><?php echo $data['prix']*$_SESSION['panier']['qnt'][$i] ?> Dh
               <td>
                 <i class="fas fa-trash-alt btnSuppPanier"  style="float: right;" rel="<?php echo $idprd ?>"></i>
               </td>

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
  <td colspan="2"><button type="button" style="float: right; background-color:#745975; border-radius: 15px 30px;" class="btn" id="btnCommander"><i class="fas fa-cart-arrow-down mr-2"></i>Commander</button></td>
</tr> 

  </tbody>
</table>
</center>

<?php
}
?>



<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Connectez-vous ou s'inscrire
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btnLogin" data-dismiss="modal">Connexion</button>
        <button type="button" class="btn btn-primary" id="btninscription" data-dismiss="modal">Inscription</button>
      </div>
    </div>
  </div>
</div>