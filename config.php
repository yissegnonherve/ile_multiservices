<?php
// Vos identifiants réels InfinityFree
$host     = "sql306.infinityfree.com"; 
$port     = "3306"; 
$dbname   = "if0_41986212_ile_multiservices"; 
$username = "if0_41986212"; 
$password = "nWdLBOTvfRn"; // Enlevez ceci et mettez votre mot de passe secret à la place

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
