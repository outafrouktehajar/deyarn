<?php
session_start();
require "connexion.php";

if(!isset($_SESSION['like']))

{
  ?>

			<div class="alert alert-info" role="alert" style="width: 30%; margin-top: 10px ; margin-left: 35%;">
		YOUR WISH LIST IS EMPTY !!
			</div>
	  <?php
	}
	else
	{
	?>
 
			 <div align="center" style="margin-bottom: 30px; margin-top:30px; ">
			  <h3>Your wish list
			     <span class="badge" style="background-color:  #745975 !important">

			    <?php
			                if(!isset($_SESSION['like']))
			                {
			                 echo 0;
			                }
			                else
			                {
			                  echo count($_SESSION['like']['id']);
			                }


			                ?>
			    </span>
			  </h3> 
			 </div>






<center>
 
    <?php
    $totalprix=0;
    for ($i=0; $i <count($_SESSION['like']['id']) ; $i++) 
    { 
        $idprdlk=$_SESSION['like']['id'][$i];
        $reponse=$bdd->query("SELECT id ,nom, prix FROM produits WHERE id = '$idprdlk' ");
              if($data=$reponse->fetch())
               {
            ?>
   <div class="card">

              <!--Card image-->
             
              <!--Card content-->
   <div class="card-body">

                <!-- Container -->
   <div class="d-block d-md-flex">

                  <!-- Column -->
                  <div class="p-3 flex-1">

                        <input type="hidden" class="idproduit" value="<?php echo $data['id']?>">
                       <img src="photoPrd/<?php echo $data['id']?>.jpg" width="100"></td>

                          </div>
                  <!-- Column -->

                  <!-- Column -->
                  <div class="p-3 flex-1">   
                    <h4><?php echo $data['nom'] ?></h4>

                       </div>
            <!-- Column -->

            <!-- Column -->
                <div class="p-3 flex-1">

                  
                    <h4><?php echo $data['prix'] ?> Dh</h4>
                    
                    </div>
                <!-- Column -->
		                <div class="p-3 flex-1">
		                     <h4><i class="fas fa-trash-alt btnSupplike"  style="float: right; color: #5a7559 ; font-size: 17px;" rel="<?php echo $idprdlk ?>"></i></h4>
		                       <button  class="btnpanier " style="background-color: white; border: white; float: left;" type="button"><i class="fas fa-cart-plus" style="color: #5a7559 ; font-size: 17px;"></i></button>
                        
		                     </div>
		     
    
 </div>
</div>
</div>
 <?php
   }
     }
  ?>
</center>
 <?php
     }
   ?>
  <!-- Container -->
    