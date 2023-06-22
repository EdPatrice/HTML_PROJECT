<?php
    include_once("./connections/use_connect.php");

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

    //select * from DGI
    function select_DGI()
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM dgi";
        $result = $mysqli -> query($sql);

        //recuperer les donnees sous forme de tableau associatif
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //select_DGI();

    //select DGI with a particular no_fiche
    function select_DGI_no_fiche($no_fiche)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM dgi WHERE no_fiche = '$no_fiche'";
        $result = $mysqli -> query($sql);

        //Recuperer les donnees dans un tableau associatif 
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }

    //update DGI
    function update_DGI($no_fiche, $montant, $remarque, $date_paiement)
    {
        $mysqli = use_mysqli();
        $sql = "UPDATE dgi
                SET montant = '$montant'
                    remarque = '$remarque', 
                    date_paiement = '$date_paiement'
                WHERE no_fiche = '$no_fiche'";

        $mysqli -> query($sql);
    }
    //update_DGI('1', '1000', 'Non paye', '2020-12-12');

    //delete DGI
    function delete_DGI($no_fiche)
    {
        $mysqli = use_mysqli();
        $sql = "DELETE FROM dgi WHERE no_fiche = '$no_fiche'";
        $mysqli -> query($sql);
    }
    //delete_DGI('1');

?>