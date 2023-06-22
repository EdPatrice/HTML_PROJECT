<!DOCTYPE html>
<html lang="en">
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <script src="https://kit.fontawesome.com/1c7652ffa7.js" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="page_gestion.css">
    <link rel="stylesheet" href="replicanav_acceuil.css">
    
    <title>Barre de Navigation</title>
</head>
<body>
        
       <!--.....................................................................................................................................-->

       <div class="header">
        <div class="center_element">

           <div class="police_logo">
               <img src="./images/Logo PNH.jpg" alt="police logo">
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
            <a href="./Acceuil.html">Acceuil</a>
            <a href="#">Contraventions</a>
            <a href="#">Contacts</a>
            <a href='./Log out.php" id="logout"'>Se deconnecter</a>

        </div>
    </div>
    <br>
  




        <!--...................................................................................................................................-->
        <div class="conteneur">
             <div class="barrelaterale">
                   <h2>Barre laterale</h2>
                   <ul>
                     <li><a href="../contravention.php"><ion-icon name="eye-outline"></ion-icon></i> Reporter une offense</a></li> <!--eye icons-->
                     <!--php script to know which type of user is logged in-->
                     <?php

                        if (isset($_SESSION['codeAgent']))  //if the user is logged in
                        {
                            //if the user who is logged in contains the string "DCPR" or "DGI" or "ADMIN" in the agent number then they can see this
                            if (strpos($_SESSION['codeAgent'], "DCPR") !== false || strpos($_SESSION['codeAgent'], "DGI") !== false || strpos($_SESSION['codeAgent'], "ADMIN") !== false)
                            {
                                echo "<li><a href='#'><ion-icon name='clipboard-outline'></ion-icon></i> Lister offense</a></li>"; //<!-- the clipboard list icons-->
                                echo "<li><a href='#'><ion-icon name='person-outline'></ion-icon></i> Ajouter un utilisateur</a></li>";  //<!-- the user icons-->
                                echo "<li><a href='#'><ion-icon name='newspaper-outline'></ion-icon></i> Lister utilisateur</a></li>";  //<!-- the scroll looking icons-->
                            }
                        }
                     ?>
                     <li><a href="#"><ion-icon name="person-outline"></ion-icon></i> Modifier profil</a></li>  <!-- user icons-->
                   </ul>
             </div>
             
             
             <!--
             <div class="contenu_principal">
                
                <div class="entete">Bienvenue a la DCPR</div>
                
                <div class="info">
                    <div> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, ratione. Fugiat maxime aspernatur amet, error ea nulla illo fugit placeat sunt sit saepe tenetur quisquam temporibus dicta explicabo vero obcaecati dolores voluptatibus voluptates? Illo veritatis ea molestias! Minima quibusdam saepe molestiae, neque ratione, vel modi inventore quia quisquam nemo eveniet. Perferendis atque accusamus doloribus dolor aliquam corrupti recusandae velit, quia et! Velit, possimus. Illo aliquid, recusandae quas ab ipsam earum sapiente corrupti impedit nemo numquam maiores quos, alias nisi quaerat.</div>
                    
                    <div> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, ratione. Fugiat maxime aspernatur amet, error ea nulla illo fugit placeat sunt sit saepe tenetur quisquam temporibus dicta explicabo vero obcaecati dolores voluptatibus voluptates? Illo veritatis ea molestias! Minima quibusdam saepe molestiae, neque ratione, vel modi inventore quia quisquam nemo eveniet. Perferendis atque accusamus doloribus dolor aliquam corrupti recusandae velit, quia et! Velit, possimus. Illo aliquid, recusandae quas ab ipsam earum sapiente corrupti impedit nemo numquam maiores quos, alias nisi quaerat.</div>
                    
                    
                    <div> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, ratione. Fugiat maxime aspernatur amet, error ea nulla illo fugit placeat sunt sit saepe tenetur quisquam temporibus dicta explicabo vero obcaecati dolores voluptatibus voluptates? Illo veritatis ea molestias! Minima quibusdam saepe molestiae, neque ratione, vel modi inventore quia quisquam nemo eveniet. Perferendis atque accusamus doloribus dolor aliquam corrupti recusandae velit, quia et! Velit, possimus. Illo aliquid, recusandae quas ab ipsam earum sapiente corrupti impedit nemo numquam maiores quos, alias nisi quaerat.</div>
                    
                    <div> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, ratione. Fugiat maxime aspernatur amet, error ea nulla illo fugit placeat sunt sit saepe tenetur quisquam temporibus dicta explicabo vero obcaecati dolores voluptatibus voluptates? Illo veritatis ea molestias! Minima quibusdam saepe molestiae, neque ratione, vel modi inventore quia quisquam nemo eveniet. Perferendis atque accusamus doloribus dolor aliquam corrupti recusandae velit, quia et! Velit, possimus. Illo aliquid, recusandae quas ab ipsam earum sapiente corrupti impedit nemo numquam maiores quos, alias nisi quaerat.</div>
                    
                    
                </div>
                -->
            </div>
        -->
        </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
       
</body>
</html>