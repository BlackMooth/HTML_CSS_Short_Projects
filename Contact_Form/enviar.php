<?php
    $desti= "YOUR_MAIL@domain";
    $nom = $_Post["nom"];
    $correu = $_Post["correu"];
    $tel = $_Post["telefon"];
    $missatge = $_Post["missatge"];
    $contingut = "Nom: " . $nom . "\nCorreu: " . $correu . "\nTelèfon: " . $tel . "\n Missatge:" . $missatge;
    mail($desti, "Contacte", $contingut);
    header("Location:gracies.html");
?>
    