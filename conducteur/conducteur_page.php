<?php
    include_once('../Page_gestion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer conducteur</title>
</head>
<body>
    
<div class="second_row">
                
                <div class = "login">
                    <div class="login_header">
                        Creer un nouveau compte
                    </div>

                    <div class="fields">
                        <form action="" method="post">

                            <table>
                                <tr id="askName">
                                    <td>
                                        <label for="nom">Inserez votre nom complet</label>

                                    </td>
                                    <td class="utilisateur">                                        
                                        <input type="text" name ="TxtNom" placeholder="Nom" required>
                                    </td>
                                    <td class="utilisateur">
                                        <input type="text" name ="TxtPrenom" placeholder="Prenom" required>
                                    </td>
                                </tr>
                                <tr>                                    
                                    <td class="utilisateur">
                                        <input type="text" name ="TxtUsername" placeholder="Entrez votre nom d'utilisateur" required>
                                    </td>
                                    <td class="utilisateur">
                                        <label for="TxtCodeAgent">No de badge</label>
                                        <input type="text" name ="TxtCodeAgent" placeholder="Entrez votre no de badge" required>
                                    </td>
                                </tr>
                                
                                <tr class="gender1">
                                    <td class="gender">
                                        <input type="radio" name="RdSexe" id="" value="Masculin">Masculin
                                        
                                        <input type="radio" name="RdSexe" id="" value="Feminin">Feminin
                                        
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="utilisateur">
                                        <!--Date input-->
                                        <label for="DtNaissance">Date de naissance</label>
                                        <input type="date" name="DtNaissance">
                                    </td>
                                    <td class="utilisateur">
                                        <!--Date input-->
                                        <label for="DtdEnrollement">Date d'enrollement</label>
                                        <input type="date" name="DtEnrollement">
                                    </td>
                                </tr>                                              
                                
                                <tr>
                                    <td class="utilisateur">
                                        <input type="text" name ="Txtdepartement" placeholder="Entrez votre departement">
                                    </td>
                                    <td class="utilisateur">
                                        <input type="text" name ="Txtnumero" placeholder="Entrez votre numero de telephone">
                                    </td>
                                </tr>                               

                                <tr>
                                    <td class="utilisateur_long">
                                        <input type="text" name ="Txtadresse" placeholder="Entrez votre adresse">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="utilisateur_long">
                                        <input type="password" name ="Txtpassword1" placeholder="Entrez votre mot de passe" required>
                                    </td>
                                </tr>   

                                <tr>
                                    <td class="utilisateur_long">
                                        <input type="password" name ="Txtpassword2" placeholder="Confirmez votre mot de passe" required>
                                    </td>
                                </tr>
                        </table>

    
                            
                            
                        <!--Insert send button-->
                            <div class="send_button">
                                <input type="submit" value="Envoyer" name="BtnEnvoyer"> 
                            </div>
                </div>
</div>

</body>
</html>