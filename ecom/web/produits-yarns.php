
<div class="row">
<?php
define("PRDPAGE", 10);

require "connexion.php";

$souscat="";

if(isset($_GET['colonne']))
{
$colonne=$_GET['colonne'];
$souscat=$_GET['souscat'];
$requete="SELECT `id`,`nom`,`prix`,`description` FROM `produits` WHERE `$colonne`='$souscat'";
}
else
{
$requete="SELECT `id`,`nom`,`prix`,`description` FROM `produits` WHERE `idhookscat`=0 AND `nv`=1";
}

$reponse=$bdd->query($requete);

////////////pagination////////////

$totalprd=$reponse->rowCount();

$nbrpage=ceil($totalprd/PRDPAGE);

if(isset($_GET['page']))
{
  $page=$_GET['page'];
}
else
{
  $page=1;
}

$debut=PRDPAGE*($page-1);
$reponse=$bdd->query($requete." limit $debut,".PRDPAGE);

///////pagination//////////////

while($data=$reponse->fetch())
{
?>
          <div style="margin-top: 10px ; margin-bottom: 30px;" class="col-lg-3 col-md-6 mb-4">

               <!-- Card -->
             
              <div class="card" style="border: 2px ; border-radius: 8px;">

               
                <div class="view overlay ">
                  <input type="hidden" class="idproduit" value="<?php echo $data['id']?>">
                  <img class="card-img-top" src="photoPrd/<?php echo $data['id']?>.jpg"
                    alt="Card image cap">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>

                 
                </div>
              

              
              
                 <div  id="cardinfo" class="card-body text-center pb-0">

                       
                        <h7 class="card-title" style="color:  #5a7559 ;" ><?php echo $data['nom']?></h7> 
                          <span class="z-depth-1 text-white prixprd rounded-pill p-1 position-absolute" style="background-color: #5a7559 !important">
                    <?php echo $data['prix']?>DH
                  </span>
                   <p class="card-text" hidden><?php echo ($data['description'])?>...</p>


                        
                                               <hr>

                        <div style="margin-top: 10px; margin-bottom: 10px;">              
                             <button  class="px-2 fa-lg li-ic btndetail" style="background-color: white; border: white; float: right;" type="button" data-toggle="modal" data-target="#modaldetail"><i class="fas fa-angle-double-right" style="color:  #5a7559 ;font-size: 17px;"></i>
                               </a></button>
                        
                                <button class="px-2 fa-lg li-ic btnlike" style="background-color: white; border: white; left: 50% !important;" type="button" ><i  class='fas fa-heart' style="color: #5a7559 ; font-size: 17px;"></i></button>
                         

                                          <button class="px-2 fa-lg li-ic btnpanier " style="background-color: white; border: white; float: left;" type="button"><i class="fas fa-cart-plus" style="color:  #5a7559 ; font-size: 17px;"></i></button>
                        

                        </div>
                        

                   </div>
             </div>

            
          </div>


<?php
}
?>


</div>


<!--Pagination-->
<div class="row">
  <div class="col-12">
<center>
    <nav class="d-flex justify-content-center mt-3" aria-label="Page navigation example" >
      <ul class="pagination pagination-circle pg-dark">


        <li class="page-item  <?php echo $page==1 ? 'disabled' : ''?>">
          <a class="page-link" href="
          <?php echo $souscat=='' ? '?page='.($page-1).'' : '?souscat='.$souscat.'&page='.($page-1).'' ?>"
          >←</a>
        </li>



       <?php
      
       for ($i=1; $i <= $nbrpage ; $i++) {
         $pageactive="";
        if($i==$page)
        {
          $pageactive="active";
        }
        ?>
        <li class="page-item <?php echo $pageactive ?>">
          <a class="page-link" rel="
           <?php echo $souscat=='' ? '?page='.$i.'' : '?souscat='.$souscat.'&page='.$i.'' ?>
          "><?php echo $i ?></a>
        </li>
        <?php
       }
       ?>



        <li class="page-item <?php echo $page==$nbrpage ? 'disabled' : ''?>">
          <a class="page-link" href="
           <?php echo $souscat=='' ? '?page='.($page+1).'' : '?souscat='.$souscat.'&page='.($page+1).'' ?>
          ">→</a>
        </li>
      </ul>
    </nav>
    </center>

  </div>
</div>

<!--Pagination-->
















  <div class="modal fade divCorps " id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
  <div class="modal-header" style="background-color: #ffffff00 !important;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <!--Body-->
        <div class="modal-body">
          
          
       
         

        <section  class="dark-grey-text">

    <div id="wlc"  class="row pr-lg-5">
      <div class="col-lg-5">

        <div class="view">
         <img style="max-width: 100%;" src="https://z9t4u9f6.stackpathcdn.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg" alt="Material Design for Bootstrap - dashboard"
            class="img-fluid img-prd" style="max-width: 40%;">
       <input type="hidden" class="idproduit" value="<?php echo $data['id']?>">
             
        
        </div>

      </div>
       <div class="col-lg-7">

        <h2 class="h2-responsive product-name">
              <strong class="nom-prd"></strong>
            </h2>
          <h4 class="h4-responsive">
                      <span class="green-text">
                        <strong class="prix-prd"></strong>
                      </span>
                    </h4>
         
        
          <div>          
            <p class="description-prd">
              <?php echo substr($data['description'],0,40)?>...</p>
            </p>
          
      </div>
      </div>
    </div>

  </section>
  </div>
          <div class="container">
        <div class="row" id="similprd">
        </div>
        </div>
        
         

        <!--Footer-->
      
      </div>
      <!--/.Content-->
    </div>
  </div>
  
   
