<?php
                 include_once("Page_gestion.php");
                 include_once("./Contravention/contravention_queries.php");
           ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Contravention/contravention.css">
  <link rel="stylesheet" href="replicanav_acceuil.css">
  <link rel="stylesheet" href="page_gestion.css">
  <link rel="stylesheet" href="./footer/footer.css">
</head>
<body>
<!--had to re-add the header because the resources and pages couldn't be found-->
<!--.....................................................................................................................................-->

<!--<div class="header">
        <div class="center_element">

           <div class="police_logo">
               <img src="../images/Logo PNH.jpg" alt="police logo">
            </div>
            
            <div class="title1">
                <h2>
                    DCPR           
                </h2>    
                <span>
                    Direction Centrale De la Police Routiere
                </span>
            </div>
            
            <div class="armoirie">
                <img src="../images/Armoirie1.jpg" alt="armoirie">
            </div>
        </div>
    </div>
    
    
    <div class="options1">
        <div class="center_element">
                         
            <ul>
                
                <li>Acceuil</li>
                <li>Contraventions</li>
                <li>Contacts</li>
            </ul>
            <a href="#">Acceuil</a>
            <a href="#">Contraventions</a>
            <a href="#">Contacts</a>
            
        </div>
    </div>
    <br>

        -->

<!--.....................................................................................................................................-->

<div class="row">
      <div class="enregistrer">
            <div class="header1">
                Modifier une offense
            </div>

           <div class="contenu">
              <form action="" method="post">

                    <table>
                        <tr id="askdossier"> 
                            <td class="conducteur">
                                    <input type="text" name ="TxtNodossier" placeholder="No Dossier" required>
                            </td>
                            <td class="conducteur">       <!--utilisateur-->                                  
                                <input type="text" name ="TxtCouleur" placeholder="Couleur" required>
                            </td>
                            <td class="conducteur">
                                <input type="text" name ="Txtmarque" placeholder="Marque" required>
                            </td>
                        </tr>

                        <tr>
                                <!--<td  class="conducteur_agent" >
                                  <input type="text" name ="TxtNoFiche" placeholder="No Fiche" required>
                                </td>-->

                                <td class="conducteur_agent1">
                                  <input type="text" name ="Txtplaque" placeholder="Plaque vehicule" required>
                                </td>
                        </tr>

                        <tr>                                    
                            <td class="conducteur_agent1">
                                <input type="text" name ="Txtcode" placeholder="Code agent" required>
                            </td>
                        </tr>
                        
                        <tr >
                                <td  class="conducteur_agent" >
                                  <input type="text" name ="TxtAdresse" placeholder="Adresse" required>
                                </td>

                                <td class="conducteur_agent">
                                  <input type="number" name ="Txtmontant" placeholder="Montant a payer" required>
                                </td>
                        </tr>
                        
                        <tr>
                          <td class="conducteur1">
                                <!--Date input-->
                                <label for="Date d'offense">Date d'offense</label>
                                <input type="date" name="Dtdoffense">
                            </td>
                            
                        </tr>                                              
                                                

                        <tr>
                            <td class="">
                            <select class="offense" name="offense" >
                                            <option selected disabled>Article violee.</option>
                                            <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse ">Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d'un permis">Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d'identification">Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d'ivresse">Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                </select>
                            </td>
                        </tr>    
                    </table>

                    <!--Insert send button-->
                    <div class="send_button">
                        <input type="submit" value="Enregistrer offense" name="BtnEnvoyer"> 
                    </div>  
                </form>  

            </div>
        </div>
    </div>

<?php
        if(isset($_POST['BtnEnvoyer']))
        {
            $no_dossier = $_POST['TxtNodossier'];
            $plaque_vehicule = $_POST['Txtplaque'];
            $couleur = $_POST['TxtCouleur'];
            $marque = $_POST['Txtmarque'];
            $code_agent = $_POST['Txtcode'];
            $adresse = $_POST['TxtAdresse'];
            $article_violation = $_POST['offense'];
            $montant_a_payer = $_POST['Txtmontant'];
            $date_contravention = $_POST['Dtdoffense'];

            Insert_contravention ($no_dossier, $plaque_vehicule, $couleur, $marque, $code_agent, $adresse, $article_violation, $montant_a_payer, $date_contravention);
        }
    ?>
<!--.....................................................................................................................................-->
<!--FOOTER-->
<div class="center_element">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h2>Compagnie</h2>
                    <ul>  
                        <li><a href="A propos.html#apropos">A propos</a></li>
                        <li><a href="A propos.html#services">Nos Services</a></li>
                        <li><a href="A propos.html#politique">Politique de confidentailite</a></li>                   
                    </ul>
                </div>


                <div class="footer-col">
                    <h2>Aide</h2>
                    <ul>  
                        <li><a href="Contact.html">Questions et Reponses</a></li>
                        <li><a href="Commandes.html">Expedition</a></li>
                        <li><a href="A propos.html">Retour</a></li>
                        <li><a href="Commandes.html">Etat de commande</a></li>
                        <li><a href="A propos.html">Options de paiement</a></li>                   
                    </ul>
                </div>

                <div class="footer-col">
                    <h2>Contact</h2>
                    <div class="lienssociaux">
                        <a  target="_blank" href="https://www.facebook.com/index.php"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
                        <a target="_blank"href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
                        <a target="_blank"href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>