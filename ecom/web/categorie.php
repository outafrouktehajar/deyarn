
         <h4 style="text-align: center; margin-top: 50px;">Shop all yarn</h4>
          <div id="accordian"> 
                <ul >
    

                 <li>
                  <?php
                    $reponse=$bdd->query("SELECT * FROM `shop` WHERE NOT `id`=4");
                    while($data=$reponse->fetch())
                    {
                    ?>
                    <h6 class="mb-0"><?php echo $data['nom']?><i class="fas fa-plus" style="float: right; bottom: 10px;margin-top: 10px;"></i>
                      <hr></h6>
                         
                   <ul >
                    <?php
                        $idcat=$data['id'];
                        $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id_shop`=$idcat");
                         while($sousData=$sousReponse->fetch())
                        {
                          $idsouscat=$sousData['id'];
                        ?>
                            <li><a href="?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"> <h6><?php echo $sousData['nom']?></h6></a></li>

                           
                        <?php
                        }
                      ?>
                  </ul>
            <?php
               }
             ?>
            </li>
            <li>
                  <?php
                    $reponse=$bdd->query("SELECT * FROM `shop` WHERE  `id`=4");
                    while($data=$reponse->fetch())
                    {
                    ?>
                    <h6 class="mb-0"><?php echo $data['nom']?><i class="fas fa-plus" style="float: right; bottom: 10px;margin-top: 10px;"></i>
                      <hr></h6>
                         
                   <ul style="display: block;">
                    <?php
                        $idcat=$data['id'];
                        $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id`='24'");
                         while($sousData=$sousReponse->fetch())
                        {
                          $idsouscat=$sousData['id'];
                        ?>
                            <li><a href="?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"><div style="width: 35px;height: 35px;background-color:black; border-radius: 50%"><h6 style="margin-left: 100%;"><?php echo $sousData['nom']?></h6></div></a>
                            </li>
                            
                           
                        <?php
                        }
                      ?>

                       <?php
                        $idcat=$data['id'];
                        $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id`='25'");
                         while($sousData=$sousReponse->fetch())
                        {
                          $idsouscat=$sousData['id'];
                        ?>
                            <li><a href="?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"><div style="width: 35px;height: 35px;background-color:#0040ff; border-radius: 50%"><h6 style="margin-left: 100%;"><?php echo $sousData['nom']?></h6></div></a></li>
                            
                           
                        <?php
                        }
                      ?>
                      <?php
                        $idcat=$data['id'];
                        $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id`='26'");
                         while($sousData=$sousReponse->fetch())
                        {
                          $idsouscat=$sousData['id'];
                        ?>
                            <li><a href="?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"><div style="width: 35px;height: 35px;background-color: #cc6600; border-radius: 50%"><h6 style="margin-left: 100%;"><?php echo $sousData['nom']?></h6></div></a></li>
                            
                           
                        <?php
                        }
                      ?>

                       <?php
                        $idcat=$data['id'];
                        $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id`='30'");
                         while($sousData=$sousReponse->fetch())
                        {
                          $idsouscat=$sousData['id'];
                        ?>
                            <li><a href="?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"><div style="width: 35px;height: 35px;background-color: #B9B9B9;; border-radius: 50%"><h6 style="margin-left: 100%;"><?php echo $sousData['nom']?></h6></div> </a></li>
                            
                           
                        <?php
                        }
                      ?>
                      <?php
                        $idcat=$data['id'];
                        $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id`='27'");
                         while($sousData=$sousReponse->fetch())
                        {
                          $idsouscat=$sousData['id'];
                        ?>
                            <li><a href="?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"><div style="width: 35px;height: 35px;background-color: #FFFF00; border-radius: 50%"><h6 style="margin-left: 100%;"><?php echo $sousData['nom']?></h6></div></a></li>
                            
                           
                        <?php
                        }
                      ?>
                       <?php
                        $idcat=$data['id'];
                        $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id`='32'");
                         while($sousData=$sousReponse->fetch())
                        {
                          $idsouscat=$sousData['id'];
                        ?>
                            <li><a href="?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"><div style="width: 35px;height: 35px;background-color:pink; border-radius: 50%"><h6 style="margin-left: 100%;"><?php echo $sousData['nom']?></h6></div></a></li>
                            
                           
                        <?php
                        }
                      ?>
                      <?php
                        $idcat=$data['id'];
                        $sousReponse=$bdd->query("SELECT `id`,`nom` FROM `shopcat` WHERE `id`='31'");
                         while($sousData=$sousReponse->fetch())
                        {
                          $idsouscat=$sousData['id'];
                        ?>
                            <li><a href="?colonne=<?php echo $data['nom']?>&souscat=<?php echo $sousData['nom']?>"><div style="width: 35px;height: 35px;background: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);; border-radius: 50%"><h6 style="margin-left: 100%;"><?php echo $sousData['nom']?></h6></div></a></li>
                            
                           
                        <?php
                        }
                      ?>

                  </ul>
                 

            <?php
               }
             ?>
            </li>

          </ul>


        </div>












