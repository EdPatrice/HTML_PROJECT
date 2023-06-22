<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="sign up.css">
    <link rel="stylesheet" type="text/css" href="./footer/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.font-awesome.com/a076d05399,js"></script>
</head>
<body>

    <div class="header">
        <div class="center_element">

           <div class="police_logo">
               <img src="images/Logo PNH.jpg" alt="police logo">
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
                <img src="images/Armoirie1.jpg" alt="armoirie">
            </div>
        </div>
    </div>
    
    
    <div class="options1">
        <div class="center_element">
            <!--
                <ul>
                    <li>Acceuil</li>
                    <li>Contraventions</li>
                    <li>Contacts</li>
                </ul>
            -->

            <a href="acceuil.html">Acceuil</a>
            <a href="#">Contraventions</a>
            <a href="#">Contacts</a>
            
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="center_element">
        <div class="options2">
            <a href="Log in page.php">Se connecter</a>
        </div>
        
        <div class="body1">
        <!--
            <div class="first_row">

                    <div class="haitian_flag">
                        <img src="images/haitian flag.png" alt="haitian flag">
                </div>
                
                <div class="title2"> 
                    Police 
                </div>
                
                <div class="police_picture">
                    <img src="images/police3.jpg" alt="haitian police">
                </div>
                
            </div>
        -->
        
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
                            
                            <!--New div with a link-->
                            <div class="create_account_link">
                                <a href="#"> Vous possedez deja un compte? </a>
                                
                                <a href="#">Se connecter </a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

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

    <!--Script to send the information to the database-->
    <?php
        include_once(__DIR__.'\utilisateur\utilisateur.php'); // on remonte dans le dossier utilisateur depuis le fichier incluant

        
        
        /*
        */
        if (isset($_POST['BtnEnvoyer']))
        {
            $codeAgent = $_POST['TxtCodeAgent'];
            $username = $_POST['TxtUsername'];
            $nom = $_POST['TxtNom'];
            $prenom = $_POST['TxtPrenom'];
            $sexe = $_POST['RdSexe'];
            $dateNaissance = $_POST['DtNaissance'];
            $dateEnrollement = $_POST['DtEnrollement'];
            $departement = $_POST['Txtdepartement'];
            $numero = $_POST['Txtnumero'];
            $adresse = $_POST['Txtadresse'];
            $password1 = $_POST['Txtpassword1'];
            $password2 = $_POST['Txtpassword2'];

            if (passVerfication($password1, $password2))
            {
                $password = $password1;
            }
            else 
            {
                echo "<script>alert('Les mots de passe ne correspondent pas')</script>";
                //exit();
            }

            //Verifier si cet utilisateur n'est pas deja inscrit
            if (user_exists($username))
            {
                //echo "<label for='TxtUsername'>Cet utilisateur existe deja</label>";
                echo "<script>alert('Cet utilisateur existe deja')</script>";
                //exit();
            }
            else 
            {
                //verifier si le nom d'utilisateur et le mot de passe sont valides
                if (validate_agent($codeAgent))
                {
                    Insert_utilisateur($username, $codeAgent, $nom, $prenom, $sexe, $dateNaissance, $dateEnrollement, $departement, $numero, $adresse, $password);
                    //exit();
                }
                else 
                {
                    echo "<script>alert('Cet agent n'existe pas')</script>";
                    //echo "<label for='TxtCodeAgent'>Cet agent n'existe pas</label>";
                    //exit();
                }
            }
        }
    ?>

</body>
</html>