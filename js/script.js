const Select_maitrise = document.getElementById('select_niv_maitrise');
const RES_FREQ = document.getElementById('res_chiffre');
const SELECT_GRAV = document.getElementById('select_niv_grav');
const RES_GRAV = document.getElementById('res_chiffre_grav');
RES_GRAV.classList.add('bloc_chiffre'); 
const SELECT_FREQ = document.getElementById('select_niv_freq');
const RES_NIV_FREQ = document.getElementById('res_chiffre_freq');
const RES_DEFINITIF = document.getElementById('res_chiffre_defintif');
RES_NIV_FREQ.classList.add('bloc_chiffre'); 
RES_FREQ.classList.add('bloc_chiffre'); 
const resultat_critere = document.getElementsByClassName('resultat_critere');

      /*fonction javascript pour recharger F*G*D au chargement de la page */
      function addLoadEvent(func){                                   
         var oldonload = window.onload;                                   
         if(typeof window.onload != 'function'){
             window.onload = func;
         } else {
             window.onload = function(){
                 if(oldonload) {
                     oldonload();
                 }
                 func();
             }
         }
     }
     /* */

   
     addLoadEvent(function(){
            
          /***frequence***/
         
            var index_niv_freq = SELECT_FREQ.value;
            RES_NIV_FREQ.innerHTML =  index_niv_freq;    
            RES_NIV_FREQ.classList.add('bloc_chiffre'); 
            
      
           /***gravite***/
           
            var index_grav = SELECT_GRAV.value; 
            RES_GRAV.innerHTML =  index_grav;    
            RES_GRAV.classList.add('bloc_chiffre');    
           
            /***maitrise***/
            
            var index = Select_maitrise.value;
            RES_FREQ.innerHTML =  index;    
            RES_FREQ.classList.add('bloc_chiffre');  
            
            var resultat_defintif = index_niv_freq * index_grav  * index;
         
            RES_DEFINITIF.innerHTML = resultat_defintif;
            RES_DEFINITIF.classList.add('bloc_chiffre');  
      
      
            if(resultat_defintif>=9){
      
               resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
               resultat_critere[0].classList.remove('resultat_critere_risque_modere');
              
               resultat_critere[0].innerHTML =  'risque majeur';  
               resultat_critere[0].classList.add('resultat_critere_risque_majeur');
      
            }
            else if(resultat_defintif<=4){
      
               resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
               resultat_critere[0].classList.remove('resultat_critere_risque_modere');
      
               resultat_critere[0].innerHTML =  'risque maitrisé';  
               resultat_critere[0].classList.add('resultat_critere_risque_maitrise');
      
      
            }
            else{
      
              resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
              resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
      
               resultat_critere[0].innerHTML =  'risque modéré';  
               resultat_critere[0].classList.add('resultat_critere_risque_modere'); 
            };      
      
      });


/*********************************************FREQUENCE(1)**************************************/

       /***frequence***/
       SELECT_FREQ.addEventListener('change', function() {
         var index_niv_freq = SELECT_FREQ.value;
         RES_NIV_FREQ.innerHTML =  index_niv_freq;    
         RES_NIV_FREQ.classList.add('bloc_chiffre'); 
   
        /***gravite***/
      
         var index_grav = SELECT_GRAV.value; 
         RES_GRAV.innerHTML =  index_grav;    
         RES_GRAV.classList.add('bloc_chiffre');    
        
         /***maitrise***/
       
         var index = Select_maitrise.value;
         RES_FREQ.innerHTML =  index;    
         RES_FREQ.classList.add('bloc_chiffre');  
         
         var resultat_defintif = index_niv_freq * index_grav  * index;
      
         RES_DEFINITIF.innerHTML = resultat_defintif;
         RES_DEFINITIF.classList.add('bloc_chiffre');  
   
   
         if(resultat_defintif>=9){
   
            resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
            resultat_critere[0].classList.remove('resultat_critere_risque_modere');
           
            resultat_critere[0].innerHTML =  'risque majeur';  
            resultat_critere[0].classList.add('resultat_critere_risque_majeur');
   
         }
         else if(resultat_defintif<=4){
   
            resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
            resultat_critere[0].classList.remove('resultat_critere_risque_modere');
   
            resultat_critere[0].innerHTML =  'risque maitrisé';  
            resultat_critere[0].classList.add('resultat_critere_risque_maitrise');
   
   
         }
         else{
   
           resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
           resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
   
            resultat_critere[0].innerHTML =  'risque modéré';  
            resultat_critere[0].classList.add('resultat_critere_risque_modere'); 
   
   
         };
      
   });

