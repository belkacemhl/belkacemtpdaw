<?php

header("Location: ../index.html");
try {
    //create connection
    $bdd = new PDO('mysql:host=localhost;dbname=equipenationale;charset=utf8','root','');
}

catch(Exception $e) {
    // Check connection
    die('Error :' . $e->getMessage());
}

//get values
$num = $_POST['num2'];

//delete player from db
$req = $bdd->prepare("DELETE FROM joueurs WHERE Num = :num");
$req->execute(array(
    'num' => $num
)
); 

//close connection
$bdd = null;

?>