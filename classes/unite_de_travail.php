<?php
class Transaction{
      private $transactionID;
      private $transaction;


      public function getTransactionID(){
          return $this->transactionID;
      }



      public function getTransaction(){
          return $this->transaction;
      }



      public function setTransactionID($transactionID){
                $transactionID=intval($transactionID);
                if(is_int($transactionID)){
                    $this->transactionID=$transactionID;
                } 
    }


    public function setTransaction($transaction){ 
            if(is_string($transaction)){
                $this->transaction=$transaction; 
            }      
    }




}