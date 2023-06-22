<?php
                 include_once("Page_gestion.php");
                 include_once("./Contravention/contravention_queries.php");
                 if (isset($_GET['No_Fiche']))
                 {
                    $no_fiche= $_GET['No_Fiche'];
                    $tab= Select_contravention_no_fiche($no_fiche);

                 }
                 else {
                    header("Location:listeoffense.php");
                    }
                 
           ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.font-awesome.com/a076d05399,js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.font-awesome.com/a076d05399,js"></script>
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
                                    <input type="text" name ="TxtNoDossier" placeholder="No Dossier" value="<?php echo($tab[0]['No_Dossier']) ?>" required>
                            </td>
                            <td class="conducteur">       <!--utilisateur-->                                  
                                <input type="text" name ="TxtCouleur" placeholder="Couleur" value="<?php echo($tab[0]['Couleur']) ?>" required>
                            </td>
                            <td class="conducteur">
                                <input type="text" name ="TxtMarque" placeholder="Marque" value="<?php echo($tab[0]['Marque']) ?>" required>
                            </td>
                        </tr>

                        <tr>
                                <!--<td  class="conducteur_agent" >
                                  <input type="text" name ="TxtNoFiche" placeholder="No Fiche" required>
                                </td>-->

                                <td class="conducteur_agent1">
                                  <input type="text" name ="TxtPlaque" placeholder="Plaque vehicule"  value="<?php echo($tab[0]['Plaque_vehicule']) ?>" required>
                                </td>
                        </tr>

                        <tr>                                    
                            <td class="conducteur_agent1">
                                <input type="text" name ="TxtCodeAgent" placeholder="Code agent"  value="<?php echo($tab[0]['Code_agent']) ?>" required>
                            </td>
                        </tr>
                        
                        <tr >
                                <td  class="conducteur_agent" >
                                  <input type="text" name ="TxtAdresse" placeholder="Adresse" value="<?php echo($tab[0]['Adresse']) ?>" required>
                                </td>

                                <td class="conducteur_agent">
                                  <input type="number" name ="TxtMontant" placeholder="Montant a payer" value="<?php echo($tab[0]['Montant_a_payer']) ?>" required>
                                </td>
                        </tr>
                        
                        <tr>
                          <td class="conducteur1">
                                <!--Date input-->
                                <label for="Date d'offense">Date d'offense</label>
                                <input type="date" name="Dtdoffense" value="<?php echo($tab[0]['Date_contravention']) ?>">
                            </td>
                            
                        </tr>                                              
                                                

                        <tr>
                            <td class="">
                            <select class="offense" name="offense" >  
                                <!--................................................. -->
                                <?php 
                                        if($tab[0]['Article_violation']== "Article 101-Signalisation")
                                        { 
                                    ?>
                                            <option selected disabled>Article violee.</option>
                                            <option value="Article 101-Signalisation" selected>Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse">Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis">Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d identification">Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d ivresse">Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                        <?php }?>


                                <!--................................................. -->
                                    <?php 
                                        if($tab[0]['Article_violation']== "Article 82-limite vitesse")
                                        { 
                                    ?>
                                           <option selected disabled>Article violee.</option>
                                            <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse" selected >Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis">Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d identification">Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d ivresse">Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                        <?php }?>

                                <!--................................................................................................ -->
                                    <?php 
                                        if($tab[0]['Article_violation']== "Article 40-Disposition d un permis")
                                        { 
                                    ?>
                                            <option selected disabled>Article viole.</option>
                                            <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse" >Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis" selected>Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d identification">Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d ivresse">Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                            <?php }?>

                                <!--................................................................................... -->
                                    <?php 
                                        if($tab[0]['Article_violation']== "Article 17-Disposition de carte d identification")
                                        { 
                                    ?>
                                            <option selected disabled>Article viole.</option>
                                            <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse"  >Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis">Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d identification" selected>Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d ivresse">Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                            <?php }?>

                                <!--....................................................................................... -->
                                    <?php 
                                        if($tab[0]['Article_violation']== "Article 44-Etat d ivresse")
                                        { 
                                    ?>
                                            <option selected disabled>Article violee.</option>
                                           <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse" >Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis">Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d identification">Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d ivresse" selected>Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                            <?php }?>

                                <!--................................................................................................. -->
                                <?php 
                                        if($tab[0]['Article_violation']== "Article 313-Disposition de feux")
                                        { 
                                    ?>
                                            <option selected disabled>Article violee.</option>
                                           <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse"  >Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis">Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d identification">Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d ivresse">Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux" selected>Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                            <?php }?>

                                <!--.................................................................................................. -->
                                    <?php 
                                        if($tab[0]['Article_violation']== "Article 318-Emission de gaz")
                                        { 
                                    ?>
                                            <option selected disabled>Article violee.</option>
                                           <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse" >Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis">Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d identification">Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d ivresse">Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz" selected>Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation">Article 322-Plaque immatriculation</option>
                                            <?php }?>

                                <!--................................................................................................. -->
                                    <?php 
                                        if($tab[0]['Article_violation'] == "Article 322-Plaque immatriculation")
                                        { 
                                    ?>
                                            <option selected disabled>Article violee.</option>
                                            <option value="Article 101-Signalisation">Article 101-Signalisation</option>
                                            <option value="Article 82-limite vitesse"  >Article 82-limite vitesse</option>
                                            <option value="Article 40-Disposition d un permis">Article 40-Disposition d'un permis</option>
                                            <option value="Article 17-Disposition de carte d identification">Article 17-Disposition de carte d'identification</option>
                                            <option value="Article 44-Etat d ivresse">Article 44-Etat d'ivresse</option>
                                            <option value="Article 313-Disposition de feux">Article 313-Disposition de feux</option>
                                            <option value="Article 318-Emission de gaz">Article 318-Emission de gaz</option>
                                            <option value="Article 322-Plaque immatriculation" selected>Article 322-Plaque immatriculation</option>
                                            <?php }?>
                                </select>
                            </td>
                        </tr>    
                    </table>

                    <!--Insert send button-->
                    <div class="send_button">
                        <input type="submit" value="Modifier offense" name="BtnEnvoyer"> 
                    </div>  
                </form>  

            </div>
        </div>
    </div>

<?php
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

        Update_contravention($no_fiche, $dossier, $plaque, $couleur, $marque, $code_agent, $adresse, $offense, $montant, $date);
        header("Location:listeoffense.php");
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
                        <li><a href="./Contravention/contravention.php">Contravention</a></li>
                        <li><a href="#">Modifier profil</a></li>
                        <li><a href="#">Ajouter</a></li>                   
                    </ul>
                </div>


                <div class="footer-col">
                    <h2>Aide</h2>
                    <ul>  
                        <li><a href="#">Questions et Reponses</a></li>
                        <li><a href="#">DGI</a></li>
                        <li><a href="#">Liste</a></li>
                        <li><a href="#">Qa</a></li>
                        <li><a href="A propos.html">Options de paiement</a></li>                   
                    </ul>
                </div>

                <div class="footer-col">
                    <h2>Contact</h2>
                    <div class="lienssociaux">
                        <a  target="_blank" href="https://www.facebook.com/pnh.ht/?locale=fr_FR"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/pnh_officiel?lang=en"><i class="fab fa-twitter"></i></a>
                        <a target="_blank"href="https://www.instagram.com/pnh_officiel/?hl=en"><i class="fab fa-instagram"></i></a>
                        <a target="_blank"href="https://ht.linkedin.com/in/sprp-pnh-b422aa125"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</div>

</body>
</html>