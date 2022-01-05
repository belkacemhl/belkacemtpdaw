<?php

try {
    //create connection
    $bdd = new PDO('mysql:host=localhost;dbname=equipenationale;charset=utf8','root','');
}

catch(Exception $e) {
    // Check connection
    die('Error :' . $e->getMessage());
}

//get values
$list = $_POST['list'];
$word = $_POST['word'];

//get joueurs table content
$rep = $bdd->query("SELECT * FROM joueurs WHERE $list LIKE '%$word%'");

//display the content
if($rep->rowCount() > 0) {
    while ($cont = $rep->fetch()) {
        ?>
        <p>
            <strong>------------</strong> <br>
            - Num : <?php echo $cont['Num']; ?> <br>
            - Poste : <?php echo $cont['Poste']; ?> <br>
            - Nom : <?php echo $cont['Nom']; ?> <br>
            - Age : <?php echo $cont['Age']; ?> <br>
            - Selection : <?php echo $cont['Selection']; ?> <br>
            - Buts : <?php echo $cont['Buts']; ?> <br>
            - Club : <?php echo $cont['Club']; ?> <br>
            - Annee : <?php echo $cont['Annee']; ?> <br>
            <strong>------------</strong> <br><br><br>
        </p>
        <?php
    }
}
else {
    
    header("Location: ../404.html");
}


//close connection
$rep->closeCursor();
$bdd = null;

?>