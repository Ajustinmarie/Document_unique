$(document).ready(function() {
 

$('#bouton_envoyer').click(function(){ 

                var unite_travail = $('select[name=risque_danger]').val();
                var risque_danger = $('select[name=unite_de_travail]').val();
                var origine = $('textarea[name=origine]').val();
                var dommages_potentiels = $('input[name=dommages_potentiels]').val();
                var accident_de_travail = $('input[name=accident_de_travail]').val();
                var niv_freq = $('select[name=niv_freq]').val();
                var niv_grav = $('select[name=niv_grav]').val();
                var niv_maitrise = $('select[name=niv_maitrise]').val();   
                var resultat_critere = $('.resultat_critere').html();
                var prop_mesure_prevention = $('textarea[name=prop_mesure_prevention]').val();
                var referent_action = $('input[name=referent_action]').val();  
                var echeance = $('input[name=echeance]').val(); 
                
             
                

                $('#page_entiere').load('charge_identification_vierge.php', {         
                        
                            unite_travail:unite_travail,
                            risque_danger:risque_danger,
                            origine:origine,
                            dommages_potentiels:dommages_potentiels,
                            accident_de_travail:accident_de_travail,
                            niv_freq:niv_freq,
                            niv_grav:niv_grav,
                            niv_maitrise:niv_maitrise,
                            resultat_critere:resultat_critere,
                            prop_mesure_prevention:prop_mesure_prevention,
                            referent_action:referent_action,
                            echeance:echeance,
                          

                        });                

            })



});