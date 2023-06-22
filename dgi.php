<?php
    include_once("./connections/use_connect.php");

    //insert into DGI
    function Insert_DGI ($no_fiche, $montant, $remarque, $date_paiement)
    {
        $mysqli = use_mysqli();
        $sql = "INSERT INTO dgi (no_fiche, montant, remarque, date_paiement)
                VALUES 
                ('$no_fiche', '$montant', '$remarque', '$date_paiement')";

        $mysqli -> query($sql);
    }
    
    function Update_DGI ($no_fiche, $montant, $remarque, $date_paiement)
    {
        $mysqli = use_mysqli();
        $sql = "UPDATE dgi SET montant = '$montant', remarque = '$remarque', date_paiement = '$date_paiement' WHERE no_fiche = '$no_fiche'";

        $mysqli -> query($sql);
    }
?>