<?php
     include("Page_gestion.php");
     include_once(__DIR__.'\Contravention\contravention_queries.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="listoffense.css">
</head>
<body>
    
  <div class="boxer"> 

    <h1>Liste Offense</h1>
    <p>Liste de toutes les offences</p>
    <br><br>
    <table>
        <tr>
          <th>No Dossier</th>
          <th>Plaque vehicule</th>
          <th>Couleur</th>
          <th>Marque</th>
          <th>Code_agent</th>
          <th>Adresse</th>
          <th>Article violation</th>
          <th>Montant a payer</th>
          <th> Date de contravention</th>
          <th><a href="./Contravention/contravention.php">Nouveau</a></th>
          <?php 
               $tab= Select_contraventions();
               
               foreach($tab as $r){
                 ?>
                  <tr>
                    <td> <?php echo ($r['No_Dossier']); ?></td>
                    <td> <?php echo ($r['Plaque_vehicule']); ?></td>
                    <td> <?php echo ($r['Couleur']); ?></td>
                    <td> <?php echo ($r['Marque']); ?></td>
                    <td> <?php echo ($r['Code_agent']); ?></td>
                    <td> <?php echo ($r['Adresse']); ?></td>
                    <td> <?php echo ($r['Article_violation']); ?></td>
                    <td> <?php echo ($r['Montant_a_payer']); ?></td>
                    <td> <?php echo ($r['Date_contravention']); ?></td>
                    <td>
                      <a href="modifier.php?No_Fiche=<?php echo($r['No_Fiche']); ?>">Modifier</a> |
                      <a href="">Supprimer</a>
                    </td>
                  </tr>
                  
                  <?php }?>
                </tr>
              </table>
            </div>
          </body>
</html>