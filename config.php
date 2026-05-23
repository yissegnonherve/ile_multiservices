<?php
// Vos identifiants de connexion InfinityFree visibles sur votre photo
$host     = "sql306.infinityfree.com"; 
$port     = "3306"; 
$dbname   = "if0_41986212_ile_multiservices"; 
$username = "if0_41986212"; 
$password = "nWdLBOTvfRn"; // Cliquez sur le petit œil sur votre photo pour le copier

try {
    // Connexion sécurisée avec PDO
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
