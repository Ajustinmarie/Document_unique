<?php include('header.php'); ?>
<?php include('cnx.php'); ?>

    <div id="grand_titre"><h1>GRILLE IDENTIFICATION</h1></div>


<?php
    if(isset($_GET['numero_id']))
    {   
        if(!empty($_GET['numero_id']))
        {
            $ID=$_GET['numero_id'];
            $requete = $cnx->prepare("SELECT * FROM actions_risque WHERE ID=$ID");
            $requete->execute();  
            $entreprise = $requete->fetch(PDO::FETCH_OBJ);   
        }
        else
        { 
            header('Location: index.php');
        }

    }
    else
    {
        header('Location: index.php');
    }
?>



<div id="page_entiere_modification">

<div id="page">
  


                            <div class="conteneur">
                            <div class="contenu">Unité de travail</div>
                            <div class="contenu ">
                                             
                                                <?php
                                                /* entreprise */
                                                $requete = $cnx->query("SELECT DISTINCT variables_1 FROM poste_de_travail_1");
                                                                                          
                                                ?>


                                                <select name="risque_danger" class="selection">

                                                            <?php

                                                                        while ($unite_de_travail = $requete->fetch(PDO::FETCH_OBJ))     
                                                                        {
                                                                                ?>                                                                
                                                                                        <option value="<?php echo   $unite_de_travail->variables_1; ?>"
                                                                                                    <?php                                                                                                  
                                                                                                            if(($unite_de_travail->variables_1)==$entreprise->Unite_de_travail)
                                                                                                            {
                                                                                                                echo 'selected';
                                                                                                            }
                                                                                                    ?>  
                                                                                        > <?php echo   $unite_de_travail->variables_1; ?> </option>
                                                                                <?php

                                                                        }

                                                            ?>

                                                </select>
                                                
                                            

                  
                            </div>
                            </div>
                            
                            <div id="identification_des_risques">Identification des risques</div>

                            <div class="conteneur">
                                <div class="contenu">Risques/danger</div>
                                <div class="contenu"><select name="unite_de_travail" class="selection">
                                                                     
                                                                       <option
                                                                           <?php                                                                                                  
                                                                            if(('AMBIANCE LUMINEUSE')==$entreprise->Risques_danger)
                                                                                {
                                                                                echo 'selected';
                                                                                }
                                                                            ?>                                                                                                                                   
                                                                            value="AMBIANCE LUMINEUSE"
                                                                      >AMBIANCE LUMINEUSE                                                                    
                                                                      </option>


                                                                      <option   
                                                                           <?php                                                                                                  
                                                                            if(('AMBIANCE THERMIQUE')==$entreprise->Risques_danger)
                                                                                {
                                                                                echo 'selected';
                                                                                }
                                                                            ?> 
                                                                            value="AMBIANCE THERMIQUE"                                                                                                                            
                                                                      >AMBIANCE THERMIQUE
                                                                      </option>


                                                                      <option

                                                                            <?php                                                                                                  
                                                                            if(('AUTRES')==$entreprise->Risques_danger)
                                                                                {
                                                                                echo 'selected';
                                                                                }
                                                                            ?> 
                                                                             value="AUTRES"                                                                                                                                      
                                                                      >AUTRES
                                                                     </option>

                                                                     <option

                                                                      <?php
                                                                      if(('BRUIT')==$entreprise->Risques_danger)
                                                                                {
                                                                                echo 'selected';
                                                                                }
                                                                       ?>  
                                                                        value="BRUIT"                                                                    
                                                                      >BRUIT</option> 


                                                                      <option
                                                                      
                                                                      <?php
                                                                      if(('CIRCULATION EN ENTREPRISE')==$entreprise->Risques_danger)
                                                                                {
                                                                                echo 'selected';
                                                                                }
                                                                       ?>  
                                                                        value="CIRCULATION EN ENTREPRISE"                                                                        
                                                                                                                        
                                                                      >CIRCULATION EN ENTREPRISE</option> 


                                                                      <option
                                                                      
                                                                      <?php
                                                                      if(('DECHETS')==$entreprise->Risques_danger)
                                                                                {
                                                                                echo 'selected';
                                                                                }
                                                                       ?>  
                                                                        value="DECHETS"                                                                       
                                                                      
                                                                      >DECHETS</option>


                                                                      <option <?php if(('DEPLACEMENT/RISQUE')==$entreprise->Risques_danger){ echo 'selected';}?>  value="DEPLACEMENT/RISQUE" >DEPLACEMENT/RISQUE< /option>
                                                    </select>
                                </div>
                            </div>










                            <div class="conteneur">
                                <div class="contenu">Origines (tâches, matériels, lieux) et situation de travaille observées (données chiffrés)</div>
                                <div class="contenu"> <textarea name="origine" class="textarea1" cols="100" rows="10"> <?= $entreprise->Origines ?> </textarea></div>
                            </div>


                            <div class="conteneur">
                                <div class="contenu">Dommages potentiels</div>
                                <div class="contenu"> <input type="text"  name="dommages_potentiels" value="<?= $entreprise->Dommages_potentiels ?>"/> </div>
                            </div>


                            <div class="conteneur">
                                <div class="contenu">Accident de travail (AT)</div>
                                <di class="contenu"> <input type="text" name="accident_de_travail" value="<?= $entreprise->Accident_de_travail ?>"/> </div>
                            </div>
                            
                            <div id="Evaluation_du_risque">Evaluation du risque</div>
                            <div  class="conteneur">
                                <div class="contenu">Niveau de fréquence</div>
                                    <div class="content">
                                            <div class="contenu">
                                                        <select name="niv_freq" id="select_niv_freq">
                                                                    <option value="1" <?php if(('Exceptionnelle')==$entreprise->Niveau_de_frequence){ echo 'selected';}?> >Exceptionnelle</option>
                                                                    <option value="2" <?php if(('Occasionnelle')==$entreprise->Niveau_de_frequence){ echo 'selected';}?> >Occasionnelle</option>
                                                                    <option value="3" <?php if(('régulière')==$entreprise->Niveau_de_frequence){ echo 'selected';}?> >régulière</option>
                                                                    <option value="4" <?php if(('Quotidienne')==$entreprise->Niveau_de_frequence){ echo 'selected';}?> >Quotidienne</option>
                                                        </select>
                                            </div>
                                        <div id="res_chiffre_freq">1</div>
                                    </div>
                            </div>

                            <div  class="conteneur">
                                <div class="contenu">Niveau de gravite</div>
                                            <div class="content">
                                                    <div class="contenu">
                                                        <select name="niv_grav" id="select_niv_grav">
                                                                    <option value="1" <?php if(('Peu/Pas de dommage')==$entreprise->Niveau_de_gravite){ echo 'selected';}?> >Peu/Pas de dommage</option>
                                                                    <option value="2" <?php if(('Dommage faible')==$entreprise->Niveau_de_gravite){ echo 'selected';}?> >Dommage faible</option>
                                                                    <option value="3" <?php if(('Dommage réversibles')==$entreprise->Niveau_de_gravite){ echo 'selected';}?> >Dommage réversibles</option>
                                                                    <option value="4" <?php if(('Dommage irréversibles')==$entreprise->Niveau_de_gravite){ echo 'selected';}?> >Dommage irreversibles</option>
                                                            </select>
                                                    </div>
                                        
                                            <div id="res_chiffre_grav">1</div>
                                            </div>
                            </div>


                            <div id="maitrise_du_risque">Maitrise du risque</div>

                                    <div class="conteneur">
                                    <div class="contenu">Niveau maitrise</div>
                                                <div class="content">
                                                        <div class="contenu">
                                                                <select name="niv_maitrise" id="select_niv_maitrise">
                                                                    <option value="1" <?php if(('Aucune')==$entreprise->Niveau_maitrise){ echo 'selected';}?> >Aucune</option>
                                                                    <option value="0.75" <?php if(('Partielle')==$entreprise->Niveau_maitrise){ echo 'selected';}?> >Partielle</option>
                                                                    <option value="0.5" <?php if(('Quasi-totale')==$entreprise->Niveau_maitrise){ echo 'selected';}?> >Quasi-totale</option>
                                                                    <option value="0.25" <?php if(('Totale')==$entreprise->Niveau_maitrise){ echo 'selected';}?> >Totale</option>
                                                                </select>
                                                        </div>
                                                
                                                    <div id="res_chiffre">1</div>
                                                </div>
                                    </div>

                                <div class="conteneur">
                                            <div class="content">
                                                <div class="contenu">Niveau de risque</div>

                                                <div id="res_chiffre_defintif">  </div> 
                                        </div>

                                        <div class="resultat_critere">Résultat</div>
                                </div>

                                <div id="plan_action">Plan d'actions</div>

                                <div class="conteneur">
                                <div class="contenu">Proposition(s) de mesures de prevention</div>
                                <div class="contenu"> <textarea name="prop_mesure_prevention" class="textarea1" cols="100" rows="10"> <?= $entreprise->proposition_de_mesures_de_prevention ?> </textarea></div>
                                </div>

                                <div class="conteneur">
                                <div class="contenu">Référent(s) action</div>
                                <div class="contenu"><input type="text" name="referent_action" value="<?= $entreprise->referent_actions ?>" /></div>
                                </div>

                                <div class="conteneur">
                                <div class="contenu">Echeance</div>
                                <div class="contenu"><input type="date" name="echeance" value="<?= $entreprise->Echeance ?>" /></div>
                                </div>

                                <input type="hidden" name="ID_modif" value="<?= $ID ?>" />


                                <div class="conteneur">
                                <button class="contenu" id="bouton_envoyer" style="width:200px; height:50px">Soumettre</button>    
                                </div>    

</div>

</div>

         <!--   <div id="bouton_envoyer"><input type="submit" name=""/> </div> -->
      
     
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="js/script.js" async ></script>
        <script src="js/script_charge_bloc_5_modification.js" async ></script>

      
     

</body>
</html>



              