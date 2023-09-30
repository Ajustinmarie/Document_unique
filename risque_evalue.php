<?php include('header.php'); ?>
<?php include('cnx.php'); ?>

<?php include('classes/actions_risque.php');?>
<?php  // include('classes/actions_risques_manager.php');?>

<?php
spl_autoload_register(function($class) {
	include('classes/'.$class.'.php');
});
?>

<?php
$actions_risques_manager = new actions_risques_manager($cnx);



$actions_risque = new action_risques();


/***************************AFFICHER TOUS LES UNITE DE TRAVAIL & RISQUES DANGER ************************************/
$risques = $actions_risques_manager->ReadAllactions_risques();

/***************************AFFICHER Niveau_de_frequence & Niveau_de_gravite ************************************/
$risque2s = $actions_risques_manager->ReadAllactions_risques2();


/***************************AFFICHER Niveau_de_Maitrise & criticite ************************************/
$risque3s = $actions_risques_manager->ReadAllactions_risques3();



?>



    <div id="grand_titre"><h1>RISQUES EVALUES</h1></div>
     
    <div id="bloc_recherche">

        <div id="barre_recherche">


                <div class="barre_recherche_risque">                    
                        <div class="barre_recherche_contenu"><label>Unité de travail</label></div>                    
                        <div class="barre_recherche_contenu marge">
                                <select name="unite_travail" id="">
                                
                               <!-- <option value="">Unite de travail</option> -->

                                <option value="poste_general">Voir tous les postes</option>
                                
                                <?php
                                foreach($risques as $risque) {

                                ?>

                                <option  value="<?= $risque->getunite_de_travail_ID(); ?>"><?= $risque->getunite_de_travail_ID(); ?></option>

                                <?php
                                }
                                ?>                           

                                </select>
                        </div>               
                </div> 

            <div class="barre_recherche_risque">                    
                    <div class="barre_recherche_contenu"><label>Risque / Danger</label></div>                    
                    <div class="barre_recherche_contenu marge">
                            <select name="risques_danger" id="">

                            <option value="">risque danger</option>

                            <?php
                                foreach($risques as $risque) {

                                ?>

                                <option  value="<?= $risque->getrisques_danger(); ?>"><?= $risque->getrisques_danger(); ?></option>

                                <?php
                                }
                                ?>       
                            </select>
                    </div>               
            </div>  
                     
            <div class="barre_recherche_risque">                    
                    <div class="barre_recherche_contenu"><label>Niveau Fréquence</label></div>
                    <div class="barre_recherche_contenu marge">
                            <select name="niveau_de_frequence" id="">

                            <option value="">Frequence</option>

                            <?php
                                foreach($risque2s as $risque2) {

                                ?>

                                <option  value="<?= $risque2->getniveau_de_frequence(); ?>"><?= $risque2->getniveau_de_frequence(); ?></option>

                                <?php
                                }
                                ?>     
                            </select>
                    </div>               
            </div>  

            <div class="barre_recherche_risque">                    
                <div class="barre_recherche_contenu"><label>Niveau Gravité</label></div>
                <div class="barre_recherche_contenu marge">
                        <select name="niveau_de_gravite" id="">
                       
                        <option value="">gravite</option>

                        <?php
                                foreach($risque2s as $risque2) {

                                ?>

                                <option  value="<?= $risque2->getniveau_de_gravite(); ?>"><?= $risque2->getniveau_de_gravite(); ?></option>

                                <?php
                                }
                                ?>    
                        </select>
                </div>               
           </div> 
          
           <div class="barre_recherche_risque">                    
            <div class="barre_recherche_contenu"><label>Niveau Maitrise</label></div>
            <div class="barre_recherche_contenu marge">
                    <select name="niveau_de_maitrise" id="">

                          
                   
                    <option value="">Niveau maitrise</option>

                    <?php
                                foreach($risque3s as $risque3) {

                                ?>

                                <option  value="<?= $risque3->getniveau_de_maitrise(); ?>"><?= $risque3->getniveau_de_maitrise(); ?></option>

                                <?php
                                }
                                ?>    
                    </select>
            </div>               
       </div> 

       <div class="barre_recherche_risque">                    
        <div class="barre_recherche_contenu"><label>Criticité</label></div>
        <div class="barre_recherche_contenu marge">

                <select name="criticite" id="">


                <option value="">Criticite</option>

                                <?php
                                foreach($risque3s as $risque3) {
                                       
                                ?>

                                <option  value="<?= $risque3->getcriticite(); ?>"><?= $risque3->getcriticite(); ?></option>

                                <?php
                                }
                                ?>   
                </select>
        </div>               
   </div> 

    <div class="barre_recherche_risque">                    
        <div class="barre_recherche_contenu"><label>Echéance</label></div>
        <div class="barre_recherche_contenu marge">


                <input type="date" name="echeance" >




             
        </div>               
    </div>



          
        </div>

        
        
        <div><input type="submit" id="filtrer" name="submit" value="Filtrer"></div>


    </div>




 <div class="tableau">          
                
                <div class="entet">
                        <div class="ligne">
                                <div class="cellule entete">N°</div>
                                <div class="cellule entete">UNITE DE TRAVAIL</div>
                                <div class="cellule entete">RISQUE/DANGER</div>
                                <div class="cellule entete">ORIGINES</div>    
                                <div class="cellule entete">DOMMAGES POTENTIELS</div>    
                                <div class="cellule entete cache2">ACCIDENT DE TRAVAIL (AT) </div>
                                <div class="cellule entete cache2">NIVEAU FREQUENCE</div>  
                                <div class="cellule entete cache2">NIVEAU GRAVITE</div> 
                                <div class="cellule entete cache cache2">MOYENS DE PREVENTION ET DE PROTECTION EXISTANTS</div> 
                                <div class="cellule entete cache cache2">PROPOSITION(S) DE MESURES DE PREVENTION</div> 
                                <div class="cellule entete cache cache2">REFERENT(S) ACTION</div> 
                                <div class="cellule entete cache cache2">ECHEANCE</div> 
                                <div class="cellule entete cache cache2">STATUS</div>
                        </div> 
                </div>                     
         

                <div id="corps">



 






                        
                                   

                </div>   
                
</div>





                   




    </div>

    

   
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="js/script_2.js" async ></script> -->
    <script src="js/script_charge_risque_evalue.js" async ></script>



    

    
   

</body>
</html>