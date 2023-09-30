

// var CompterCommentaires=2;
// var ID = id_post_travail_supprimer;

// var ID= $('button');







$(document).ready(function() {


    $('#filtrer').click(function(){ 
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
          variable7:echeance

        });

    });


 });



 