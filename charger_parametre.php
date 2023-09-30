<?php //                                        include('header.php'); ?>
<?php include('cnx.php'); ?>
<?php 

if(isset($_POST['suppid']))
{
    $ID = $_POST['suppid']; 
}


if(isset($_POST['valeur']))
{
    $valeur = $_POST['valeur'];
} 

if(isset($_POST['valeur_update']))
{
    $update_valeur=$_POST['valeur_update'];
    $id_update=$_POST['update_ID'];
    $champ_mise_a_jour=$_POST['champ_mise_a_jour'];
}

?>


<?php


if(isset($update_valeur))
{
    $requete = $cnx->prepare("UPDATE `poste_de_travail_1` SET 
    variables_1='$champ_mise_a_jour', 
    relation_ID=0 WHERE ID=$id_update");
    $requete -> execute(); 
} 



if(isset($valeur))
{   
         // ajout poste de travail 
        if($valeur=='add_ajout') 
        {
        $requete1 = $cnx->prepare("INSERT INTO poste_de_travail_1(variables_1,relation_ID) VALUES (?,?)");
        $requete1 -> execute(array('',0)); 
        }                         
}

if(isset($ID))
{
     /* poste_de_travail_1 */  
     if(!empty($ID))
     {
    
        $requete = $cnx->prepare("SELECT * FROM poste_de_travail_1 WHERE ID=$ID");
        $requete->execute();  
        $count= $requete->rowcount();
   
        //si le couple Pseudo/password est trouvé
   
        if($count>0)
        {
                   $requete = $cnx->prepare("DELETE FROM `poste_de_travail_1` WHERE ID=$ID");
                   $requete->execute();
        }
   
       // $poste_de_travail_1_test = $requete->fetch(PDO::FETCH_OBJ);    
     }
      
}


/* poste_de_travail_2 */                            
$requete = $cnx->prepare('SELECT * FROM poste_de_travail_2 WHERE ID=1');
$requete->execute();  
$poste_de_travail_2 = $requete->fetch(PDO::FETCH_OBJ);   
?>

<div id="bloc_3">
<div class="titre">Poste de travail</div>        
                    <div class="bloc">
                        <div class="blo2"><p>LES DIFFERENTS CORPS DE METIERS / UNITES DE TRAVAIL <button id="ajout_input2"><img src="img/ajout.jpg" id="ajout" alt=""></button></p></div> 
                        <div class="blo">

                            
                        <?php    
                                /* poste_de_travail_1 */   
                                $requete = $cnx->prepare('SELECT * FROM poste_de_travail_1');
                                $requete->execute();                              
                                while ($poste_de_travail_1 = $requete->fetch(PDO::FETCH_OBJ))
                                      { 
                                        ?>
                                        <input type="text" id="<?php echo   $poste_de_travail_1->ID; ?>" value="<?php echo   $poste_de_travail_1->variables_1; ?>" name="<?php echo   $poste_de_travail_1->ID; ?>"><button class="ident2" data_numero="<?php echo   $poste_de_travail_1->ID; ?>" ><img src="img/corbeille.jpg" id="corbeille" alt=""><input type="hidden" name=""  value="<?php echo   $poste_de_travail_1->ID; ?>"></button><button class="update_2" data_numero="<?php echo   $poste_de_travail_1->ID; ?>"><img src="img/update.jpg" id="update" alt=""></button><br/><br/>              
                                        <?php  
                                      }
                        ?>               
                       </div> 
                    </div>
                  
                    <div class="bloc">
                        <div class="blo2"><p>DUREE HEBDOMADAIRE DU TRAVAIL</p></div> 
                        <div class="blo"><p><input type="text" class="dim" value="<?php echo  $poste_de_travail_2->variable_1; ?>" name="bloc_3_variables_2"></p></div> 
                    </div>

                    <div class="bloc">
                        <div class="blo2"><p>NOMBRE DE SALARIES EN TRAVAIL DE NUIT</p></div> 
                        <div class="blo"><p><input type="text" class="dim"  value="<?php echo  $poste_de_travail_2->variable_2; ?>" name="bloc_3_variables_3"></p></div> 
                    </div>


                    <div class="bloc">
                        <div class="blo2"><p>NOMBRE DE SALARIES EN TRAVAIL POSTE</p></div> 
                        <div class="blo"><p><input type="text" class="dim" value="<?php echo  $poste_de_travail_2->variable_3; ?>" name="bloc_3_variables_4"></p></div> 
                    </div>
              </div>



<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
 <script src="js/script_charge_bloc_4.js"></script> 

 