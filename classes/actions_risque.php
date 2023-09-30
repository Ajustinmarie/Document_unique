<?php
class action_risques{
      private $ID;
      private $unite_de_travail_ID;
      private $risques_danger;
      private $origines;
      private $dommages_potentiels;
      private $accident_de_travail;
      private $niveau_de_frequence;
      private $niveau_de_gravite;
      private $niveau_de_maitrise;
      private $criticite;
      private $propostion_de_mesures_de_prevention;
      private $referent_actions;
      private $echeance;
     

    /////////////////////////////////////*******GETEUR***********//////////////////////////////////
    public function getID(){
     return $this->ID;
     }


      public function getunite_de_travail_ID(){
           return $this->unite_de_travail_ID;
      }


      public function getrisques_danger(){
           return $this->risques_danger;
      }

      public function getOrigines(){
          return $this->origines;
     }

     public function getDommages_potentiels(){
          return $this->dommages_potentiels;
     }

     public function getAccident_de_travail(){
          return $this->Accident_de_travail;
     }


     public function getniveau_de_frequence(){
          return $this->niveau_de_frequence;
     }



     public function getniveau_de_gravite(){
          return $this->niveau_de_gravite;
     }


    public function getniveau_de_maitrise(){
         return $this->niveau_de_maitrise;
    }

    public function getcriticite(){
     return $this->criticite;
   }


   public function getpropostion_de_mesures_de_prevention(){
     return $this->propostion_de_mesures_de_prevention;
   }

   public function getreferent_actions(){
     return $this->referent_actions;
   }


    public function getecheance(){
          return $this->echeance;
    }

    /////////////////////////////////////*******SETEUR***********//////////////////////////////////
    public function setID($ID){
         return  $this->ID=$ID;
     }



    public function setunite_de_travail_ID($unite_de_travail_ID){
            $this->unite_de_travail_ID=$unite_de_travail_ID;
    }


    public function setrisques_danger($risques_danger){
            $this->risques_danger=$risques_danger;
      }



      public function setOrigines($origines){
          $this->origines=$origines;
     }


     public function setDommages_potentiels($Dommages_potentiels){
           $this->dommages_potentiels=$Dommages_potentiels;
     }


     public function setAccident_de_travail($Accident_de_travail){
           $this->Accident_de_travail=$Accident_de_travail;
     }


      public function setniveau_de_frequence($niveau_de_frequence){
            $this->niveau_de_frequence=$niveau_de_frequence;
     }


     public function setniveau_de_gravite($niveau_de_gravite){
            $this->niveau_de_gravite=$niveau_de_gravite;
     }


     public function setniveau_de_maitrise($niveau_de_maitrise){
            $this->niveau_de_maitrise=$niveau_de_maitrise;
    }

    public function setcriticite($criticite){
          $this->criticite=$criticite;
   }

   public function setpropostion_de_mesures_de_prevention($propostion_de_mesures_de_prevention){
     $this->propostion_de_mesures_de_prevention=$propostion_de_mesures_de_prevention;
   }


   public function setreferent_actions($referent_actions){
     $this->referent_actions=$referent_actions;
   }


    public function setecheance($echeance){
            $this->echeance=$echeance;
    }




}