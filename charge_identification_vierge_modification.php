<?php include('cnx.php'); ?>

<?php
$unite_travail=$_POST['unite_travail'];
$risque_danger=$_POST['risque_danger'];
$origine=$_POST['origine'];
$dommages_potentiels=$_POST['dommages_potentiels'];
$accident_de_travail=$_POST['accident_de_travail'];

$niv_fre=$_POST['niv_freq'];
$niv_gra=$_POST['niv_grav'];
$niv_maitris=$_POST['niv_maitrise'];

if(isset($_POST['id_modif']))
{
	$id_modif=$_POST['id_modif'];
}



if ($niv_maitris==0.25) 
{
	$niv_maitrise='Totale';     
} 
elseif ($niv_maitris==0.5) 
{
	$niv_maitrise='Quasi-totale';   
} 
elseif ($niv_maitris==0.75)
{
	$niv_maitrise='Partielle';    
}
elseif ($niv_maitris== 1)
{
	$niv_maitrise='Aucune';    
};


if ($niv_fre==1) 
{
	$niv_freq='Exceptionnelle';    
} 
elseif ($niv_fre == 2) 
{
	$niv_freq='Quotidienne';
} 
elseif ($niv_fre == 3)
{
    $niv_freq='régulière';
}
elseif ($niv_fre == 4)
{
    $niv_freq='Quotidienne';
};



if ($niv_gra==1) 
{
	$niv_grav='Peu/Pas de dommage';    
} 
elseif ($niv_gra == 2) 
{
	$niv_grav='Dommage faible';  
} 
elseif ($niv_gra == 3)
{
    $niv_grav='Dommage reversible';  
}
elseif ($niv_gra == 4)
{
    $niv_grav='Dommage irréversibles';  
};


$resultat_critere=$_POST['resultat_critere'];
$prop_mesure_prevention=$_POST['prop_mesure_prevention'];
$referent_action=$_POST['referent_action'];
$echeance=$_POST['echeance'];


				$requete = $cnx->prepare("UPDATE actions_risque SET 
                Unite_de_travail='$unite_travail', 
				Risques_danger='$risque_danger',
				Origines='$origine',
				Dommages_potentiels='$dommages_potentiels',
				Accident_de_travail='$accident_de_travail',
				Niveau_de_frequence='$niv_freq',
				Niveau_de_gravite='$niv_grav',
				Niveau_maitrise='$niv_maitrise',
				criticite='$resultat_critere',
				proposition_de_mesures_de_prevention='$prop_mesure_prevention',
				referent_actions='$referent_action',
				Echeance='$echeance'
				WHERE ID=$id_modif");

                $requete->execute();







?>






<div id="conteneur_action_enregistre" style="display:flex; flex-direction:row; justify-content:center">    
		<div id="contenu_action_enregistre"><p style="color:green">Action modifiée</p></div>
</div>