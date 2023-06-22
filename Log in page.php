<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="Log in page.css">
    <link rel="stylesheet" type="text/css" href="./footer/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.font-awesome.com/a076d05399,js"></script>
</head>
<body>
<!---------------------------------------------------------------------------------------------------->
<?php
        include_once(__DIR__.'\utilisateur\utilisateur.php');
        session_start();

        //include_once('utilisateur/utillisateur.php');
        if (isset($_POST['send'])) 
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (validate_user_password($username, $password))
            {
                //on recupere le code de l'agent pour savoir quelle interface lui afficher
                $mysqli = use_mysqli();
                $sql = "SELECT code_agent FROM utilisateur WHERE username = '$username'";
                $result = $mysqli->query($sql);
                $row = mysqli_fetch_assoc($result);

                $_SESSION['codeAgent'] = $row['code_agent'];
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;

                //Redirect to home page
                header('location: ./Accueil.html');
                exit();
            }
            else 
            {
                echo "<script>alert('Nom d'utilisateur ou mot de passe incorrect')</script>";            
            }
            
        }
        
        ?>
<!---------------------------------------------------------------------------------------------------->
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
            
            <ul>
                <li>Acceuil</li>
                <li>Contraventions</li>
                <li>Contacts</li>
            </ul>
            
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="center_element">
        <div class="options2">
            <a href="sign up.php">Creer un compte</a>
        </div>
        
        <div class="body1">
            <div class="first_row">
                <!--
                    
                    <div class="haitian_flag">
                        <img src="images/haitian flag.png" alt="haitian flag">
                    </div>
                
                    <div class="title2"> 
                        Police 
                </div>
                
                <div class="police_picture">
                    <img src="images/police3.jpg" alt="haitian police">
                </div>
            -->
                
            </div>
        
            <div class="second_row">
                
                <div class = "login">
                    <div class="login_header">
                        Se connecter pour continuer
                    </div>

                    <div class="fields">
                        <form action="#" method="post">
                            <div class="utilisateur">
                                <input type="text" name ="username" placeholder="Entrez votre nom d'utilisateur" required>
                            </div>
    
                            <div class="utilisateur">
                                <input type="password" name ="password" placeholder="Entrez votre mot de passe" required>
                            </div>
                            
                            <!--Insert send button-->
                            <div class="send_button">
                                <button type="submit" name="send"> Connecter </button>
                            </div>
                            
                            <!--New div with a link-->
                            <div class="create_account_link">
                                <a href="#"> Vous ne pouvez pas vous connecter? </a>
                                
                                <a href="#">Creer un compte </a>
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
</body>
</html>