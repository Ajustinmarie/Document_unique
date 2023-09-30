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
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_1" name="bloc_1_variables_1" value="<?php echo  $entreprise->variable_1; ?>"><br/>Veuillez renseigner une valeur</p></div> 
                                            </div>

                                            <div class="bloc">                                
                                                <div class="blo2"><p>DIRECTEUR</p></div> 
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_2" name="bloc_1_variables_2" value="<?php echo  $entreprise->variable_2; ?>" ></p></div> 
                                            </div>


                                            <div class="bloc">                                
                                                <div class="blo2"><p>RAISON SOCIALE</p></div> 
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_3" name="bloc_1_variables_3" value="<?php echo  $entreprise->variable_3; ?>"></p></div> 
                                            </div>


                                            <div class="bloc">                                
                                                <div class="blo2"><p>NUMERO DE TELEPHONE</p></div> 
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_4" name="bloc_1_variables_4" value="<?php echo  $entreprise->variable_4; ?>"></p></div> 
                                            </div>
                                            
                                        
                                            <div class="bloc">
                                                <div class="blo2"><p>NOMBRE D'ETABLISSEMENTS</p></div> 
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_5" name="bloc_1_variables_5" value="<?php echo  $entreprise->variable_5; ?>"></p></div> 
                                            </div>

                                            <div class="bloc">
                                                <div class="blo2"><p>ADRESSE DU SIEGE</p></div> 
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_6" name="bloc_1_variables_6" value="<?php echo  $entreprise->variable_6; ?>"></p></div> 
                                            </div>


                                            <div class="bloc">
                                                <div class="blo2"><p>NOM DU GERANT / CHEF D'ENTREPRISE</p></div> 
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_7" name="bloc_1_variables_7" value="<?php echo  $entreprise->variable_7; ?>"></p></div> 
                                            </div>


                                            <div class="bloc">
                                                <div class="blo2"><p>ACTIVITE PRINCIPALE</p></div> 
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_8" name="bloc_1_variables_8" value="<?php echo  $entreprise->variable_8; ?>"></p></div> 
                                            </div>


                                            <div class="bloc">
                                                <div class="blo2"><p>CODE NAF/APE</p></div> 
                                                <div class="blo"><p><input type="text" class="dim" id="bloc_1_variables_9" name="bloc_1_variables_9" value="<?php echo  $entreprise->variable_9; ?>"></p></div> 
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
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_1"  name="bloc_2_variables_1" value="<?php echo  $effectif->variable_1; ?>"></p></div> 
                                        </div>
                                        
                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE FEMMES</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_2" name="bloc_2_variables_2" value="<?php echo  $effectif->variable_2; ?>"></p></div> 
                                        </div>

                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE D'INTERIMAIRES</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_3" name="bloc_2_variables_3" value="<?php echo  $effectif->variable_3; ?>"></p></div> 
                                        </div>


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE SALARIES HANDICAPES</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_4" name="bloc_2_variables_4" value="<?php echo  $effectif->variable_4; ?>"></p></div> 
                                        </div>


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE MOINS DE 18 ANS</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_5" name="bloc_2_variables_5" value="<?php echo  $effectif->variable_5; ?>"></p></div> 
                                        </div>


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE CDD</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_6" name="bloc_2_variables_6" value="<?php echo  $effectif->variable_6; ?>"></p></div> 
                                        </div>      
                                        
                                        
                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE CONTRATS EN ALTERNANCE</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_7"  name="bloc_2_variables_7" value="<?php echo  $effectif->variable_7; ?>"></p></div> 
                                        </div>      


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE CADRES</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_8" name="bloc_2_variables_8" value="<?php echo  $effectif->variable_8; ?>"></p></div> 
                                        </div>   
                                        
                                        
                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE PERSONNES EN SIR (Suivi Individuel Renforcé)</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_9" name="bloc_2_variables_9" value="<?php echo  $effectif->variable_9; ?>"></p></div> 
                                        </div>  


                                        <div class="bloc">
                                            <div class="blo2"><p>NOMBRE DE PERSONNES EN SIA (Suivi Individuel Adapté)</p></div> 
                                            <div class="blo"><p><input type="text" class="dim" id="bloc_2_variables_10" name="bloc_2_variables_10" value="<?php echo  $effectif->variable_10; ?>"></p></div> 
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
                        <div class="blo2"><p>LES DIFFERENTS CORPS DE METIERS / UNITES DE TRAVAIL <button id="ajout_input"><img src="img/ajout.jpg" id="ajout" alt=""></button></p></div> 
                        <div class="blo">

                            
                        <?php    
                                /* poste_de_travail_1 */   
                                $requete = $cnx->prepare('SELECT * FROM poste_de_travail_1');
                                $requete->execute();                              
                                while ($poste_de_travail_1 = $requete->fetch(PDO::FETCH_OBJ))
                                      { 
                                        ?>
                                        <input type="text" id="<?php echo   $poste_de_travail_1->ID; ?>"   value="<?php echo   $poste_de_travail_1->variables_1; ?>" name="<?php echo   $poste_de_travail_1->ID; ?>"><button class="ident" data_numero="<?php echo   $poste_de_travail_1->ID; ?>" ><img src="img/corbeille.jpg" id="corbeille" alt=""><input type="hidden" name=""  value="<?php echo   $poste_de_travail_1->ID; ?>"></button></a> <button class="update_1" data_numero="<?php echo   $poste_de_travail_1->ID; ?>"><img src="img/update.jpg" id="update" alt=""></button><br/><br/>              
                                        <?php  
                                      }
                        ?>               
                       </div> 
                    </div>
                  
                    <div class="bloc">
                        <div class="blo2"><p>DUREE HEBDOMADAIRE DU TRAVAIL</p></div> 
                        <div class="blo"><p><input type="text" class="dim" id="bloc_3_variables_2"  name="bloc_3_variables_2" value="<?php echo  $poste_de_travail_2->variable_1; ?>" ></p></div> 
                    </div>

                    <div class="bloc">
                        <div class="blo2"><p>NOMBRE DE SALARIES EN TRAVAIL DE NUIT</p></div> 
                        <div class="blo"><p><input type="text" class="dim"  value="<?php echo  $poste_de_travail_2->variable_2; ?>" id="bloc_3_variables_3" name="bloc_3_variables_3"></p></div> 
                    </div>


                    <div class="bloc">
                        <div class="blo2"><p>NOMBRE DE SALARIES EN TRAVAIL POSTE</p></div> 
                        <div class="blo"><p><input type="text" class="dim" value="<?php echo  $poste_de_travail_2->variable_3; ?>" id="bloc_3_variables_4" name="bloc_3_variables_4"></p></div> 
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
                        <div class="blo"><p><input name="bloc_4_variables_1" value="<?php echo  $parametre_version->variable_1; ?>" type="date"></p></div> 
                    </div>

                    <div class="bloc">
                        <div class="blo2"><p>Date de mise à jour</div> 
                        <div class="blo"><p><input name="bloc_4_variables_2" value="<?php echo  $parametre_version->variable_2; ?>" type="date"></p></div> 
                    </div>
    
                    <div class="bloc">
                        <div class="blo2"><p>N°de version</p></div> 
                        <div class="blo"><p><input name="bloc_4_variables_3" value="<?php echo  $parametre_version->variable_3; ?>" type="number"></p></div> 
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
                        <div class="blo"><p><input type="text" value="<?=  $partenaires_de_sante->variables_1 ?>"  class="dim" name="bloc_5_variables_1"></p></div> 
                    </div>
                
                    <div class="bloc">
                        <div class="blo2"><p>EXISTENCE DE SST (Sauveteurs Secouristes du Travail)</div> 
                        <div class="blo"><p><input type="text" class="dim" value="<?=  $partenaires_de_sante->variables_2 ?>" name="bloc_5_variables_2"></p></div> 
                    </div>
        
                    <div class="bloc">
                        <div class="blo2"><p>NOM DU SERVICE DE SANTE AU TRAVAIL</p></div> 
                        <div class="blo"><p><input type="text" value="<?=  $partenaires_de_sante->variables_3 ?>" class="dim" name="bloc_5_variables_3"></p></div> 
                    </div>  
                    
                    
                    <div class="bloc">
                        <div class="blo2"><p>NOM DU MEDECIN DU TRAVAIL</p></div> 
                        <div class="blo"><p><input type="text" class="dim" value="<?=  $partenaires_de_sante->variables_4 ?>" name="bloc_5_variables_4"></p></div> 
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
                    <div class="blo"><p><input type="text" class="dim" value="<?=  $indicateurs_de_sante_au_travail->variable_1 ?>" name="bloc_6_variables_1"></p></div> 
                </div>
            
                <div class="bloc">
                    <div class="blo2"><p>NOMBRE D'ACCIDENTS DU TRAJET DECLARES AU COURS DES 12 DERNIERS MOIS</div> 
                    <div class="blo"><p><input type="text" class="dim" value="<?=  $indicateurs_de_sante_au_travail->variable_2 ?>" name="bloc_6_variables_2"></p></div> 
                </div>
        
                <div class="bloc">
                    <div class="blo2"><p>NOMBRE D'IPP (Incapacités Professionnelles Permanentes) LIEES A UN AT</p></div> 
                    <div class="blo"><p><input type="text" class="dim" value="<?=  $indicateurs_de_sante_au_travail->variable_3 ?>" name="bloc_6_variables_3"></p></div> 
                </div>  
                
                
                <div class="bloc">
                    <div class="blo2"><p>NOMBRE D'INAPTITUDES ETABLIES PAR LE MEDECIN DU TRAVAIL</p></div> 
                    <div class="blo"><p><input type="text" class="dim" value="<?=  $indicateurs_de_sante_au_travail->variable_4 ?>" name="bloc_6_variables_4"></p></div> 
                </div>  
      </div>

    
      

