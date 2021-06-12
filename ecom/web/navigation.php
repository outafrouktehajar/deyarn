  <!--Main Navigation-->
  <header>
  <center>
<div class="logo"> 
        <img src="img/LOGODEYARN.png" class="logody">    
        <div  class="d-flex flex-row  align-items-center faic"> 
      
      <i class=" fas fa-shopping-cart bagshp  position-relative" style='font-size:20px; cursor: pointer;'>
           <span class="badge badge-pill badge-danger position-absolute">
                <?php
                if(!isset( $_SESSION['panier']))
                   
                {
                 echo 0;
                }
                else
                {
                  echo count($_SESSION['panier']['id']);
                }


                ?>
              </span>
         </i>
      <a class="nav-link dropdown-toggle fasic" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><button style="background-color: white; border: white" type="button" data-toggle="modal" data-target="#myModal">
          <i class="fas fa-user" style='font-size:20px; cursor: pointer;'></i></button></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item account" >My account</a>
          <a class="dropdown-item" id="btnlogout"></a>
         
        
        </div>


             <a class="fasic"><i class='fas fa-heart baglike position-relative' style='font-size:20px'>
               <span class="badge badge-pill badge-danger position-absolute">
                <?php
                if(!isset( $_SESSION['like']))
                   
                {
                 echo 0;
                }
                else
                {
                  echo count($_SESSION['like']['id']);
                }


                ?>
              </span>
        </i></a>
        </div>    
</div>

</center>

    <!--Navbar-->
    <nav class=" mb-1 navbar navbarmenu navbar-expand-lg navbar-dark lighten-1 ">
     

      <!-- Additional container -->
      <div class="container">
 
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse">

          <!-- Links -->
               <ul  style="font-size: 1em;" class="navbar-nav mr-auto ">
                 <?php
                $urlpage=$_SERVER['PHP_SELF'];
                $pospage = strpos($urlpage, 'index');
                ?> 

            <li class="nav-item  <?php echo $pospage==false ? '' : 'active' ?>">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>


             <?php
                $pospage = strpos($urlpage, 'yarns');
                ?> 
            <li class="nav-item dropdown <?php echo $pospage==false ? '' : 'active' ?>">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Yarns</a>
                   <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" style="width: 1350px; height: 350px;margin-left:-228px;">
                    <div class="row ">
                         <div class="col-sm-4" >
                          <ul>
                            <li style="list-style: none;"><h4 style="font-weight: bold;">Composition</h4> </li>
                          </ul>
                          <ul class="listdrop" style=" column-count: 3;">
                            <?php
                              $reponse=$bdd->query("SELECT * FROM `shop` WHERE `id`=2");
                              while($data=$reponse->fetch())
                              {
                              ?>      
                              <?php
                                  $idcat=$data['id'];
                                  $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id_shop`=$idcat");
                                   while($sousData=$sousReponse->fetch())
                                  {
                                    $idsouscat=$sousData['id'];
                                  ?>
                                      <li style="list-style: none;"><a href="yarns.php?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"> <h6><?php echo $sousData['nom']?></h6></a></li>

                                     
                                  <?php
                                  }
                                ?>
                            </li>
                      <?php
                         }
                       ?>
                      
                      

                    </ul>

               </div>

               <div class="col-sm-3"  style="border-left: solid 2px #aaaaaa; border-right: solid 2px #aaaaaa; ">
                 <ul>
                            <li style="list-style: none;"><h4 style="font-weight: bold;">Types</h4> </li>
                          </ul>
                          <ul class="listdrop">
                            <?php
                              $reponse=$bdd->query("SELECT * FROM `shop` WHERE `id`=1");
                              while($data=$reponse->fetch())
                              {
                              ?>      
                              <?php
                                  $idcat=$data['id'];
                                  $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id_shop`=$idcat");
                                   while($sousData=$sousReponse->fetch())
                                  {
                                    $idsouscat=$sousData['id'];
                                  ?>
                                      <li style="list-style: none;"><a href="yarns.php?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"> <h6><?php echo $sousData['nom']?></h6></a></li>

                                     
                                  <?php
                                  }
                                ?>
                            </li>
                      <?php
                         }
                       ?>
                      
                      

                    </ul>

               </div>
                </div>
                   </div>

            </li>


                 <?php
                $pospage = strpos($urlpage, 'needlesandhooks');
                ?> 
            <li class="nav-item <?php echo $pospage==false ? '' : 'active' ?>">
              <a class="nav-link" href="needlesandhooks.php">Needles & Hooks</a>

              
            </li>
            <?php
                $pospage = strpos($urlpage, 'aboutus');
                ?> 
            <li class="nav-item <?php echo $pospage==false ? '' : 'active' ?>">
              <a class="nav-link" href="aboutus.php">About Us</a>
               
            </li>
          </ul>
         

          <!-- Links  -->

    
        <div class="input-group-btn search " style="float: right;padding: 10px; width: 300px;">
        <form>
          <input type="search">
        </form>


   
         
        </div>
        <!-- Collapsible content -->

      </div>

    
    </div>
  </div>

    </nav>



     <div class="modal fade loginmodal" id="myModal" role="dialog">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">
        

      <!-- Grid column -->
      
        <!--Modal cascading tabs-->
         
        <div class="modal-c-tabs">

          <!-- Nav tabs -->
     
          <ul class="nav nav-tabs md-tabs tabs-2 white darken-3" role="tablist">
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link active"  data-toggle="tab" href="#panel17" role="tab">
                <i class="fas fa-user mr-1"></i> Login</a>
            </li>
          </ul>
           

          <!-- Tab panels -->
          
          <div class="tab-content">
            <div class="view" >
                  <center>
                <img style="width:400px ; height: 200px;" src="img\log.png" alt="smaple image">
                </center>
                </div>
            <!--Panel 17-->
            
            <div class="tab-pane fade in show active" id="panel17" role="tabpanel" >
                <div class="modal-body mb-1" id="reponseLogin">
                         <?php
                            require "web/logi.html";
                        
                            ?>
                       
                   
                
                            
                

                   </div>
</div>
              <!--Body-->
       
           
           
            <!--/.Panel 7-->

            <!--Panel 18-->
           
            <!--/.Panel 8-->
          </div>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>

</header>
  <!--Main Navigation-->

  