<?php
// session_start();


// if (isset($_SESSION['naam']) && isset($_SESSION['email'])) {

//     $naam = $_SESSION['naam'];
//     $email = $_SESSION['email'];

//     echo "Naam: " . $naam . "<br>";
//     echo "Email: " . $email;
// } else {
//     echo "Sessievariabelen niet gevonden.";
// }
session_start();

    if (isset($_SESSION['product_code'])) {
        $ids = $_SESSION['product_code'];

        echo "Geselecteerde ID's:<br>";
        foreach ($ids as $id) {
            echo $id . "<br>";
        }
    } else {
        echo "Sessievariabele 'ids' niet gevonden.";
    }
?>
