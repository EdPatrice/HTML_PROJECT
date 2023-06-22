<?php
    include_once('../Page_gestion.php');

    include_once("conducteur.php");
    if(isset($_POST['BtnEnvoyer']))
    {
        $dossier = $_POST['TxtNoDossier'];
        $nom = $_POST['TxtNom'];
        $prenom = $_POST['TxtPrenom'];
        $sexe = $_POST['RdSexe'];
        $nif = $_POST['TxtNIF'];

        Insert_conducteur ($dossier, $nom, $prenom, $sexe, $nif);
        //header("Location: ../listeoffense.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Contravention/contravention.css">
    <link rel="stylesheet" type="text/css" href="../replicanav_acceuil.css">
    <link rel="stylesheet" type="text/css" href="../Page_gestion.css">
    <title>Enregistrer conducteur</title>
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
                Enregistrer un conducteur
            </div>

           <div class="contenu">
              <form action="" method="post">

              <table>
                        <tr id="askdossier"> 
                            <td class="conducteur">
                                    <input type="text" name ="TxtNoDossier" placeholder="No Dossier" required>
                            </td>
                            <td class="conducteur">       <!--utilisateur-->                                  
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

                        <tr>                                    
                            <td class="conducteur_agent1">
                                <input type="text" name ="TxtNIF" placeholder="NIF" required>
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