<?php include('header.php'); ?>
<?php include('cnx.php'); ?>

   <div id="grand_titre"><h1>PARAMETRE IDENTITE DE L'ENTREPRISE</h1></div>
        

        
   <div id="body_general">


        <div id="premier_bloc_p">
                        
                        <?php
                                /* entreprise */
                                $requete = $cnx->prepare('SELECT * FROM entreprise WHERE ID=1');
                                $lecteur=$requete->execute();  
                                $entreprise = $requete->fetch(PDO::FETCH_OBJ);        
                        ?>

                        <div id="bloc_1">                                
                                            <div class="titre">Entreprise</div>                                

                                            <div class="bloc">                                
                                                <div class="blo2"><p>NOM ENTREPRISE</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_1; ?></p></div> 
                                            </div>

                                            <div class="bloc">                                
                                                <div class="blo2"><p>DIRECTEUR</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_2; ?></p></div> 
                                            </div>


                                            <div class="bloc">                                
                                                <div class="blo2"><p>RAISON SOCIALE</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_3; ?></p></div> 
                                            </div>


                                            <div class="bloc">                                
                                                <div class="blo2"><p>NUMERO DE TELEPHONE</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_4; ?></p></div> 
                                            </div>
                                            
                                        
                                            <div class="bloc">
                                                <div class="blo2"><p>NOMBRE D'ETABLISSEMENTS</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_5; ?></p></div> 
                                            </div>

                                            <div class="bloc">
                                                <div class="blo2"><p>ADRESSE DU SIEGE</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_6; ?></p></div> 
                                            </div>


                                            <div class="bloc">
                                                <div class="blo2"><p>NOM DU GERANT / CHEF D'ENTREPRISE</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_7; ?></p></div> 
                                            </div>


                                            <div class="bloc">
                                                <div class="blo2"><p>ACTIVITE PRINCIPALE</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_8; ?></p></div> 
                                            </div>


                                            <div class="bloc">
                                                <div class="blo2"><p>CODE NAF/APE</p></div> 
                                                <div class="blo"><p><?php echo  $entreprise->variable_9; ?></p></div> 
                                            </div>      
                         </div>



                         <?php
                                /* entreprise */
                                $requete = $cnx->prepare('SELECT * FROM effectif WHERE ID=1');
                                $requete->execute();  
                                $effectif = $requete->fetch(PDO::FETCH_OBJ);   
                               
                        ?>



                    <div id="bloc_2">
                                        <div class="titre">Effectif</div>
                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE SALARIES TOTAL</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_1; ?></p></div> 
                                        </div>
                                        
                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE FEMMES</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_2; ?></p></div> 
                                        </div>

                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE D'INTERIMAIRES</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_3; ?></p></div> 
                                        </div>


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE SALARIES HANDICAPES</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_4; ?></p></div> 
                                        </div>


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE MOINS DE 18 ANS</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_5; ?></p></div> 
                                        </div>


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE CDD</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_6; ?></p></div> 
                                        </div>      
                                        
                                        
                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE CONTRATS EN ALTERNANCE</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_7; ?></p></div> 
                                        </div>      


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE CADRES</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_8; ?></p></div> 
                                        </div>   
                                        
                                        
                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE PERSONNES EN SIR (Suivi Individuel Renforcé)</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_9; ?></p></div> 
                                        </div>  


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE PERSONNES EN SIA (Suivi Individuel Adapté)</p></div> 
                                            <div class="blo"><p><?php echo  $effectif->variable_10; ?></p></div> 
                                        </div> 
                     </div>


                     <?php
                                /* poste_de_travail_2 */                            
                                $requete = $cnx->prepare('SELECT * FROM poste_de_travail_2 WHERE ID=1');
                                $requete->execute();  
                                $poste_de_travail_2 = $requete->fetch(PDO::FETCH_OBJ);   
                               
                        ?>




                <div id="bloc_3">
                    <div class="titre">Poste de travail</div>        
                    <div class="bloc">
                        <div class="blo2"><p>LES DIFFERENTS CORPS DE METIERS / UNITES DE TRAVAIL</p></div> 
                        <div class="blo">

                            
                        <?php    
                                /* poste_de_travail_1 */   
                                $requete = $cnx->prepare('SELECT * FROM poste_de_travail_1');
                                $requete->execute();                              
                                while ($poste_de_travail_1 = $requete->fetch(PDO::FETCH_OBJ))
                                      { 
                                        ?>
                                       <?php echo   $poste_de_travail_1->variables_1; ?><br/>              
                                        <?php  
                                      }
                        ?>               
                       </div> 
                    </div>
                  
                    <div class="bloc">
                        <div class="blo2"><p>DUREE HEBDOMADAIRE DU TRAVAIL</p></div> 
                        <div class="blo"><p><?php echo  $poste_de_travail_2->variable_1; ?></p></div> 
                    </div>

                    <div class="bloc">
                        <div class="blo2"><p>NOMBRE DE SALARIES EN TRAVAIL DE NUIT</p></div> 
                        <div class="blo"><p><?php echo  $poste_de_travail_2->variable_2; ?></p></div> 
                    </div>


                    <div class="bloc">
                        <div class="blo2"><p>NOMBRE DE SALARIES EN TRAVAIL POSTE</p></div> 
                        <div class="blo"><p><?php echo  $poste_de_travail_2->variable_3; ?></p></div> 
                    </div>
              </div>

               <?php

                    if(isset($_GET['ID']))
                    {
                          $supprimer=$_GET['ID'];
                       //   $requete = $cnx->prepare("DELETE FROM `poste_de_travail_1` WHERE ID=$supprimer");
                       //   $requete->execute();
                   // header('location:parametre_identite.php?ID=3'); 


                   //    $id=$_GET['id'];
                   //    $client_modification='client-'.$_SESSION['identifiant']; 
                   //    $requete = $bdd->prepare("DELETE FROM `$client_modification` WHERE ID=$id");
                   //    $requete->execute();
                   //    header('location:plan_actions_entreprise.php?action=Parametrer_plan_actions'); 



                    }



                ?>



              <?php
               /* Paramétre version */
               $requete = $cnx->prepare('SELECT * FROM  parametre_version  WHERE ID=1');
               $requete->execute();  
                $parametre_version=$requete->fetch(PDO::FETCH_OBJ);            
               ?>


                <div id="bloc_4">
                    <div class="titre">Paramétre version</div>        
                    <div class="bloc">
                        <div class="blo2"><p>Date de création   </p></div> 
                        <div class="blo"><p><?php echo  $parametre_version->variable_1; ?></p></div> 
                    </div>

                    <div class="bloc">
                        <div class="blo2"><p>Date de mise à jour</div> 
                        <div class="blo"><p><?php echo  $parametre_version->variable_2; ?></p></div> 
                    </div>
    
                    <div class="bloc">
                        <div class="blo2"><p>N°de version</p></div> 
                        <div class="blo"><p><?php echo  $parametre_version->variable_3; ?></p></div> 
                    </div>               
    
            </div>
  


         <?php
               /* partenaires_de_sante */

               $requete = $cnx->prepare('SELECT * FROM partenaires_de_sante WHERE ID=1');
               $requete->execute();  
                $partenaires_de_sante=$requete->fetch(PDO::FETCH_OBJ);   
                               
         ?>


            <div id="bloc_5">
                <div class="titre">Partenaires de sante</div>           
                <div class="bloc">
                    <div class="blo2"><p>EXISTENCE D'UN CSE (Comité Social et Economique)</p></div> 
                    <div class="blo"><p><?=  $partenaires_de_sante->variables_1 ?></p></div> 
                </div>
              
                <div class="bloc">
                    <div class="blo2"><p>EXISTENCE DE SST (Sauveteurs Secouristes du Travail)</div> 
                    <div class="blo"><p><?=  $partenaires_de_sante->variables_2 ?></p></div> 
                </div>
    
                <div class="bloc">
                    <div class="blo2"><p>NOM DU SERVICE DE SANTE AU TRAVAIL</p></div> 
                    <div class="blo"><p><?=  $partenaires_de_sante->variables_3 ?></p></div> 
                </div>  
                
                
                <div class="bloc">
                    <div class="blo2"><p>NOM DU MEDECIN DU TRAVAIL</p></div> 
                    <div class="blo"><p><?=  $partenaires_de_sante->variables_4 ?></p></div> 
                </div>  
    
        </div>


        <?php
               /* indicateurs_de_sante_au_travail */

               $requete = $cnx->prepare('SELECT * FROM indicateurs_de_sante_au_travail WHERE ID=1');
               $requete->execute();  
                $indicateurs_de_sante_au_travail=$requete->fetch(PDO::FETCH_OBJ);   
                               
         ?>




        <div id="bloc_6">
            <div class="titre">Indicateurs de sante au travail</div>                
            <div class="bloc">
                <div class="blo2"><p>NOMBRE D'AT (Accidents de Travail) DECLARES AU COURS DES 12 DERNIERS MOIS</p></div> 
                <div class="blo"><p><?=  $indicateurs_de_sante_au_travail->variable_1 ?></p></div> 
            </div>
        
            <div class="bloc">
                <div class="blo2"><p>NOMBRE D'ACCIDENTS DU TRAJET DECLARES AU COURS DES 12 DERNIERS MOIS</div> 
                <div class="blo"><p><?=  $indicateurs_de_sante_au_travail->variable_2 ?></p></div> 
            </div>
    
            <div class="bloc">
                <div class="blo2"><p>NOMBRE D'IPP (Incapacités Professionnelles Permanentes) LIEES A UN AT</p></div> 
                <div class="blo"><p><?=  $indicateurs_de_sante_au_travail->variable_3 ?></p></div> 
            </div>  
            
            
            <div class="bloc">
                <div class="blo2"><p>NOMBRE D'INAPTITUDES ETABLIES PAR LE MEDECIN DU TRAVAIL</p></div> 
                <div class="blo"><p><?=  $indicateurs_de_sante_au_travail->variable_4 ?></p></div> 
            </div>  
      </div>


</div>
<!-- <div id="bouton_envoyer"><input type="submit" name="envoyer" value="soumettre"/> </div> -->
          


</div>   


</body>
</html>