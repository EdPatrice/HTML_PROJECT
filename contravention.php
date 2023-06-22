<?php
    session_start();

    include_once("contravention_queries.php");
    include_once("dgi.php");
    if(isset($_POST['BtnEnvoyer']))
    {
        $dossier = $_POST['TxtNoDossier'];
        $couleur = $_POST['TxtCouleur'];
        $marque = $_POST['TxtMarque'];
        $plaque = $_POST['TxtPlaque'];
        $code_agent = $_POST['TxtCodeAgent'];
        $adresse = $_POST['TxtAdresse'];
        $montant = $_POST['TxtMontant'];
        $date = $_POST['Dtdoffense'];
        $offense = $_POST['offense'];

        Insert_contravention($dossier, $plaque, $couleur, $marque, $code_agent, $adresse, $offense, $montant, $date);
        header("Location:listeoffense.php");
    }


    include_once('Page_gestion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="contravention.css">
  <link rel="stylesheet" href="replicanav_acceuil.css">
  <link rel="stylesheet" href="page_gestion.css">
  <link rel="stylesheet" href="footer.css">
    <title>Contravention</title>
</head>
<body>

<!--had to re-add the header because the resources and pages couldn't be found-->
<!--.....................................................................................................................................-->
<!--
<div class="header">
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
            <?php
                if (isset($_SESSION['codeAgent']))
                {
                    echo "<div class='session_info'> Connecte en tant que ".$_SESSION['codeAgent']."</div>";
                }
                else
                {
                    echo "<div> ERROR </div>";
                }
            ?>
            <div class="header1">
                Enregistrer une offense
            </div>

           <div class="contenu">
              <form action="" method="post">

              <table>
                        <tr id="askdossier"> 
                            <td class="conducteur">
                                    <input type="text" name ="TxtNoDossier" placeholder="No Dossier" required>
                            </td>
                            <td class="conducteur">       <!--utilisateur-->                                  
                                <input type="text" name ="TxtCouleur" placeholder="Couleur"  required>
                            </td>
                            <td class="conducteur">
                                <input type="text" name ="TxtMarque" placeholder="Marque"  required>
                            </td>
                        </tr>

                        <tr>

                                <td class="conducteur_agent1">
                                  <input type="text" name ="TxtPlaque" placeholder="Plaque vehicule"   required>
                                </td>
                        </tr>

                        <tr>                                    
                            <td class="conducteur_agent1">
                                <input type="text" name ="TxtCodeAgent" placeholder="Code agent" required>
                            </td>
                        </tr>
                        
                        <tr >
                                <td  class="conducteur_agent" >
                                  <input type="text" name ="TxtAdresse" placeholder="Adresse" required>
                                </td>

                                <td class="conducteur_agent">
                                  <input type="number" name ="TxtMontant" placeholder="Montant a payer" required>
                                </td>
                        </tr>
                        
                        <tr>
                          <td class="conducteur1">
                                <!--Date input-->
                                <label for="Dtdoffense">Date d'offense</label>
                                <input type="date" name="Dtdoffense" required>
                            </td>
                            
                        </tr>                                              
                                                

                        <tr>
                            <td class="">
                            <select class="offense" name="offense" >
                                            <option selected disabled>Article viole</option>
                                            <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse">Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis">Article 40-Disposition d un permis</option>
                                            <option value="Article 17-Disposition de carte d identification">Article 17-Disposition de carte d identification</option>
                                            <option value="Article 44-Etat d ivresse">Article 44-Etat d ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                </select>
                            </td>
                        </tr>    
                    </table>

                    <!--Insert send button-->
                    <div class="send_button">
                        <input type="submit" value="Enregistrer" name="BtnEnvoyer"> 
                    </div>  
                </form>  

            </div>
        </div>
    </div>

<!--.....................................................................................................................................-->
<!--FOOTER-->
<!--
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
-->
<?php
    /*include_once("contravention_queries.php");
    if(isset($_POST['BtnEnvoyer']))
    {
        $dossier = $_POST['TxtNoDossier'];
        $couleur = $_POST['TxtCouleur'];
        $marque = $_POST['TxtMarque'];
        $plaque = $_POST['TxtPlaque'];
        $code_agent = $_POST['TxtCodeAgent'];
        $adresse = $_POST['TxtAdresse'];
        $montant = $_POST['TxtMontant'];
        $date = $_POST['Dtdoffense'];
        $offense = $_POST['offense'];

        Insert_contravention($dossier, $plaque, $couleur, $marque, $code_agent, $adresse, $offense, $montant, $date);
        header("Location: ./listeoffense.php");
    }*/
?>

</body>
</html>