
// var CompterCommentaires=2;
// var ID = id_post_travail_supprimer;

// var ID= $('button');



$(document).ready(function() {
    $('.ident2').click(function(){ 

           let numero = this.getAttribute('data_numero');
           console.log(numero)         
           $('#bloc_3').load('charger_parametre.php', {
           suppid: numero
           });
    
    });


    $('#ajout_input2').click(function(){ 

                  let valeur_ajout='add_ajout';  
                
                $('#bloc_3').load('charger_parametre.php', {
                valeur: valeur_ajout
                });

    })


      $('.update_2').click(function(){ 

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

  })




});