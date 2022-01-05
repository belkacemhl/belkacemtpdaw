<?php


try {
    //create connection
    $bdd = new PDO('mysql:host=localhost;dbname=equipenationale;charset=utf8','root','');
}

catch(Exception $e) {
    // Check connection
    die('Error :' . $e->getMessage());
}


//get joueurs table content
$rep = $bdd->query("SELECT * FROM joueurs");

//display the content
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

//close connection
$rep->closeCursor();
$bdd = null;

?>