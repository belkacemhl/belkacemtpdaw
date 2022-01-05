<?php

try {
    //create connection
    $bdd = new PDO('mysql:host=localhost;dbname=equipenationale;charset=utf8','root','');
    //$bdd->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
}

catch(Exception $e) {
    // Check connection
    die('Error :' . $e->getMessage());
}
$unum = $_POST['num3'];
$open = fopen('Joueurs.txt','r');
$explodeLine = 'null';
while (!feof($open)) {
    $getLine = fgets($open);
    if (substr($getLine,0,2) == $unum) {
        $explodeLine = explode("|",$getLine);
        break;
    }
}

if ($explodeLine == 'null') {
    header("Location: ../404.html");
}
else {
    header("Location: ../success.html");
    list($num,$poste,$nom,$age,$selection,$buts,$club,$annee) = $explodeLine;
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
}
fclose($open);

//close connection
$bdd = null;

?>