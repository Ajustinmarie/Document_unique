<?php include('header.php'); ?>
<?php include('cnx.php'); ?>

    <div id="grand_titre"><h1>GRILLE IDENTIFICATION</h1></div>

<div id="page_entiere">

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
                                                                            <option><?php echo   $unite_de_travail->variables_1; ?></option>
                                                                                    
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
                                <option>Troubles musculosquelettiques (TMS)</option>
                                <option>Risques psychosociaux (RPS)</option> 
                                <option>Lombalgie</option> 
                                <option>Risques routiers</option> 
                                <option>Risques chimiques</option> 
                                <option>Chutes de plain-pied</option> 
                                <option>Bruit</option>
                                <option>Incendie sur le lieu de travail</option>
                            </select></div>
                            </div>


                            <div class="conteneur">
                                <div class="contenu">Origines (tâches, matériels, lieux) et situation de travaille observées (données chiffrés)</div>
                                <div class="contenu"> <textarea name="origine" class="textarea1" cols="100" rows="10"></textarea></div>
                            </div>


                            <div class="conteneur">
                                <div class="contenu">Dommages potentiels</div>
                                <div class="contenu"> <input type="text"  name="dommages_potentiels"/> </div>
                            </div>


                            <div class="conteneur">
                                <div class="contenu">Accident de travail (AT)</div>
                                <di class="contenu"> <input type="text" name="accident_de_travail"/> </div>
                            </div>
                            
                            <div id="Evaluation_du_risque">Evaluation du risque</div>
                            <div  class="conteneur">
                                <div class="contenu">Niveau de fréquence</div>
                                    <div class="content">
                                            <div class="contenu">
                                                        <select name="niv_freq" id="select_niv_freq">
                                                                    <option value="1">Exceptionnelle</option>
                                                                    <option value="2">Occasionnelle</option>
                                                                    <option value="3">régulière</option>
                                                                    <option value="4">Quotidienne</option>
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
                                                                    <option value="1">Peu/Pas de dommage</option>
                                                                    <option value="2">Dommage faible</option>
                                                                    <option value="3">Dommage réversibles</option>
                                                                    <option value="4">Dommage irreversibles</option>
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
                                                                    <option value="1" >Aucune</option>
                                                                    <option value="0.75" >Partielle</option>
                                                                    <option value="0.5">Quasi-totale</option>
                                                                    <option value="0.25" >Totale</option>
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
                                <div class="contenu"> <textarea name="prop_mesure_prevention" class="textarea1" cols="100" rows="10"></textarea></div>
                                </div>

                                <div class="conteneur">
                                <div class="contenu">Référent(s) action</div>
                                <div class="contenu"><input type="text" name="referent_action"/></div>
                                </div>

                                <div class="conteneur">
                                <div class="contenu">Echeance</div>
                                <div class="contenu"><input type="date" name="echeance"/></div>
                                </div>


                                <div class="conteneur">
                                    <button class="contenu" id="bouton_envoyer" style="width:200px; height:50px" >Soumettre</button>
                                </div>    


</div>

         <!--   <div id="bouton_envoyer"><input type="submit" name=""/> </div> -->
         
</div>
     
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="js/script.js" async ></script>
        <script src="js/script_charge_bloc_5.js" async ></script>

      
     

</body>
</html>



              