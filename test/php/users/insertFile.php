<?php

require_once "../connection.php";

$connection = conection();

$name = $_POST['name'];


$stmt =$connection->prepare("insert into images(name) values(?) ");

$stmt->bind_param("s",$name);



if($stmt->execute()){

    echo 1;

}

else{
    echo 2;
}



?>
