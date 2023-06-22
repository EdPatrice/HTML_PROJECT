<?php
    include_once('./connections/use_connect.php'); //on descend d'un niveau depuis le fichier incluant, puis on remonte dans le dossier utilisateur

    //insert into utilisateurs 
    function Insert_utilisateur ($username, $codeAgent, $nom, $prenom, $sexe, $dateNaissance, $dateEnrollment, $departement, $numero, $adresse, $password)
    {
        $mysqli = use_mysqli();
        $sql = "INSERT INTO utilisateur (username, code_agent, nom, prenom, sexe, DateDeNaissance, DateEnrollement, Departement, Telephone, Adresse, MotDePasse)
                VALUES 
                ('$username', '$codeAgent', '$nom', '$prenom', '$sexe', '$dateNaissance', '$dateEnrollment', '$departement', '$numero', '$adresse', '$password')";

        $mysqli -> query($sql);
    }

    //Insert_utilisateur ("Alexis_509", "Alexis", "Jean", "M", "1999-12-12", "2020-12-12", "Informatique", "509-1234-5678", "Delmas 33", "123456789");

    //Select * from utilisateurs 
    function Select_users()
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM utilisateur";
        $result = $mysqli -> query($sql);

        //recuperer les donnees sous forme de tableau associatif
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }
    //print_r(Select_users());

    //Select user with a particular username
    function Select_user_username($username)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT * FROM utilisateur WHERE usename = '$username'";
        $result = $mysqli -> query($sql);

        //Recuperer les donnees dans un tableau associatif 
        $tab = $result -> fetch_all(MYSQLI_ASSOC);

        return $tab;
    }

    //update utlisateurs
    function Update_utilisateur($username, $nom, $prenom, $dateNaissance, $dateEnrollment, $departement, $numero, $password)
    {
        $mysqli = use_mysqli();
        $sql = "UPDATE utilisateur
                SET 
                (
                    nom = $nom,
                    prenom = $prenom,
                    DateDeNaissance = $dateNaissance,
                    DateEnrollement = $dateEnrollment,
                    Departement = $departement,
                    Telephone = $numero,
                    MotDePasse = $password
                )
                WHERE username = '$username' ";
        
        $mysqli -> query($sql);
    }

    
    function delete_user($username)
    {
        $mysqli = use_mysqli();
        $sql = "DELETE FROM utilisateur WHERE username = $username";
        $mysqli -> query($sql);
    }
//Verifier si password est egal a confirmation password
    function passVerfication($password1, $password2)
        {
            if ($password1 == $password2)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    //verifier si un utilisateur est deja inscrit
    function user_exists($username)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT username FROM utilisateur WHERE username = '$username'";
        $result = $mysqli -> query($sql);
        $nbr = mysqli_num_rows($result);

        if ($nbr > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //valider le l'utilisateur si le nom et le mot de passe fournis sont corrects 
    function validate_user_password($username, $password)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT COUNT(*) FROM utilisateur WHERE username = '$username'";
        $result = $mysqli -> query($sql);
        $nbr = $result -> fetch_row()[0];

        $sql = "SELECT MotDePasse FROM utilisateur WHERE username = '$username'";
        $result = $mysqli -> query($sql);
        $tab = mysqli_fetch_assoc($result);
        if ($tab['MotDePasse'] == $password)
        {
            $correct_pass = true;
        }
        else
        {
            $correct_pass = false;
        }

        if ($nbr > 0 && $correct_pass)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validate_agent($codeAgent)
    {
        $mysqli = use_mysqli();
        $sql = "SELECT COUNT(*) FROM dcpr WHERE Code_agent = '$codeAgent'";
        $result = $mysqli -> query($sql);
        $nbr = $result -> fetch_row()[0];

        if ($nbr > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>