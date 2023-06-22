<?php
    function connect_mysqli($hostname, $user, $pwd, $dbname)
    {
        $con = new mysqli($hostname, $user, $pwd, $dbname);

        //On test si la connection est reussie
        if($con)
            return $con;
    }


    if(connect_mysqli("localhost", "root", "", "dcpr_db"))
    {
        echo "GOOD";
    }

?>