/*********************************************FREQUENCE(1) **************************************/




     

/*********************************************FREQUENCE(2)**************************************/
    /***frequence***/
      SELECT_FREQ.addEventListener('change', function() {
      var index_niv_freq = SELECT_FREQ.value;
      RES_NIV_FREQ.innerHTML =  index_niv_freq;    
      RES_NIV_FREQ.classList.add('bloc_chiffre'); 

     /***gravite***/
      SELECT_GRAV.addEventListener('change', function() {
      var index_grav = SELECT_GRAV.value; 
      RES_GRAV.innerHTML =  index_grav;    
      RES_GRAV.classList.add('bloc_chiffre');    
     
      /***maitrise***/
      Select_maitrise.addEventListener('change', function() {    
      var index = Select_maitrise.value;
      RES_FREQ.innerHTML =  index;    
      RES_FREQ.classList.add('bloc_chiffre');  
      
      var resultat_defintif = index_niv_freq * index_grav  * index;
   
      RES_DEFINITIF.innerHTML = resultat_defintif;
      RES_DEFINITIF.classList.add('bloc_chiffre');  


      if(resultat_defintif>=9){

         resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
         resultat_critere[0].classList.remove('resultat_critere_risque_modere');
        
         resultat_critere[0].innerHTML =  'risque majeur';  
         resultat_critere[0].classList.add('resultat_critere_risque_majeur');

      }
      else if(resultat_defintif<=4){

         resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
         resultat_critere[0].classList.remove('resultat_critere_risque_modere');

         resultat_critere[0].innerHTML =  'risque maitrisé';  
         resultat_critere[0].classList.add('resultat_critere_risque_maitrise');


      }
      else{

        resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
        resultat_critere[0].classList.remove('resultat_critere_risque_majeur');

         resultat_critere[0].innerHTML =  'risque modéré';  
         resultat_critere[0].classList.add('resultat_critere_risque_modere'); 


      };

});

});

});
/*********************************************FREQUENCE(2)**************************************/



/*********************************************FREQUENCE(3)**************************************/
     /***frequence***/
      SELECT_FREQ.addEventListener('change', function() {
      var index_niv_freq = SELECT_FREQ.value;
      RES_NIV_FREQ.innerHTML =  index_niv_freq;    
      RES_NIV_FREQ.classList.add('bloc_chiffre'); 

      /***maitrise***/
      Select_maitrise.addEventListener('change', function() {    
      var index = Select_maitrise.value;
      RES_FREQ.innerHTML =  index;    
      RES_FREQ.classList.add('bloc_chiffre'); 


     /***gravite***/
      SELECT_GRAV.addEventListener('change', function() {
      var index_grav = SELECT_GRAV.value; 
      RES_GRAV.innerHTML =  index_grav;    
      RES_GRAV.classList.add('bloc_chiffre');    
     

      
      var resultat_defintif = index_niv_freq * index_grav  * index;
   
      RES_DEFINITIF.innerHTML = resultat_defintif;
      RES_DEFINITIF.classList.add('bloc_chiffre');  


      if(resultat_defintif>=9){

         resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
         resultat_critere[0].classList.remove('resultat_critere_risque_modere');
        
         resultat_critere[0].innerHTML =  'risque majeur';  
         resultat_critere[0].classList.add('resultat_critere_risque_majeur');

      }
      else if(resultat_defintif<=4){

         resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
         resultat_critere[0].classList.remove('resultat_critere_risque_modere');

         resultat_critere[0].innerHTML =  'risque maitrisé';  
         resultat_critere[0].classList.add('resultat_critere_risque_maitrise');


      }
      else{

        resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
        resultat_critere[0].classList.remove('resultat_critere_risque_majeur');

         resultat_critere[0].innerHTML =  'risque modéré';  
         resultat_critere[0].classList.add('resultat_critere_risque_modere'); 


      };

});

});

});
/*********************************************FREQUENCE(3)**************************************/



