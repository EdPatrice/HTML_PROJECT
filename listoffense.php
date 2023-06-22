<?php
    session_start();
     include("Page_gestion.php");
     include_once('contravention_queries.php');

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
    <link rel="stylesheet" type="text/css" href="listoffense.css">
</head>
<body>
    
  <div class="boxer"> 
          <div class="titreofense">
                <h1  style="color:white">Liste Offense</h1><br>

          </div>
    <br><br>

    <div class="recherchelabel">
      
      <label for="filter">Recherche</label>

    </div>

    <br>
<!--filtrage avec no dossier, code agent -->
  <div class="boitefiltrer">
    <input type="text" name="filter" value="" id="No_Dossier" placeholder="Recherche avec No_Dossier" onkeyup="myFunction()"/>
    <br>
    <input type="text" name="filter" value="" id="Code_agent" placeholder="Recherche avec Code Agent" onkeyup="myFunction2()"/>
    <br>
    <input type="text" name="filter" value="" id="Date" placeholder="Recherche avec Date" onkeyup="myFunction3()"/>
  </div>
  <br><br>
    <!-- filtrage selon  date  et date selon no dossier 
  <div class="case"> 
    
    <input type="text" name="filter" value="" id="Nodo_date" placeholder="Recherche avec No dossier" />
    <input type="text" name="filter" value="" id="Dateoffense" placeholder="Recherche avec Date" />
    <button onclick="myFunction4()">Filtrer par date et dossier</button>
    
  </div>
-->


    <script>
         function myFunction(){
           var input,filter, table, tr, td, i;
           input = document.getElementById("No_Dossier");
           filter= input.value.toUpperCase();
           table = document.getElementById("myTable");
           tr=table.getElementsByTagName("tr");
         

         for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    
    function myFunction2(){
           var input,filter, table, tr, td, i;
           input = document.getElementById("Code_agent");
           filter= input.value.toUpperCase();
           table = document.getElementById("myTable");
           tr=table.getElementsByTagName("tr");
         

         for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[4];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

    function myFunction3(){
           var input,filter, table, tr, td, i;
           input = document.getElementById("Date");
           filter= input.value.toUpperCase();
           table = document.getElementById("myTable");
           tr=table.getElementsByTagName("tr");
         

         for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[8];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

    function myFunction4() {
           var inputdate, inputdossier, filter1, filter2, table, tr, tdate, tdossier, i;
           inputdate = document.getElementById("Dateoffense");
           inputdossier = document.getElementById("Nodo_date");
           filter1= inputdossier.value.toUpperCase();
           filter2= inputdossier.value.toUpperCase();

           table = document.getElementById("myTable");
           tr=table.getElementsByTagName("tr");
         

         for (i = 0; i < tr.length; i++) {
          tdate = tr[i].getElementsByTagName("td")[8];
          tdossier = tr[i].getElementsByTagName("td")[0];

          if (tdate && tdossier) {
              if ( (tdate.innerHTML.toUpperCase().indexOf(filter1) > -1)  && (tdossier.innerHTML.toUpperCase().indexOf(filter2) > -1)) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }

    }

  }
}
    </script>

    <table  id= "myTable">
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
          <th><a href="contravention.php">Nouveau</a></th>
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
                      <a href="modifier.php?No_Fiche=<?php echo($r['No_Fiche']); ?>">Modifier</a>
                    </td>
                  </tr>
                  
                  <?php }?>
                </tr>
              </table>
            </div>
          </body>
</html>