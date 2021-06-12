
<div class="row" style="margin-right: -1px !important;
    margin-left: -1px !important;">
<?php
require "connexion.php";
$souscat="";
if(isset($_GET['souscat']))
{
$requete="SELECT `id`,`nom`,`prix`,`description` FROM `produits` WHERE `fiber`=$souscat";
}
else
{
$requete="SELECT `id`,`nom`,`prix`,`description` FROM `produits` WHERE `nv`=1 LIMIT 6";
}


$reponse=$bdd->query($requete);

while($data=$reponse->fetch())
{
?>
      

          <div class="col-lg-2 imgcard">


              
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

 <div class=" col-lg-12 insta">
              <hr style="border: 0;border-top: 2px solid #ececec;">
              <h3 style="text-align: center;">
                shop our Instagram
                <a href="https://www.instagram.com/one_hajar/"><small style="color: #745975">@deyarn</small></a>
              </h3>
               <hr style="border: 0;border-top: 2px solid #ececec;">
              <h5>Shop community submissions or add your own using #deyarn</h5>
            <div class="owl-carousel owl-theme">

          <div class="item">
            <a href="https://www.instagram.com/p/B9pKdwEn3Ei/">
            <img class="post" src="img/lolo.jpg">
            </a>
           <div class="instades">
           <small>Winter comes full of garments made from comfortable fabrics that feel like an embrace. This season we have added tricot, ideal for playing outdoors, to the existing fleece and soft jersey fabrics.</small>
          </div>
          </div>
        <div class="item">
              <a href="https://www.instagram.com/p/B9pKdwEn3Ei/">
              <img  class="post" src="img/la.jpg">
              </a>
             <div class="instades">
              <small>Discover more than 250 patterns of garments and complements for Ladies, Men, Children, Babies and Home.
              Find all the necessary material to make your projects on our online yarn shop.</small>
          </div>
          </div>

          <div class="item">
            <a href="https://www.instagram.com/p/B9pKdwEn3Ei/">
            <img  class="post" src="img/BGG.jpg" >
            </a>
           <div class="instades">
            <small>Discover more than 250 patterns of garments and complements for Ladies, Men, Children, Babies and Home.
              Find all the necessary material to make your projects on our online yarn shop.</small>
          </div>
          </div>

          <div class="item">
             <a href="https://www.instagram.com/p/B9pKdwEn3Ei/">
             <img  class="post" src="img/li.jpg"  >
             </a>
            <div class="instades">
              <small>Discover more than 250 patterns of garments and complements for Ladies, Men, Children, Babies and Home.
              Find all the necessary material to make your projects on our online yarn shop.</small>
          </div>
          </div>

          <div class="item" >
             <a href="https://www.instagram.com/p/B9pKdwEn3Ei/">
             <img  class="post" src="img/la.jpg" >
             </a>
            <div class="instades">
              <small>Discover more than 250 patterns of garments and complements for Ladies, Men, Children, Babies and Home.
              Find all the necessary material to make your projects on our online yarn shop.</small>
          </div>
          </div>

          <div class="item">
            <a href="https://www.instagram.com/p/B9pKdwEn3Ei/">
            <img class="post" src="img/lo.jpg" > 
            </a>
            <div class="instades">
              <small>Discover more than 250 patterns of garments and complements for Ladies, Men, Children, Babies and Home.
              Find all the necessary material to make your projects on our online yarn shop.</small>
            </div>
            </div>
 </div>
 </div>
 






  <div class="modal fade " id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
            <input type="hidden" class="idproduit" value="<?php echo $data['id']?>">
         <img style="max-width: 100%;" src="https://z9t4u9f6.stackpathcdn.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg" alt="Material Design for Bootstrap - dashboard"
            class="img-fluid img-prd" style="max-width: 40%;">
             
        
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



   