/*********************************************GRAVITE(1)**************************************/
    /***gravite***/
    SELECT_GRAV.addEventListener('change', function() {
      var index_grav = SELECT_GRAV.value; 
      RES_GRAV.innerHTML =  index_grav;    
      RES_GRAV.classList.add('bloc_chiffre');   
 
       /***frequence***/
       var index_niv_freq = SELECT_FREQ.value;
       RES_NIV_FREQ.innerHTML =  index_niv_freq;    
       RES_NIV_FREQ.classList.add('bloc_chiffre'); 
  
       /***maitrise***/
       var index = Select_maitrise.value;
       RES_FREQ.innerHTML =  index;    
       RES_FREQ.classList.add('bloc_chiffre');   
 
       var resultat_defintif = index_niv_freq * index_grav  * index;
    
       RES_DEFINITIF.innerHTML = resultat_defintif;
       RES_DEFINITIF.classList.add('bloc_chiffre');  
 
       if(resultat_defintif>=9){
 
         resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
         resultat_critere[0].classList.remove('resultat_critere_risque_modere');
        
         resultat_critere[0].innerHTML =  'risque majeur';  
         resultat_critere[0].classList.add('resultat_critere_risque_majeur');
 
      }
      else if(resultat_defintif<=4){
 
         resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
         resultat_critere[0].classList.remove('resultat_critere_risque_modere');
 
         resultat_critere[0].innerHTML =  'risque maitrisé';  
         resultat_critere[0].classList.add('resultat_critere_risque_maitrise');
      }
      else{
 
        resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
        resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
 
         resultat_critere[0].innerHTML =  'risque modéré';  
         resultat_critere[0].classList.add('resultat_critere_risque_modere'); 
      };
 });
 /*********************************************GRAVITE(1)**************************************/



