<?php include('header.php'); ?>
<?php include('cnx.php'); ?>

<div id="grand_titre"><h1>GRILLE DE COTATION</h1></div>

    <body>

             <div id="grav_bloc">
                L'estimation du risque se fait en évaluant deux critères :<br/>
                Ø LA GRAVITE DU DOMMAGE<br/>
                Ø LA FREQUENCE DE LA TACHE / SITUATION DE TRAVAIL<br/>
                Pour cela, nous pouvons nous aider d'une échelle de cotation, qui permettra d'estimer le niveau de risque :<br/>
             </div>

             <div class="tableau espace">          
                
                <div class="entet">
                        <div class="ligne">
                                <div class="cellule entete">Niveau de fréquence</div>
                                <div class="cellule entete">Echelle</div>    
                        </div> 
                </div>

                      
                    

                <div id="corps">

                        <div class="ligne">
                                <div class="cellule">1</div>
                                <div class="cellule">Tâche rare ou exceptionnelle (quelques fois par an)</div>    
                        </div> 
                        
                        <div class="ligne">
                                <div class="cellule">2</div>
                                <div class="cellule">Tâche occasionnelle (plusieurs fois par mois)</div>    
                        </div>


                        <div class="ligne">
                                <div class="cellule">3</div>
                                <div class="cellule">Tâche régulière (plusieurs fois par semaine)</div>    
                        </div>


                        <div class="ligne">
                                <div class="cellule">4</div>
                                <div class="cellule">Tâche quotidienne (plusieurs fois par jour)</div>    
                        </div>

                </div>   
                
             </div>


             <div class="tableau espace top">          
                
                <div class="entet">
                        <div class="ligne">
                                <div class="cellule entete">Niveau de maitrise</div>
                                <div class="cellule entete">Echelle</div>    
                        </div> 
                </div>

                      
                    

                <div id="corps">

                        <div class="ligne">
                                <div class="cellule">1</div>
                                <div class="cellule">Peu ou pas de dommages</div>    
                        </div> 
                        
                        <div class="ligne">
                                <div class="cellule">2</div>
                                <div class="cellule">Dommages faibles, sans arrêt de travail</div>    
                        </div>


                        <div class="ligne">
                                <div class="cellule">3</div>
                                <div class="cellule">Dommages réversibles, avec arrêt de travail</div>    
                        </div>


                        <div class="ligne">
                                <div class="cellule">4</div>
                                <div class="cellule">Dommages irréversibles (incapacité partielle ou totale - décès)</div>    
                        </div>

                </div>   
                
             </div>

                <div>La maitrise du risque est ensuite analysée en fonction des moyens de protection déjà mis en place :</div>
               



                <div class="tableau top">          
                
                        <div class="entet">
                                <div class="ligne">
                                        <div class="cellule entete">Niveau de maitrise</div>
                                        <div class="cellule entete">Echelle</div>    
                                </div> 
                        </div>
        
                              
                            
        
                        <div id="corps">
        
                                <div class="ligne">
                                        <div class="cellule">1</div>
                                        <div class="cellule">Aucune mesure de prévention</div>    
                                </div> 
                                
                                <div class="ligne">
                                        <div class="cellule">0,75</div>
                                        <div class="cellule">Mesures ou consignes inadaptées / absence de protection collective / protection individuelle non portée</div>    
                                </div>
        
        
                                <div class="ligne">
                                        <div class="cellule">0,5</div>
                                        <div class="cellule">Protection collective / individuelle</div>    
                                </div>
        
        
                                <div class="ligne">
                                        <div class="cellule">0,25</div>
                                        <div class="cellule">Maitrise du risque à la source (capotage, captation à la source…)</div>    
                                </div>
        
                        </div>   
                        
                     </div>

              
         
                <div id="gras">Le niveau de risque final est calculé de la manière suivante : Fréquence x Gravité x Maitrise</div>
               
                <div id="critere">
                <div id="vert">De 0,25 à 4, Risque maitrisé : rester vigilant et maintenir la prévention existante</div>
                <div id="jaune">De 5 à 8, Risque modéré : actions à définir et à mettre en place</div>
                <div id="rouge">De 9 à 16, Risque majeur : actions urgentes à mettre en place</div>
               </div>




                </div>

             </div>
        
    </body>

    <footer>

    </footer>
</body>
</html>