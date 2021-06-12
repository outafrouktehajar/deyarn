  
         <h4 style="text-align: center; margin-top: 50px;">Shop all you need</h4>
          <div id="accordian" class="hooklist"> 
                <ul>
                  
                 <li>
                  <?php
                    $reponse=$bdd->query("SELECT * FROM `hookscat`");
                   while($data=$reponse->fetch())
                        {
                          $idsouscat=$data['id'];
                    ?>

                    <h6 class="mb-0"><a style="color: black" href="?souscat=<?php echo $idsouscat?>"><?php echo $data['nom']?></a>
                      <hr></h6>
                         
                  
                 
            <?php
               }
             ?>
            </li>

          </ul>
        </div>












