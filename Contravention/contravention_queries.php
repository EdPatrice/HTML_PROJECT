<?php

    //include_once("../connections/use_connect.php");
    include_once(dirname(__DIR__).'\connections\use_connect.php');

    //insert into contraventions
    function Insert_contravention ($no_dossier, $plaque_vehicule, $couleur, $marque, $code_agent, $adresse, $article_violation, $montant_a_payer, $date_contravention)
    {
        $mysqli = use_mysqli();
        $sql = "INSERT INTO `contravention`
                (`No_Dossier`, `Plaque_vehicule`, `Couleur`, `Marque`, `Code_agent`, `Adresse`, `Article_violation`, `Montant_a_payer`, `Date_contravention`) 
                VALUES ('$no_dossier','$plaque_vehicule','$couleur','$marque','$code_agent','$adresse','$article_violation','$montant_a_payer','$date_contravention')
                ";

        $mysqli -> query($sql);
    }
    //Insert_contravention('MT-1234', 'AA-12090', 'Noir', 'Toyota', 'DGI-12230', 'Delmas 33', 'Article 1', '1000', '2020-12-12');

    //select * from contraventions
    function Select_contraventions()
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM contravention";
        $result = $mysqli -> query($sql);

        //recuperer les donnees sous forme de tableau associatif
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //$tab = Select_contraventions();
    //print_r($tab);

    //select contravention with a particular no_fiche
    function Select_contravention_no_fiche($no_fiche)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM contravention WHERE No_Fiche = '$no_fiche'";
        $result = $mysqli -> query($sql);

        //Recuperer les donnees dans un tableau associatif 
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //$tab = Select_contravention_no_fiche('1');
    //print_r($tab);

    //select contravention with a particular no_dossier
    function Select_contravention_no_dossier($no_dossier)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM contravention WHERE No_Dossier = '$no_dossier'";
        $result = $mysqli -> query($sql);

        //Recuperer les donnees dans un tableau associatif 
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //$tab = Select_contravention_no_dossier('NF-1234');
    //print_r($tab);

    //update contravention
    function Update_contravention($no_fiche, $no_dossier, $plaque_vehicule, $couleur, $marque, $code_agent, $adresse, $article_violation, $montant_a_payer, $date_contravention)
    {
        $mysqli = use_mysqli();
        $sql = "UPDATE `contravention` 
        SET 
        `No_Dossier`='$no_dossier',
        `Plaque_vehicule`='$plaque_vehicule',
        `Couleur`='$couleur',
        `Marque`='$marque',
        `Code_agent`='$code_agent',
        `Adresse`='$adresse',
        `Article_violation`='$article_violation',
        `Montant_a_payer`='$montant_a_payer',
        `Date_contravention`='$date_contravention' WHERE `No_Fiche`= '$no_fiche'";
        
        $mysqli -> query($sql);
    }

    //display warning message
    function display_warning($no_dossier)
    {
        //select count(*) from contravention where no_dossier = '$no_dossier'
        $mysqli = use_mysqli();
        $sql = "SELECT count(*) FROM contravention WHERE No_Dossier = '$no_dossier'";
        $result = $mysqli -> query($sql);
        if ($result % 3 == 0)
        {
            echo "<script type='text/javascript'>alert('Veuillez confisquer le permis de cet utilisateur');</script>";
        }
    }  

    
?>