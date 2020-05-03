<?php

require_once "../connection.php";

$connection = conection();

$username = $_POST['username'];
$password = $_POST['password'];

$stmt =$connection->prepare("select id_user from users where user_name=? and password=?");

$stmt->bind_param("ss",$username,$password);

$stmt->execute();

if($result=$stmt->fetch()){
    session_start();

   $_SESSION['id_user']=$result;

    echo 1;


}

else{
    echo 2;
}


?>
