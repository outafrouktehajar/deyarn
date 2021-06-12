<?php
//connexion
require "connexion.php";
//recuperer id
$idprd=$_GET['idprd'];


//selectionner la cat et le prix

$reponse=$bdd->query("SELECT `prix` FROM produits  WHERE `id`=$idprd");


if($data=$reponse->fetch())
{
	$prix=$data['prix'];
	$prixinf=$prix-10;
	$prixsup=$prix+10;
	//selection tt les produit de la meme cat et le prix +- 300 
	$reponse=$bdd->query("SELECT id,nom,prix,descr FROM produits WHERE  prix>'$prixinf' AND prix<'$prixsup' LIMIT 3");
	while($data=$reponse->fetch())
	{
		//affichage des produits
		?>

	 


              <div class="card col" style="border: 2px ; border-radius: 8px; margin-left: 5px; margin-right: 5px;">

                             
                              <div class="view overlay ">
                                <input type="hidden" class="idproduit" value="<?php echo $data['id']?>">
                                <img class="card-img-top" src="hooksPrd/<?php echo $data['id']?>.jpg"
                                  alt="Card image cap">
                                <a href="#!">
                                  <div class="mask rgba-white-slight"></div>
                                </a>

                               
                              </div>
              

              
              
                 <div  id="cardinfo" class="card-body text-center pb-0" style="margin-bottom: 10px;">

                       
                        <h7 class="card-title" style="color:  #5a7559 ;" ><?php echo $data['nom']?></h7> 
                          <span class="z-depth-1 text-white prixprd rounded-pill p-1 position-absolute" style="background-color: #5a7559 !important">
                    <?php echo $data['prix']?>DH
                  </span>
                   <p class="card-text" hidden><?php echo substr($data['descr'],0,40)?>...</p>


                        
                                               <hr>

                        <div style="margin-top: 10px; margin-bottom: 10px;">              
                        
                                <button class="px-2 fa-lg li-ic btnlike" style="background-color: white; border: white; float: right;" type="button" ><i  class='fas fa-heart' style="color: #5a7559 ; font-size: 17px;"></i></button>
                         

                                          <button class="px-2 fa-lg li-ic btnpanier " style="background-color: white; border: white; float: left;" type="button"><i class="fas fa-cart-plus" style="color:  #5a7559 ; font-size: 17px;"></i></button>
                        

                        </div>
                        

                   </div>
             </div>
                  </div>
             </div>


            
        


		<?php
	}


}
///////pagination//////////////




