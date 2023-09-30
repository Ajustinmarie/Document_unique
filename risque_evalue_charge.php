<?php include('cnx.php'); ?>
<?php include('classes/actions_risque.php');?>


<?php
spl_autoload_register(function($class) {
	include('classes/'.$class.'.php');
});
?>

<?php 
$actions_risques_manager = new actions_risques_manager($cnx);
?>

<?php

/*
$unite_travail=$_POST['unite_travail'];
$risques_danger=$_POST['risques_danger'];
$niveau_de_frequence=$_POST['niveau_de_frequence'];
$niveau_de_gravite=$_POST['niveau_de_gravite'];
$niveau_de_maitrise=$_POST['niveau_de_maitrise'];
$criticite=$_POST['criticite'];
$echeance=$_POST['echeance'];
*/

$unite_travail=$_POST['variable1'];
$risques_danger=$_POST['variable2'];
$niveau_de_frequence=$_POST['variable3'];
$niveau_de_gravite=$_POST['variable4'];
$niveau_de_maitrise=$_POST['variable5'];
$criticite=$_POST['variable6'];
$echeance=$_POST['variable7'];

if(isset($_POST['variable8']))
{       
        /* POUR SUPPRIMER L'ACTION */
        $variable_supp=$_POST['variable8'];
        $requete = $cnx->prepare("DELETE FROM actions_risque  WHERE ID=$variable_supp");
        $requete->execute();
         /* POUR SUPPRIMER L'ACTION */
}

                                ///////////*RECHERCHER****************////////////////
                                $Cherches=$actions_risques_manager->Chercher($unite_travail,
                                                                             $risques_danger,
                                                                             $niveau_de_frequence,
                                                                             $niveau_de_gravite,
                                                                             $niveau_de_maitrise,
                                                                             $criticite,
                                                                             $echeance
                                                                            );
                                ///////////*RECHERCHER****************////////////////
                               // print_r($Cherches);
                             
                                if($Cherches) {                      

                                foreach($Cherches as $Cherche){
                                        ?>                                                                                                       
                                                <div class="ligne supp">
                                                <div class="cellule"><?= $Cherche->getID();?></div>
                                                <div class="cellule"><?= $Cherche->getunite_de_travail_ID();?></div>
                                                <div class="cellule"><?= $Cherche->getrisques_danger();?></div>
                                                <div class="cellule"><?= $Cherche->getOrigines();?></div>    
                                                <div class="cellule"><?= $Cherche->getDommages_potentiels();?></div>    
                                                <div class="cellule cache2"><?= $Cherche->getAccident_de_travail();?></div>
                                                <div class="cellule cache2"><?= $Cherche->getniveau_de_frequence();?></div>  
                                                <div class="cellule cache2"><?= $Cherche->getniveau_de_gravite();?></div> 
                                                <div class="cellule cache cache2"><?= $Cherche->getniveau_de_maitrise();?></div> 
                                                <div class="cellule cache cache2"><?= $Cherche->getcriticite();?></div> 
                                                <div class="cellule cache cache2"><?= $Cherche->getpropostion_de_mesures_de_prevention();?></div> 
                                                <div class="cellule cache cache2"><?= $Cherche->getreferent_actions();?></div>
                                                <div class="cellule cache cache2"><button class="supri" numero_sup="<?= $Cherche->getID();?>" >X</button>      <button class="modifi" numero_id="<?= $Cherche->getID();?>" >0</button>   </div> 
                                                </div>                                                                 
                                       
                                        <?php
                                    } // End. foreach ($Cherches as $Cherche)


                                }
                                else
                                {

                                        ?>   
                                        <p>Il n'y a aucun résultat</p>  
                                        <?php // End. Test des résultats


                                }

?>

<!-- <script src="js/script_2.js" async ></script>   -->


<script>


/* 
var CLOSE = document.querySelectorAll('.fenetre_menu_1');

var BOX   = document.querySelector('.supp');

var CLOSE_2 = document.querySelector('.fenetre_menu_2');


for(i=0; i<CLOSE.length; i++)
{

        CLOSE[i].addEventListener('click', function() {
        var test = confirm('Vous allez supprimer ce risque définitivement');
        if(test === true) {
                var numero_sup = this.getAttribute('numero_sup');
                console.log(numero_sup);
                // BOX.style.display = "none";
        }
        });
}



var openFenetre = () =>{
    open('../grille_identification_vierge.html','toto','width=600,height=300');
}

CLOSE_2.addEventListener("click",function(){
    openFenetre();
});
*/


$('.supri').click(function(){ 

var test = confirm('Vous allez supprimer ce risque définitivement');

if(test === true)
{
                var numero_sup = this.getAttribute('numero_sup'); 
                var unite_travail = $('select[name=unite_travail]').val();
                var risques_danger = $('select[name=risques_danger]').val();
                var niveau_de_frequence = $('select[name=niveau_de_frequence]').val();
                var niveau_de_gravite = $('select[name=niveau_de_gravite]').val();
                var niveau_de_maitrise = $('select[name=niveau_de_maitrise]').val();
                var criticite = $('select[name=criticite]').val();
                var echeance = $('input[name=echeance]').val();  

                $('#corps').load('risque_evalue_charge.php', {         

                variable1:unite_travail,
                variable2:risques_danger,
                variable3:niveau_de_frequence,
                variable4:niveau_de_gravite,
                variable5:niveau_de_maitrise,
                variable6:criticite,
                variable7:echeance,
                variable8:numero_sup,

                });
}
});



$('.modifi').click(function(){ 




                var numero_id = this.getAttribute('numero_id'); 
           /*     var unite_travail = $('select[name=unite_travail]').val();
                var risques_danger = $('select[name=risques_danger]').val();
                var niveau_de_frequence = $('select[name=niveau_de_frequence]').val();
                var niveau_de_gravite = $('select[name=niveau_de_gravite]').val();
                var niveau_de_maitrise = $('select[name=niveau_de_maitrise]').val();
                var criticite = $('select[name=criticite]').val();
                var echeance = $('input[name=echeance]').val();  */ 
                
                /*chatgpt*/
                /*  var param1 = "value1";
                  var param2 = "value2"; */
                  var url = "grille_identification_vierge_modification.php?numero_id=" + numero_id;
                   window.open(url, "_blank");
                //  window.open(url,'toto','width=600,height=300');
                 /*chatgpt*/

                /*   
                        $('#corps').load('risque_evalue_charge.php', {        
                        variable1:unite_travail,
                        variable2:risques_danger,
                        variable3:niveau_de_frequence,
                        variable4:niveau_de_gravite,
                        variable5:niveau_de_maitrise,
                        variable6:criticite,
                        variable7:echeance,
                        variable8:numero_sup,  

                        });
                */

});


/* chat gpt */
/*
$(document).ready(function() {
  $("#myButton").click(function() {
    var param1 = "value1";
    var param2 = "value2";
    var url = "http://example.com/page.html?param1=" + param1 + "&param2=" + param2;
    window.open(url, "_blank");
  });
});
*/



</script>


<?php



