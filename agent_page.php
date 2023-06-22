<?php
    include_once('Page_gestion.php');

    include_once("agent.php");
    if(isset($_POST['BtnEnvoyer']))
    {
        $codeAgent = $_POST['TxtCodeAgent'];
        $affectation = $_POST['TxtAffectation'];
        $nom = $_POST['TxtNom'];
        $prenom = $_POST['TxtPrenom'];
        $sexe = $_POST['RdSexe'];

        Insert_agent ($codeAgent, $affectation, $nom, $prenom, $sexe);
        //header("Location: ../listeoffense.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contravention.css">
    <link rel="stylesheet" type="text/css" href="replicanav_acceuil.css">
    <link rel="stylesheet" type="text/css" href="Page_gestion.css">
    <title>Enregistrer un agent</title>
    <style>
        #gender1
        {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-left: 6em;
        }
        #gender2
        {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-right: 6em;
        }
    </style>
</head>
<body>
    
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
                Enregistrer un agent
            </div>

           <div class="contenu">
              <form action="" method="post">

              <table>
                        <tr id="conducteur_agent1"> 
                            <td class="conducteur">
                                    <input type="text" name ="TxtCodeAgent" placeholder="Code agent" required>
                            </td>
                            <td class="conducteur">       <!--utilisateur-->                                  
                                <input type="text" name ="TxtAffectation" placeholder="Affectation"  required>
                            </td>
                        </tr>

                        <tr class= "conducteur_agent1">
                            <td class="conducteur">
                                <input type="text" name ="TxtNom" placeholder="Nom"  required>
                            </td>
                            <td class="conducteur">
                                <input type="text" name ="TxtPrenom" placeholder="Prenom"  required>
                            </td>
                        </tr>

                        <tr class ="gender">
                            <td id="gender1">
                                <input type="radio" name="RdSexe" id="" value="Masculin">Masculin                                
                            </td>
                            <td id = "gender2">
                                <input type="radio" name="RdSexe" id="" value="Feminin">Feminin                                
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

</body>
</html>