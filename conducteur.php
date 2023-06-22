<?php


    include_once("../connections/use_connect.php");
    //insert into conducteurs
    function Insert_conducteur ($no_dossier, $nom, $prenom, $sexe, $nif)
    {
        $mysqli = use_mysqli();
        $sql = "INSERT INTO conducteur (no_dossier, nom, prenom, sexe, nif)
                VALUES 
                ('$no_dossier', '$nom', '$prenom', '$sexe', '$nif')";

        $mysqli -> query($sql);
    }
    //Insert_conducteur ("NF-1235", "Jeanne", "Pierre", "Feminin", "123456439");

    //select * from conducteurs
    function Select_conducteurs()
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM conducteur";
        $result = $mysqli -> query($sql);

        //recuperer les donnees sous forme de tableau associatif
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //$tab = select_conducteurs();
    //print_r($tab);

    //select conducteur with a particular no_dossier
    function Select_conducteur_no_dossier($no_dossier)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM conducteur WHERE no_dossier = '$no_dossier'";
        $result = $mysqli -> query($sql);

        //Recuperer les donnees dans un tableau associatif 
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //$tab = select_conducteur_no_dossier("NF-1234");
    //print_r($tab);

    //update conducteur
    function Update_conducteur($no_dossier, $nom, $prenom, $sexe, $nif)
    {
        $mysqli = use_mysqli();
        $sql = "UPDATE `conducteur`
                SET 
                
                    `Nom` = '$nom',
                    `Prenom` = '$prenom',
                    `Sexe` = '$sexe',
                    `NIF` = '$nif'
                
                    WHERE `No_Dossier` = '$no_dossier' ";
        
        $mysqli -> query($sql);
    }
    //Update_conducteur("NF-1235", "Marie", "Tarah", "Feminin", "987000321");

    //delete conducteur
    function Delete_conducteur($no_dossier)
    {
        $mysqli = use_mysqli();
        $sql = "DELETE FROM conducteur WHERE no_dossier = '$no_dossier' ";
        $mysqli -> query($sql);
    }
    //Delete_conducteur('NF-1235');


?>