<?php
// session_start();

// $naam = "Maroune";
// $email = "marounehomo@hotmail.com";

// $_SESSION['naam'] = $naam;
// $_SESSION['email'] = $email;

// header("Location: variabele.php");
// exit;

// Opdracht 2
session_start();

$host = 'localhost:3307';
$db   = 'Winkel1';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $query = $pdo->query("SELECT * FROM producten");
    $resultaten = $query->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultaten) > 0) {
        $ids = array_column($resultaten, 'product_code');
        $_SESSION['product_code'] = $ids;
            header("Location: variabele.php");
            exit;
        }
     else {
        echo "Geen gegevens gevonden in de tabel.";
    }
} catch (\PDOException $e) {
    echo "geen verbinding  " . $e->getMessage();
}
?>

