<?php


function conection()
{
    $server = "localhost";
    $user = "root";
    $db = "test";
    $password = "mysql";

    $connection = mysqli_connect($server, $user, $password, $db);

    return $connection;

}


?>