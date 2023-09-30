<?php
class actions_risques_manager{
      private $Bdd;

      public function __construct($Bdd){
          $this->setBdd($Bdd);
      }

/***************************AFFICHER TOUS LES UNITE DE TRAVAIL & RISQUES DANGER ************************************/
      public function ReadAllactions_risques(){
        $sql ='SELECT DISTINCT Unite_de_travail, Risques_danger  FROM  actions_risque';
    	$req = $this->Bdd->prepare($sql);
		$req->execute();
      //  $sql2 ='SELECT DISTINCT Niveau_de_frequence, Niveau_de_gravite  FROM  actions_risque';
    //	$req2 = $this->Bdd->prepare($sql);
	//	$req2->execute();
        while($data=$req->fetch(PDO::FETCH_ASSOC)){
            $actions_risques = new action_risques();
            $actions_risques->setunite_de_travail_ID($data['Unite_de_travail']);
            $actions_risques->setrisques_danger($data['Risques_danger']);            
        //  $actions_risques->setniveau_de_frequence($data['Niveau_de_frequence']);
        //  $actions_risques->setniveau_de_gravite($data['Niveau_de_gravite']);
        //    $actions_risques->setniveau_de_maitrise($data['Niveau_maitrise']);
        //  $actions_risques->setcriticite($data['criticite']);
        //  $actions_risques->setecheance($data['Echeance']);

            $actions_risquess[] = $actions_risques;          

        }
        return $actions_risquess;

      
      }
/***************************AFFICHER TOUS LES UNITE DE TRAVAIL & RISQUES DANGER ************************************/


/***************************AFFICHER Niveau_de_frequence & Niveau_de_gravite ************************************/
      public function ReadAllactions_risques2(){
        $sql ='SELECT DISTINCT Niveau_de_frequence , Niveau_de_gravite    FROM  actions_risque';
    	$req = $this->Bdd->prepare($sql);
		$req->execute();

        while($data=$req->fetch(PDO::FETCH_ASSOC)){
            $actions_2risques = new action_risques();            
            $actions_2risques->setniveau_de_frequence($data['Niveau_de_frequence']);
            $actions_2risques->setniveau_de_gravite($data['Niveau_de_gravite']);
        //  $actions_risques->setniveau_de_maitrise($data['Niveau_maitrise']);
        //  $actions_risques->setcriticite($data['criticite']);
        //  $actions_risques->setecheance($data['Echeance']);
            $actions_2risquess[] = $actions_2risques;
        }
        return $actions_2risquess;
      
      }
/***************************AFFICHER Niveau_de_frequence & Niveau_de_gravite ************************************/



/***************************AFFICHER Niveau_maitrise & criticite ************************************/
public function ReadAllactions_risques3(){
    $sql ='SELECT DISTINCT Niveau_maitrise, criticite    FROM  actions_risque ';
    $req = $this->Bdd->prepare($sql);
    $req->execute();

    while($data=$req->fetch(PDO::FETCH_ASSOC)){
        $actions_3risques = new action_risques();
        
     //   $actions_3risques->setniveau_de_frequence($data['Niveau_de_frequence']);
     //   $actions_3risques->setniveau_de_gravite($data['Niveau_de_gravite']);
         $actions_3risques->setniveau_de_maitrise($data['Niveau_maitrise']);
         $actions_3risques->setcriticite($data['criticite']);
    //  $actions_risques->setecheance($data['Echeance']);
        $actions_3risquess[] = $actions_3risques;
    }
    return $actions_3risquess;
  
  }
/***************************AFFICHER Niveau_de_Maitrise & criticite ************************************/










/***************SELECTION DE TOUTE LA BDD *******************************************/
public function Chercher($unite_de_travail, $Risques_danger, $Niveau_de_frequence, $Niveau_de_gravite, $Niveau_maitrise, $criticite, $echeance){

    
    // Si type de bien vide ou non

  /*
    if(empty($unite_de_travail)) {
        $cas7 = '';
    } else {
        $cas7 = ' WHERE Unite_de_travail=:Unite_de_travail';
    }
  */

		if(empty($Risques_danger)) {
			$cas1 = '';
		} else {
			$cas1 = 'AND Risques_danger=:Risques_danger ';
		}


        if(empty($Niveau_de_frequence)) {
			$cas2 = '';
		} else {
			$cas2 = 'AND Niveau_de_frequence=:Niveau_de_frequence';
		}
        

        if(empty($Niveau_de_gravite)) {
			$cas3 = '';
		} else {
			$cas3 = 'AND Niveau_de_gravite=:Niveau_de_gravite';
		}


        if(empty($Niveau_maitrise)) {
			$cas4 = '';
		} else {
			$cas4 = 'AND Niveau_maitrise=:Niveau_maitrise';
		}

        if(empty($criticite)) {
			$cas5 = '';
		} else {
			$cas5 = 'AND criticite=:criticite';
		}

        if(empty($echeance)) {
			$cas6 = '';
		} else {
			$cas6 = 'AND Echeance>=:Echeance';
		}


        if($unite_de_travail=='poste_general')
        { 
                    $sql ='SELECT * FROM  actions_risque';  
                    $req = $this->Bdd->prepare($sql);  
                    $req->execute();   
        }
        else
        {
                    $sql ='SELECT * FROM  actions_risque WHERE
                    Unite_de_travail=:Unite_de_travail 
                    '.$cas1.'          
                    '.$cas2.' 
                    '.$cas3.' 
                    '.$cas4.' 
                    '.$cas5.' 
                    '.$cas6.' 
                    ';


                    $req = $this->Bdd->prepare($sql);
                    $req->bindValue(':Unite_de_travail', $unite_de_travail, PDO::PARAM_STR);  
                    if(empty($Risques_danger)){}else{ $req->bindValue(':Risques_danger', $Risques_danger, PDO::PARAM_STR); }	
                    if(empty($Niveau_de_frequence)){}else{ $req->bindValue(':Niveau_de_frequence', $Niveau_de_frequence, PDO::PARAM_STR);  }	
                    if(empty($Niveau_de_gravite)){}else{ $req->bindValue(':Niveau_de_gravite', $Niveau_de_gravite, PDO::PARAM_STR);   }	
                    if(empty($Niveau_maitrise)){}else{ $req->bindValue(':Niveau_maitrise', $Niveau_maitrise, PDO::PARAM_STR); }	
                    if(empty($criticite)){}else{ $req->bindValue(':criticite', $criticite, PDO::PARAM_STR); }	
                    if(empty($echeance)){}else{ $req->bindValue(':Echeance', $echeance, PDO::PARAM_STR); }
                    
                    $req->execute();   
        }
       



   
           
    while($data=$req->fetch(PDO::FETCH_ASSOC)){
        $actions_risques = new action_risques();
        $actions_risques->setID($data['ID']);
        $actions_risques->setunite_de_travail_ID($data['Unite_de_travail']);
        $actions_risques->setrisques_danger($data['Risques_danger']);   
        $actions_risques->setniveau_de_frequence($data['Niveau_de_frequence']);
        $actions_risques->setOrigines($data['Origines']);  
        $actions_risques->setDommages_potentiels($data['Dommages_potentiels']);   
        $actions_risques->setAccident_de_travail($data['Accident_de_travail']);           
        $actions_risques->setniveau_de_gravite($data['Niveau_de_gravite']);       
        $actions_risques->setniveau_de_maitrise($data['Niveau_maitrise']);
        $actions_risques->setcriticite($data['criticite']);
        $actions_risques->setpropostion_de_mesures_de_prevention($data['proposition_de_mesures_de_prevention']);
        $actions_risques->setreferent_actions($data['referent_actions']);
        $actions_risquess[] = $actions_risques;
    }
   
    if(empty($actions_risquess)) {} else { return $actions_risquess; }
  }
/***************SELECTION DE TOUTE LA BDD *******************************************/




      /***********************************PDO******************************************/
      private function setBdd($Bdd){
           $this->Bdd=$Bdd ;
      }
      /***********************************PDO******************************************/


}



// $requete = $bdd->query("SELECT DISTINCT entite FROM `$entite`");          
?>