/*********************************************GRAVITE(2)**************************************/
    /***gravite***/
     SELECT_GRAV.addEventListener('change', function() {
     var index_grav = SELECT_GRAV.value; 
     RES_GRAV.innerHTML =  index_grav;    
     RES_GRAV.classList.add('bloc_chiffre');   

      /***frequence***/
      SELECT_FREQ.addEventListener('change', function() {
      var index_niv_freq = SELECT_FREQ.value;
      RES_NIV_FREQ.innerHTML =  index_niv_freq;    
      RES_NIV_FREQ.classList.add('bloc_chiffre'); 
 
      /***maitrise***/
      Select_maitrise.addEventListener('change', function() {    
      var index = Select_maitrise.value;
      RES_FREQ.innerHTML =  index;    
      RES_FREQ.classList.add('bloc_chiffre');   

      var resultat_defintif = index_niv_freq * index_grav  * index;
   
      RES_DEFINITIF.innerHTML = resultat_defintif;
      RES_DEFINITIF.classList.add('bloc_chiffre');  

      if(resultat_defintif>=9){

        resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
        resultat_critere[0].classList.remove('resultat_critere_risque_modere');
       
        resultat_critere[0].innerHTML =  'risque majeur';  
        resultat_critere[0].classList.add('resultat_critere_risque_majeur');

     }
     else if(resultat_defintif<=4){

        resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
        resultat_critere[0].classList.remove('resultat_critere_risque_modere');

        resultat_critere[0].innerHTML =  'risque maitrisé';  
        resultat_critere[0].classList.add('resultat_critere_risque_maitrise');
     }
     else{

       resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
       resultat_critere[0].classList.remove('resultat_critere_risque_majeur');

        resultat_critere[0].innerHTML =  'risque modéré';  
        resultat_critere[0].classList.add('resultat_critere_risque_modere'); 

     };

});

});

});
/*********************************************GRAVITE(2)**************************************/


 /*********************************************GRAVITE(3)**************************************/

    /***gravite***/
    SELECT_GRAV.addEventListener('change', function() {
      var index_grav = SELECT_GRAV.value; 
      RES_GRAV.innerHTML =  index_grav;    
      RES_GRAV.classList.add('bloc_chiffre');  
      
      
      Select_maitrise.addEventListener('change', function() {    
        var index = Select_maitrise.value;
        RES_FREQ.innerHTML =  index;    
        RES_FREQ.classList.add('bloc_chiffre');   
 
       /***frequence***/
       SELECT_FREQ.addEventListener('change', function() {
       var index_niv_freq = SELECT_FREQ.value;
       RES_NIV_FREQ.innerHTML =  index_niv_freq;    
       RES_NIV_FREQ.classList.add('bloc_chiffre'); 
  
       /***maitrise***/

       var resultat_defintif = index_niv_freq * index_grav  * index;
       
       RES_DEFINITIF.innerHTML = resultat_defintif;
       RES_DEFINITIF.classList.add('bloc_chiffre');  



       if(resultat_defintif>=9){

        resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
        resultat_critere[0].classList.remove('resultat_critere_risque_modere');
       
        resultat_critere[0].innerHTML =  'risque majeur';  
        resultat_critere[0].classList.add('resultat_critere_risque_majeur');

     }
     else if(resultat_defintif<=4){

        resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
        resultat_critere[0].classList.remove('resultat_critere_risque_modere');

        resultat_critere[0].innerHTML =  'risque maitrisé';  
        resultat_critere[0].classList.add('resultat_critere_risque_maitrise');


     }
     else{

       resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
       resultat_critere[0].classList.remove('resultat_critere_risque_majeur');

        resultat_critere[0].innerHTML =  'risque modéré';  
        resultat_critere[0].classList.add('resultat_critere_risque_modere'); 


     };

 });
 
 });
 
 });

/*********************************************GRAVITE(3)**************************************/




/*********************************************MAITRISE(1)**************************************/
          /***maitrise***/
          Select_maitrise.addEventListener('change', function() {    
            var index = Select_maitrise.value;
            RES_FREQ.innerHTML =  index;    
            RES_FREQ.classList.add('bloc_chiffre');   
      
      
          /***gravite***/
      
            var index_grav = SELECT_GRAV.value; 
            RES_GRAV.innerHTML =  index_grav;    
            RES_GRAV.classList.add('bloc_chiffre');   
       
             /***frequence***/
      
             var index_niv_freq = SELECT_FREQ.value;
             RES_NIV_FREQ.innerHTML =  index_niv_freq;    
             RES_NIV_FREQ.classList.add('bloc_chiffre'); 
      
             var resultat_defintif = index_niv_freq * index_grav  * index;
      
        
             RES_DEFINITIF.innerHTML = resultat_defintif;
             RES_DEFINITIF.classList.add('bloc_chiffre');  
      
      
             if(resultat_defintif>=9){
      
              resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
              resultat_critere[0].classList.remove('resultat_critere_risque_modere');
             
              resultat_critere[0].innerHTML =  'risque majeur';  
              resultat_critere[0].classList.add('resultat_critere_risque_majeur');
      
           }
           else if(resultat_defintif<=4){
      
              resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
              resultat_critere[0].classList.remove('resultat_critere_risque_modere');
      
              resultat_critere[0].innerHTML =  'risque maitrisé';  
              resultat_critere[0].classList.add('resultat_critere_risque_maitrise');
           }
           else{
      
             resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
             resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
      
              resultat_critere[0].innerHTML =  'risque modéré';  
              resultat_critere[0].classList.add('resultat_critere_risque_modere'); 
           };
       
       });
       
       /*********************************************MAITRISE(1)**************************************/


  
