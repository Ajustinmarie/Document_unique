
<style>
#gif_ok{
    margin:auto;
  
    text-align:center;
}
</style>

<div id="parametre_enregiste_conteneur">
       <div id="parametre_enregiste_contenu"><p style="color:green; text-align:center">Paramètres enregistrés</p></div>
</div>


<?php include('cnx.php'); ?>




<?php

  
  ///////////////////////////////EFFECTIF/////////////////////////////////////////////
  /* effectif */
  $bloc_1_variables_1= htmlspecialchars($_POST['variable1']);
  $bloc_1_variables_2=htmlspecialchars($_POST['variable2']);
  $bloc_1_variables_3=htmlspecialchars($_POST['variable3']);
  $bloc_1_variables_4=htmlspecialchars($_POST['variable4']);
  $bloc_1_variables_5=htmlspecialchars($_POST['variable5']);
  $bloc_1_variables_6=htmlspecialchars($_POST['variable6']);
  $bloc_1_variables_7=htmlspecialchars($_POST['variable7']);
  $bloc_1_variables_8=htmlspecialchars($_POST['variable8']);
  $bloc_1_variables_9=htmlspecialchars($_POST['variable9']);
  $bloc_1_variables_10=htmlspecialchars($_POST['variable10']);
  /* effectif */
  $requete = $cnx->prepare("UPDATE `effectif` SET  variable_1='$bloc_1_variables_1', 
                                                   variable_2='$bloc_1_variables_2', 
                                                   variable_3='$bloc_1_variables_3',
                                                   variable_4='$bloc_1_variables_4',
                                                   variable_5='$bloc_1_variables_5',
                                                   variable_6='$bloc_1_variables_6',
                                                   variable_7='$bloc_1_variables_7',
                                                   variable_8='$bloc_1_variables_8',
                                                   variable_9='$bloc_1_variables_9',
                                                   variable_10='$bloc_1_variables_10' WHERE ID=1");
  $requete -> execute();  
  ///////////////////////////////EFFECTIF//////////////////////////////////////////////




///////////////////////////////ENTREPRISE///////////////////////////////////////////////
 /* entreprise */              
 $bloc_2_variables_1=htmlspecialchars($_POST['variable24']);
 $bloc_2_variables_2=htmlspecialchars($_POST['variable25']);
 $bloc_2_variables_3=htmlspecialchars($_POST['variable26']);
 $bloc_2_variables_4=htmlspecialchars($_POST['variable27']);
 $bloc_2_variables_5=htmlspecialchars($_POST['variable28']);
 $bloc_2_variables_6=htmlspecialchars($_POST['variable29']);
 $bloc_2_variables_7=htmlspecialchars($_POST['variable30']);
 $bloc_2_variables_8=htmlspecialchars($_POST['variable31']);
 $bloc_2_variables_9=htmlspecialchars($_POST['variable32']);
 /* entreprise */   
 $requete = $cnx->prepare("UPDATE `entreprise` SET 
                                                    variable_1='$bloc_2_variables_1', 
                                                    variable_2='$bloc_2_variables_2', 
                                                    variable_3='$bloc_2_variables_3',
                                                    variable_4='$bloc_2_variables_4',
                                                    variable_5='$bloc_2_variables_5',
                                                    variable_6='$bloc_2_variables_6',
                                                    variable_7='$bloc_2_variables_7',
                                                    variable_8='$bloc_2_variables_8',
                                                    variable_9='$bloc_2_variables_9' WHERE ID=1");
$requete -> execute(); 
///////////////////////////////ENTREPRISE////////////////////////////////////////////////



///////////////////////////////POSTE DE TRAVAIL///////////////////////////////////////////////
/*Poste de travail */
$bloc_3_variables_2=htmlspecialchars($_POST['variable11']);
$bloc_3_variables_3=htmlspecialchars($_POST['variable12']);
$bloc_3_variables_4=htmlspecialchars($_POST['variable13']);   
/*Poste de travail */
$requete = $cnx->prepare("UPDATE `poste_de_travail_2` SET variable_1='$bloc_3_variables_2', 
                                                          variable_2='$bloc_3_variables_3', 
                                                          variable_3='$bloc_3_variables_4' WHERE ID=1");
$requete -> execute(); 
///////////////////////////////POSTE DE TRAVAIL///////////////////////////////////////////////


///////////////////////////////PARAMETRE VERSION/////////////////////////////////////
/*Parametre version*/
$bloc_4_variables_1=htmlspecialchars($_POST['variable14']); 
$bloc_4_variables_2=htmlspecialchars($_POST['variable15']); 
$bloc_4_variables_3=htmlspecialchars($_POST['variable16']); 
/*Parametre version*/


$requete = $cnx->prepare("UPDATE `parametre_version` SET 
variable_1='$bloc_4_variables_1', 
variable_2='$bloc_4_variables_2', 
variable_3='$bloc_4_variables_3'
WHERE ID=1");
$requete -> execute(); 
///////////////////////////////PARAMETRE VERSION/////////////////////////////////////



///////////////////////////////partenaires_de_sante/////////////////////////////////////
    /* partenaires_de_sante */
    $bloc_5_variables_1=htmlspecialchars($_POST['variable33']);
    $bloc_5_variables_2=htmlspecialchars($_POST['variable17']);
    $bloc_5_variables_3=htmlspecialchars($_POST['variable18']);
    $bloc_5_variables_4=htmlspecialchars($_POST['variable19']); 
    /* partenaires_de_sante */
    $requete = $cnx->prepare("UPDATE `partenaires_de_sante` SET variables_1='$bloc_5_variables_1',
                                                                variables_2='$bloc_5_variables_2',
                                                                variables_3='$bloc_5_variables_3',
                                                                variables_4='$bloc_5_variables_4' WHERE ID=1");
$requete -> execute(); 
///////////////////////////////partenaires_de_sante/////////////////////////////////////
               
  


///////////////////////////////Indicateurs de sante au travail/////////////////////////////////////
  /* Indicateurs de sante au travail */            
  $bloc_6_variables_1=htmlspecialchars($_POST['variable20']);
  $bloc_6_variables_2=htmlspecialchars($_POST['variable21']);
  $bloc_6_variables_3=htmlspecialchars($_POST['variable22']);
  $bloc_6_variables_4=htmlspecialchars($_POST['variable23']);
  /* Indicateurs de sante au travail */  
  $requete = $cnx->prepare("UPDATE `indicateurs_de_sante_au_travail` SET  variable_1='$bloc_6_variables_1',
                                                                          variable_2='$bloc_6_variables_2',
                                                                          variable_3='$bloc_6_variables_3',
                                                                          variable_4='$bloc_6_variables_4' WHERE ID=1");
$requete -> execute();
///////////////////////////////Indicateurs de sante au travail/////////////////////////////////////






?>