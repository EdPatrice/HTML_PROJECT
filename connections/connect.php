<?php

    function connect_mysqli($hostname, $username, $password, $database) 
    {
        $mysqli = new mysqli($hostname, $username, $password, $database);
        if ($mysqli->connect_errno) 
        {
            echo "Failed to connect to MySQL: "; //. $mysqli->connect_error;
            exit();
        }
        if ($mysqli)
        {
            return $mysqli;
            //echo "Connected successfully";
        }
    }

    //connect_mysqli("localhost", "root", "", "dcpr");
?>