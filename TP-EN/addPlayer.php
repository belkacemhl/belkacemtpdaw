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
$num = $_POST['num'];
$poste = $_POST['poste'];
$nom = $_POST['nom'];
$age = $_POST['age'];
$selection = $_POST['selection'];
$buts = $_POST['buts'];
$club = $_POST['club'];
$annee = $_POST['annee'];

//insert values into db
$req = $bdd->prepare("INSERT INTO joueurs(Num, Poste, Nom, Age, Selection, Buts, Club, Annee) VALUES(:Num, :Poste, :Nom, :Age, :Selection, :Buts, :Club, :Annee)");
$req->execute(array(
    'Num' => $num,
    'Poste' => $poste,
    'Nom' => $nom,
    'Age' => $age,
    'Selection' => $selection,
    'Buts' => $buts,
    'Club' => $club,
    'Annee' => $annee
)
); 
//close connection
$bdd = null;

?>