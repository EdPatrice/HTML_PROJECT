<?php
    include_once("../connections/use_connect.php");

    //insert into DGI
    function insert_DGI ($no_fiche, $montant, $remarque, $date_paiement)
    {
        $mysqli = use_mysqli();
        $sql = "INSERT INTO dgi (no_fiche, montant, remarque, date_paiement)
                VALUES 
                ('$no_fiche', '$montant', '$remarque', '$date_paiement')";

        $mysqli -> query($sql);
    }
    //insert_DGI('1', '1000', 'Paye', '2020-12-12');

?>