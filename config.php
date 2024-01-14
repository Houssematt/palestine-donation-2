<?php

class config
{
    function getConnexion()
    {
        $dsn = "mysql:host=localhost;dbname=association_dons";
        $user = "root";
        $pw = "";
        $cnx = new PDO($dsn, $user, $pw);// establishing a new connection to the database using the PDO class
        return $cnx;//tzraja3li variable $cnx 
    }
}
?>