/*********************************************MAITRISE(2)**************************************/
          /***maitrise***/
      Select_maitrise.addEventListener('change', function() {    
      var index = Select_maitrise.value;
      RES_FREQ.innerHTML =  index;    
      RES_FREQ.classList.add('bloc_chiffre');   


    /***gravite***/
    SELECT_GRAV.addEventListener('change', function() {
      var index_grav = SELECT_GRAV.value; 
      RES_GRAV.innerHTML =  index_grav;    
      RES_GRAV.classList.add('bloc_chiffre');   
 
       /***frequence***/
       SELECT_FREQ.addEventListener('change', function() {
       var index_niv_freq = SELECT_FREQ.value;
       RES_NIV_FREQ.innerHTML =  index_niv_freq;    
       RES_NIV_FREQ.classList.add('bloc_chiffre'); 

       var resultat_defintif = index_niv_freq * index_grav  * index;

  
       RES_DEFINITIF.innerHTML = resultat_defintif;
       RES_DEFINITIF.classList.add('bloc_chiffre');  


       if(resultat_defintif>=9){

        resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
        resultat_critere[0].classList.remove('resultat_critere_risque_modere');
       
        resultat_critere[0].innerHTML =  'risque majeur';  
        resultat_critere[0].classList.add('resultat_critere_risque_majeur');

     }
     else if(resultat_defintif<=4){

        resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
        resultat_critere[0].classList.remove('resultat_critere_risque_modere');

        resultat_critere[0].innerHTML =  'risque maitrisé';  
        resultat_critere[0].classList.add('resultat_critere_risque_maitrise');
     }
     else{

       resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
       resultat_critere[0].classList.remove('resultat_critere_risque_majeur');

        resultat_critere[0].innerHTML =  'risque modéré';  
        resultat_critere[0].classList.add('resultat_critere_risque_modere'); 
     };
 
 });
 
 });
 
 });
 /*********************************************MAITRISE(2)**************************************/



   /*********************************************MAITRISE(3)**************************************/

          /***maitrise***/
           Select_maitrise.addEventListener('change', function() {    
            var index = Select_maitrise.value;
            RES_FREQ.innerHTML =  index;    
            RES_FREQ.classList.add('bloc_chiffre');   


          /***frequence***/
          SELECT_FREQ.addEventListener('change', function() {
          var index_niv_freq = SELECT_FREQ.value;
          RES_NIV_FREQ.innerHTML =  index_niv_freq;    
          RES_NIV_FREQ.classList.add('bloc_chiffre'); 
      
      
          /***gravite***/
            SELECT_GRAV.addEventListener('change', function() {
            var index_grav = SELECT_GRAV.value; 
            RES_GRAV.innerHTML =  index_grav;    
            RES_GRAV.classList.add('bloc_chiffre');  
            
            var resultat_defintif = index_niv_freq * index_grav  * index;
       
             RES_DEFINITIF.innerHTML = resultat_defintif;
             RES_DEFINITIF.classList.add('bloc_chiffre');  


             if(resultat_defintif>=9){

              resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
              resultat_critere[0].classList.remove('resultat_critere_risque_modere');
             
              resultat_critere[0].innerHTML =  'risque majeur';  
              resultat_critere[0].classList.add('resultat_critere_risque_majeur');
     
           }
           else if(resultat_defintif<=4){
     
              resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
              resultat_critere[0].classList.remove('resultat_critere_risque_modere');
     
              resultat_critere[0].innerHTML =  'risque maitrisé';  
              resultat_critere[0].classList.add('resultat_critere_risque_maitrise');
     
     
           }
           else{
     
             resultat_critere[0].classList.remove('resultat_critere_risque_maitrise');
             resultat_critere[0].classList.remove('resultat_critere_risque_majeur');
     
              resultat_critere[0].innerHTML =  'risque modéré';  
              resultat_critere[0].classList.add('resultat_critere_risque_modere'); 
     
     
           };
 
       });
       
       });
       
       });

   /*********************************************MAITRISE(3)**************************************/


  








    


