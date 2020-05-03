<?php

function getUser($id_user,$connection){

    $stmt =$connection->prepare("select id_user from users where user_name=? and password=?");

    $stmt->bind_param("ss",$username,$password);

    $stmt->execute();




}





?>

