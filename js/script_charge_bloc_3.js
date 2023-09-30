

// var CompterCommentaires=2;
// var ID = id_post_travail_supprimer;

// var ID= $('button');



$(document).ready(function() {
       $('.ident').click(function(){ 

              let numero = this.getAttribute('data_numero');
              console.log(numero)         
              $('#bloc_3').load('charger_parametre.php', {
              suppid: numero
              });
       
       });


       $('#ajout_input').click(function(){ 

                  let valeur_ajout='add_ajout';  
                   
                   $('#bloc_3').load('charger_parametre.php', {
                   valeur: valeur_ajout
                   });

       });


       $('.update_1').click(function(){ 

              let valeur_up='add_update';  

              let numero = this.getAttribute('data_numero');

          //    var input = document.getElementById(numero).value;
              
              var valeur = $('input[name='+numero+']').val();

              console.log(valeur);
            
          //   let update_ID = this.getAttribute('data_numero');  
            $('#bloc_3').load('charger_parametre.php', {
               valeur_update: valeur_up,
               update_ID :numero,
               champ_mise_a_jour: valeur
             });

});



$('#bouton_envoyer').click(function(){ 

             
       /* ENTREPRISE */
       var nom_entreprise = $('input[name=bloc_1_variables_1]').val();
       var directeur = $('input[name=bloc_1_variables_2]').val();
       var raison_sociale = $('input[name=bloc_1_variables_3]').val();
       var numero_de_telephone = $('input[name=bloc_1_variables_4]').val();
       var nombre_etablissement = $('input[name=bloc_1_variables_5]').val();
       var adresse_du_siege = $('input[name=bloc_1_variables_6]').val();
       var nom_du_gerant = $('input[name=bloc_1_variables_7]').val();
       var activite_principale = $('input[name=bloc_1_variables_8]').val();
       var code_naf = $('input[name=bloc_1_variables_9]').val();
        /* ENTREPRISE */

    
      
      


        /* EFFECTIF */
        var nombre_de_salarie_total = $('input[name=bloc_2_variables_1]').val();
        var nombre_de_femme = $('input[name=bloc_2_variables_2]').val();
        var nombre_d_interimaires = $('input[name=bloc_2_variables_3]').val();
        var nombre_d_salarie_hand = $('input[name=bloc_2_variables_4]').val();
        var nombre_d_salarie_moins_18_ans = $('input[name=bloc_2_variables_5]').val();
        var nombre_d_CDD = $('input[name=bloc_2_variables_6').val();
        var nombre_d_contrats_alternance = $('input[name=bloc_2_variables_7').val();
        var nombre_d_cadres = $('input[name=bloc_2_variables_8').val();
        var nombre_d_personnes_en_sir = $('input[name=bloc_2_variables_9').val();
        var nombre_d_personnes_en_sia = $('input[name=bloc_2_variables_10').val();
          /* EFFECTIF */


          /* Poste de travail */
          var duree_hebdomadaire = $('input[name=bloc_3_variables_2]').val(); 
          var nb_salarie_en_travail_de_nuit = $('input[name=bloc_3_variables_3]').val(); 
          var nb_salarie_en_travail_de_poste = $('input[name=bloc_3_variables_4]').val(); 
           /* Poste de travail */



           /* Parametre version */
           var date_creation = $('input[name=bloc_4_variables_1]').val(); 
           var date_mise_a_jour = $('input[name=bloc_4_variables_2]').val(); 
           var num_version = $('input[name=bloc_4_variables_3]').val(); 
           /* Parametre version */
         

           /* partenaires_de_sante */
           var existence_cse = $('input[name=bloc_5_variables_1]').val(); 
           var existence_sst = $('input[name=bloc_5_variables_2]').val(); 
           var nom_service_sante = $('input[name=bloc_5_variables_3]').val(); 
           var nom_medecin_travail = $('input[name=bloc_5_variables_4]').val(); 
           /* partenaires_de_sante */



           /* Indicateurs de sante au travail */
           var nombre_at = $('input[name=bloc_6_variables_1]').val(); 
           var nombre_accidents = $('input[name=bloc_6_variables_2]').val(); 
           var nombre_ipp = $('input[name=bloc_6_variables_3]').val(); 
           var nombre_inaptitude = $('input[name=bloc_6_variables_4]').val(); 








     $('#body_general').load('charger_form_envoyer.php', {         
     /*EFFECTIF */
      variable1:nombre_de_salarie_total,
      variable2:nombre_de_femme,
      variable3:nombre_d_interimaires,
      variable4:nombre_d_salarie_hand,
      variable5:nombre_d_salarie_moins_18_ans,
      variable6:nombre_d_CDD,
      variable7:nombre_d_contrats_alternance,
      variable8:nombre_d_cadres,
      variable9:nombre_d_personnes_en_sir,
      variable10:nombre_d_personnes_en_sia,
     /*EFFECTIF */ 

    

     /*Poste de travail */
     variable11:duree_hebdomadaire, 
     variable12:nb_salarie_en_travail_de_nuit,
     variable13:nb_salarie_en_travail_de_poste,
     /* Poste de travail */

     /* Parametre version */
     variable14:date_creation,
     variable15:date_mise_a_jour,
     variable16:num_version,
     /* Parametre version */

   

     
     /* partenaires_de_sante */
     variable33:existence_cse,
     variable17:existence_sst,
     variable18:nom_service_sante,
     variable19:nom_medecin_travail,
     /* partenaires_de_sante */

     
     /* Indicateurs de sante au travail */
     variable20:nombre_at,
     variable21:nombre_accidents,
     variable22:nombre_ipp,
     variable23:nombre_inaptitude,

     

        /* ENTREPRISE */
        variable24:nom_entreprise,
        variable25:directeur,
        variable26:raison_sociale,
        variable27:numero_de_telephone,
        variable28:nombre_etablissement,
        variable29:adresse_du_siege,
        variable30:nom_du_gerant,
        variable31:activite_principale,
        variable32:code_naf,
        /* ENTREPRISE */



     });

   

})



 });