</div>

           <div id="bloc_envoyer_conteneur" style="display:flex; flex-direction:row; justify-content:center">
                <div id="bloc_envoyer_contenu">
                    <button id="bouton_envoyer" style="width:200px; height:50px">Soumettre</button>
                </div>
               
 </div>
<!-- <div id="bouton_envoyer"><input type="submit" name="envoyer" value="soumettre"/> </div> -->
          


 


            <?php 
                  

                   if(isset($_POST['envoyer']))
                   {
                 
                                    $bloc_1_variables_1= htmlspecialchars($_POST['bloc_1_variables_1']);
                                    $bloc_1_variables_2=htmlspecialchars($_POST['bloc_1_variables_2']);
                                    $bloc_1_variables_3=htmlspecialchars($_POST['bloc_1_variables_3']);
                                    $bloc_1_variables_4=htmlspecialchars($_POST['bloc_1_variables_4']);
                                    $bloc_1_variables_5=htmlspecialchars($_POST['bloc_1_variables_5']);
                                    $bloc_1_variables_6=htmlspecialchars($_POST['bloc_1_variables_6']);
                                    $bloc_1_variables_7=htmlspecialchars($_POST['bloc_1_variables_7']);
                                    $bloc_1_variables_8=htmlspecialchars($_POST['bloc_1_variables_8']);
                                    $bloc_1_variables_9=htmlspecialchars($_POST['bloc_1_variables_9']);
                
                                    $bloc_2_variables_1=htmlspecialchars($_POST['bloc_2_variables_1']);
                                    $bloc_2_variables_2=htmlspecialchars($_POST['bloc_2_variables_2']);
                                    $bloc_2_variables_3=htmlspecialchars($_POST['bloc_2_variables_3']);
                                    $bloc_2_variables_4=htmlspecialchars($_POST['bloc_2_variables_4']);
                                    $bloc_2_variables_5=htmlspecialchars($_POST['bloc_2_variables_5']);
                                    $bloc_2_variables_6=htmlspecialchars($_POST['bloc_2_variables_6']);
                                    $bloc_2_variables_7=htmlspecialchars($_POST['bloc_2_variables_7']);
                                    $bloc_2_variables_8=htmlspecialchars($_POST['bloc_2_variables_8']);
                                    $bloc_2_variables_9=htmlspecialchars($_POST['bloc_2_variables_9']);
                                    $bloc_2_variables_10=htmlspecialchars($_POST['bloc_2_variables_10']);
                
                
                                    $bloc_3_variables_1=htmlspecialchars($_POST['bloc_3_variables_1']);
                                    $bloc_3_variables_2=htmlspecialchars($_POST['bloc_3_variables_2']);
                                    $bloc_3_variables_3=htmlspecialchars($_POST['bloc_3_variables_3']);
                                    $bloc_3_variables_4=htmlspecialchars($_POST['bloc_3_variables_4']);
                
                
                                    $bloc_5_variables_1=htmlspecialchars($_POST['bloc_5_variables_1']);
                                    $bloc_5_variables_2=htmlspecialchars($_POST['bloc_5_variables_2']);
                                    $bloc_5_variables_3=htmlspecialchars($_POST['bloc_5_variables_3']);
                                    $bloc_5_variables_4=htmlspecialchars($_POST['bloc_5_variables_4']);
                
                
                                    $bloc_6_variables_1=htmlspecialchars($_POST['bloc_6_variables_1']);
                                    $bloc_6_variables_2=htmlspecialchars($_POST['bloc_6_variables_2']);
                                    $bloc_6_variables_3=htmlspecialchars($_POST['bloc_6_variables_3']);
                                    $bloc_6_variables_4=htmlspecialchars($_POST['bloc_6_variables_4']);


                                    $bloc_4_variables_1=$_POST['bloc_4_variables_1'];
                                    $bloc_4_variables_2=$_POST['bloc_4_variables_2'];
                                    $bloc_4_variables_3=$_POST['bloc_4_variables_3'];


//Parametre version
//$requete1 = $cnx->prepare("INSERT INTO parametre_version(variable_1,variable_2,variable_3,relation_ID) VALUES (?,?,?,?)");
// $requete1 -> execute(array($bloc_4_variables_1,$bloc_4_variables_2,$bloc_4_variables_3,0));


$requete = $cnx->prepare("UPDATE `parametre_version` SET 
variable_1='$bloc_4_variables_1', 
variable_2='$bloc_4_variables_2', 
variable_3='$bloc_4_variables_3'
WHERE ID=1");
$requete -> execute(); 






// Entreprise                               
// $requete1 = $cnx->prepare("INSERT INTO entreprise(variable_1,variable_2,variable_3,variable_4,variable_5,variable_6,variable_7,variable_8,variable_9,relation_ID) VALUES (?,?,?,?,?,?,?,?,?,?)");
// $requete1 -> execute(array($bloc_1_variables_1,$bloc_1_variables_2,$bloc_1_variables_3,$bloc_1_variables_4,$bloc_1_variables_5,$bloc_1_variables_6,$bloc_1_variables_7,$bloc_1_variables_8,$bloc_1_variables_9,0)); 

 $requete = $cnx->prepare("UPDATE `entreprise` SET 
                           variable_1='$bloc_1_variables_1', 
                           variable_2='$bloc_1_variables_2', 
                           variable_3='$bloc_1_variables_3',
                           variable_4='$bloc_1_variables_4',
                           variable_5='$bloc_1_variables_5',
                           variable_6='$bloc_1_variables_6',
                           variable_7='$bloc_1_variables_7',
                           variable_8='$bloc_1_variables_8',
                           variable_9='$bloc_1_variables_9' WHERE ID=1");
 $requete -> execute(); 


// Effectif
// $requete2 = $cnx->prepare("INSERT INTO effectif(variable_1,variable_2,variable_3,variable_4,variable_5,variable_6,variable_7,variable_8,variable_9,variable_10,relation_ID) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
// $requete2 -> execute(array($bloc_2_variables_1,$bloc_2_variables_2,$bloc_2_variables_3,$bloc_2_variables_4,$bloc_2_variables_5,$bloc_2_variables_6,$bloc_2_variables_7,$bloc_2_variables_8,$bloc_2_variables_9,$bloc_2_variables_10,0)); 

$requete = $cnx->prepare("UPDATE `effectif` SET variable_1='$bloc_2_variables_1', variable_2='$bloc_2_variables_2', variable_3='$bloc_2_variables_3',variable_4='$bloc_2_variables_4',variable_5='$bloc_2_variables_5',variable_6='$bloc_2_variables_6',variable_7='$bloc_2_variables_7',variable_8='$bloc_2_variables_8',variable_9='$bloc_2_variables_9',variable_10='$bloc_2_variables_10' WHERE ID=1");
$requete -> execute(); 

// Poste de travail 2
// $requete4 = $cnx->prepare("INSERT INTO  poste_de_travail_2(variable_1,variable_2,variable_3,relation_ID) VALUES (?,?,?,?)");
//  $requete4 -> execute(array($bloc_3_variables_1,$bloc_3_variables_2,$bloc_3_variables_3,0)); 

$requete = $cnx->prepare("UPDATE `poste_de_travail_2` SET variable_1='$bloc_3_variables_1', variable_2='$bloc_3_variables_2', variable_3='$bloc_3_variables_3' WHERE ID=1");
$requete -> execute(); 
    
// Poste de travail 1
//  $requete5 = $cnx->prepare("INSERT INTO  poste_de_travail_1(variables_1,relation_ID) VALUES (?,?)");
//  $requete5 -> execute(array($bloc_3_variables_1,0)); 

$requete = $cnx->prepare("UPDATE `poste_de_travail_1` SET variables_1='$bloc_3_variables_1' WHERE ID=1");
$requete -> execute(); 

// Partenaires de sante
// $requete6 = $cnx->prepare("INSERT INTO  partenaires_de_sante(variables_1,variables_2,variables_3,variables_4,relation_ID) VALUES (?,?,?,?,?)");
// $requete6 -> execute(array($bloc_5_variables_1,$bloc_5_variables_2,$bloc_5_variables_3,$bloc_5_variables_4,0)); 

$requete = $cnx->prepare("UPDATE `partenaires_de_sante` SET variables_1='$bloc_5_variables_1',variables_2='$bloc_5_variables_2',variables_3='$bloc_5_variables_3',variables_4='$bloc_5_variables_4' WHERE ID=1");
$requete -> execute(); 

// Indicateurs de sante au travail
// $requete7 = $cnx->prepare("INSERT INTO  indicateurs_de_sante_au_travail(variable_1,variable_2,variable_3,variable_4,relation_ID) VALUES (?,?,?,?,?)");
// $requete7 -> execute(array($bloc_6_variables_1,$bloc_6_variables_2,$bloc_6_variables_3,$bloc_6_variables_4,0)); 

$requete = $cnx->prepare("UPDATE `indicateurs_de_sante_au_travail` SET variable_1='$bloc_6_variables_1',variable_2='$bloc_6_variables_2',variable_3='$bloc_6_variables_3',variable_4='$bloc_6_variables_4' WHERE ID=1");
$requete -> execute();




}
 

                   
?>




<script>





    

// const identite=document.querySelectorAll('.ident');



// for(i=0; i<5; i++)

// {
     
//    identite[i].addEventListener("click",function(){        
        // Récuperer le numero de la question
//        let numero = this.getAttribute('data_numero');
 //       console.log(numero);
 //       var id_post_travail_supprimer=numero;
 // });


// }

</script>




<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
 <script src="js/script_charge_bloc_3.js"></script> 
 <script src="js/script.js"></script>  



</body>
</html>