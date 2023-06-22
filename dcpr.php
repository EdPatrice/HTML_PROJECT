<?php

    //insert into DCPR
    function insert_DCPR ($code_agent, $affectation, $nom, $prenom, $sexe)
    {
        $mysqli = use_mysqli();
        $sql = "INSERT INTO dcpr (code_agent, affectation, nom, prenom, sexe)
                VALUES 
                ('$code_agent', '$affectation', '$nom', '$prenom', '$sexe')";

        $mysqli -> query($sql);
    }
    insert_DCPR ("1234", "DGI", "Jeanne", "Pierre", "Feminin");

    //select * from DCPR
    function select_DCPR()
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM dcpr";
        $result = $mysqli -> query($sql);

        //recuperer les donnees sous forme de tableau associatif
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //$tab = select_DCPR();
    //print_r($tab);

    //select DCPR with a particular code_agent
    function select_DCPR_code_agent($code_agent)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM dcpr WHERE code_agent = '$code_agent'";
        $result = $mysqli -> query($sql);

        //Recuperer les donnees dans un tableau associatif 
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //$tab = select_DCPR_code_agent("1234");
    //print_r($tab);

    //update DCPR
    function update_DCPR($code_agent, $affectation, $nom, $prenom, $sexe)
    {
        $mysqli = use_mysqli();
        $sql = "UPDATE `dcpr`
                SET 
                    `affectation` = '$affectation',
                    `nom` = '$nom',
                    `prenom` = '$prenom',
                    `sexe` = '$sexe'
                
                    WHERE `code_agent` = '$code_agent' ";
            
        $mysqli -> query($sql);
    }

?>