

<?php include('header.php'); ?>
<?php include('cnx.php'); ?>


<?php
/* entreprise */
$requete = $cnx->prepare('SELECT * FROM entreprise WHERE ID=1');
$lecteur=$requete->execute();  
$entreprise = $requete->fetch(PDO::FETCH_OBJ);     

 /* entreprise */
 $requete = $cnx->prepare('SELECT * FROM effectif WHERE ID=1');
 $requete->execute();  
 $effectif = $requete->fetch(PDO::FETCH_OBJ);   



  /* parametre_version */
  $requete = $cnx->prepare('SELECT * FROM parametre_version WHERE ID=1');
  $requete->execute();  
  $parametre_version = $requete->fetch(PDO::FETCH_OBJ);   






?>

<div id="grand_titre"><h1>PAGE DE GARDE</h1></div>


        <div id="premier_bloc_page">

                    <div id="bloc_1">
                            
                            <div class="bloc">
                                <div class="blo1"><p>Entreprise</p></div> 
                                <div class="blo"><p><?php echo  $entreprise->variable_1; ?></p></div> 
                            </div>
                          
                            <div class="bloc">
                                <div class="blo1"><p>Activité</p></div> 
                                <div class="blo"><p><?php echo  $entreprise->variable_8; ?></p></div> 
                            </div>

                            <div class="bloc">
                                <div class="blo1"><p>Adresse</p></div> 
                                <div class="blo"><p><?php echo  $entreprise->variable_6; ?></p></div> 
                            </div>


                            <div class="bloc">
                                <div class="blo1"><p>Coordonnées</p></div> 
                                <div class="blo"><p><?php echo  $entreprise->variable_4; ?></p></div> 
                            </div>


                            <div class="bloc">
                                <div class="blo1"><p>Directeur</p></div> 
                                <div class="blo"><p><?php echo  $entreprise->variable_2; ?></p></div> 
                            </div>


                            <div class="bloc">
                                <div class="blo1"><p>Effectif</p></div> 
                                <div class="blo"><p><?php echo   $effectif->variable_1; ?></p></div> 
                            </div>
                       
                           

                    </div>



                    <?php
               /* Paramétre version */
               $requete = $cnx->prepare('SELECT * FROM  parametre_version  WHERE ID=1');
               $requete->execute();  
                $parametre_version=$requete->fetch(PDO::FETCH_OBJ);            
               ?>


                    <div id="bloc_2">
                       
                        <div class="bloc">
                            <div class="blo1"><p>Date de création</p></div> 
                            <div  class="blo"><p><?=  $parametre_version->variable_1; ?></p></div> 
                        </div>
                         
                        <div class="bloc">
                        <div  class="blo1"><p>Date de mise à jour</p></div> 
                        <div  class="blo"><p><?=  $parametre_version->variable_2; ?></p></div> 
                        </div>

                        <div class="bloc">
                        <div  class="blo1"><p>N°de version</p></div> 
                        <div  class="blo"><p><?=  $parametre_version->variable_3; ?></p></div>
                       </div> 

                    </div>


        </div>



        <div id="deuxieme_bloc_page" style="text-align:center;"><h1>DOCUMENT UNIQUE D'EVALUATION DES RISQUES PROFESSIONNELS (DUERP)</h1></div>


        <div id="troisieme_bloc_page" style="text-align:justify;">

               <div>
                 <p>Qu'est-ce que le Document Unique ? (Articles L. 4121-1 à 3 et R. 4121-1 à 4 du code du travail, Loi n°2021-1018 du 2 août 2021 et le Décret n°2022-395 du 18 mars 2022)</p>
                 <p>L'employeur est responsable de la santé et de la sécurité de ses salariés. La réalisation du Document Unique doit conduire le chef d'entreprise à mettre en place un plan d'actions pour supprimer ou éviter les risques professionnels. Le Document Unique est un inventaire des risques identifiés réalisés dans chaque unité de travail de l'entreprise ou de l'établissement. Tout employeur est tenu de retranscrire les résultats de cette évaluation des risques professionnels dans un Document Unique. Il s’agit d’un document écrit, numérique et mis en ligne sur une plateforme dédiée.  	
                    La mise à jour du Document Unique est annuelle pour les entreprises de plus de 11 salariés : elle implique une nouvelle liste des actions de prévention et de protection des salariés (pour les entreprises de moins de 50 salariés), ou un nouveau Programme Annuel de Prévention des Risques Professionnels et d’Amélioration des Conditions de Travail (PAPRIPACT pour les entreprises de plus de 50 salariés).
                    Pour les entreprises de moins de 11 salariés, le Document Unique sera remis à jour dès lors qu’une information supplémentaire intéressant l’évaluation des risques professionnels sera portée à la connaissance de l’employeur ou lors de tout aménagement important modifiant les conditions de travail.</p>
               </div>


               <div>
                <p>Qui est concerné par le Document Unique ?</p>
                <p>Le DUERP doit être mis en place dans toutes les structures qui emploient au moins une personne, quelle que soit la taille et l'activité de cette organisation.                                                                                                                          C’est à l’employeur qu’incombe la réalisation de ce document. Il peut tout à fait choisir de s’adjoindre des collaborateurs ou de déléguer cette tâche à des personnes qu'il estime compétentes (CSE, branche professionnelle, organisme extérieur, conseils et accompagnement du Service de Prévention et de Santé au Travail), cependant sa responsabilité demeurera entière.</p>
               </div>



               <div>
                <p>A quoi sert le Document Unique ?</p>
                <p>Le DUERP répertorie l'ensemble des risques professionnels auxquels sont exposés les travailleurs et assure la traçabilité collective de ces expositions. Il est l'élément qui formalise que l'employeur met tout en œuvre pour préserver la santé et la sécurité des salariés au travail. C’est un outil administratif et dynamique de gestion des risques professionnels au sein de l’entreprise. Il est le témoin de l’évolution des conditions de travail.
                    Il doit être mis à la disposition :
                    - des travailleurs (y compris les anciens travailleurs de la structure)
                    Un avis indiquant les modalités d'accès des travailleurs au document unique est affiché à une place convenable et aisément accessible dans les lieux de  travail                                                                                             - du CSE	                                                                                                                                                                                                                                                                                                                                                                                                                                  - du SPST
                    - de l'inspection du travail
                    - du service prévention de la sécurité sociale
                    - des organismes professionnels
                    -de l'inspecteur de radioprotection 
                    En cas de poursuites judiciaires, faisant suite à un accident du travail, le DUERP sera un document de référence demandé par le Juge.	</p>
               </div>


               <div>
                <p>Quelles sont les sanctions ?</p>
                <p>Des sanctions pénales sont prévues à l’encontre des employeurs qui ne respectent pas leurs obligations d’établir et de mettre à jour le Document Unique (article R. 4741-1 du code du travail) :<br/>
                    "Le fait de ne pas transcrire ou de ne pas mettre à jour les résultats de l'évaluation des risques, dans les conditions prévues aux articles R. 4121-1 et R. 4121-2, est puni de l'amende prévue pour les contraventions de cinquième classe. La récidive est réprimée conformément aux articles 132-11 et 132-15 du code pénal."</p>
               </div>


        </div>


            </form>



</body>
</html>