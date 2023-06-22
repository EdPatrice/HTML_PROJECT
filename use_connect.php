<?php

    //declaration des constantes sous la forme [nom, valeur]
    define('server', 'localhost');
    define('username', 'root');
    define('password', '');
    define('database', 'dcpr');

    include_once('connect.php');

    function use_mysqli()
    {
        return connect_mysqli(server, username, password, database);
    }
?>