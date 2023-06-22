<?php
    include_once("./connections/use_connect.php");
    function Insert_agent ($codeAgent, $affectation, $nom, $prenom, $sexe)
    {
        $mysqli = use_mysqli();
        $sql = "INSERT INTO dcpr (Code_agent, Affectation, Nom, Prenom, Sexe)
                VALUES 
                ('$codeAgent', '$affectation', '$nom', '$prenom', '$sexe')";

        $mysqli -> query($sql);
    }
?>