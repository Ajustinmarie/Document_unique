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




				$requete = $cnx->prepare("INSERT INTO  actions_risque(Unite_de_travail, Risques_danger, Origines, Dommages_potentiels, Accident_de_travail, Niveau_de_frequence, Niveau_de_gravite, Niveau_maitrise, criticite, proposition_de_mesures_de_prevention, referent_actions, Echeance) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
				$requete -> execute(array($unite_travail, $risque_danger, $origine, $dommages_potentiels, $accident_de_travail, $niv_freq, $niv_grav, $niv_maitrise, $resultat_critere, $prop_mesure_prevention, $referent_action, $echeance));





?>




<div id="conteneur_action_enregistre" style="display:flex; flex-direction:row; justify-content:center">    
		<div id="contenu_action_enregistre"><p style="color:green">Action enregistrée</p></div>
</div>
