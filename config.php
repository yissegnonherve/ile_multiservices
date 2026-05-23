<?php
// Vos nouveaux identifiants en ligne (ex: Aiven, Railway, ou autre)
$host     = "votre_hote_de_base_de_donnees.com"; 
$port     = "3306"; // Le port fourni par votre hébergeur de BDD
$dbname   = "votre_nom_de_base_de_donnees";
$username = "votre_utilisateur";
$password = "votre_mot_de_passe";

try {
    // Connexion sécurisée avec PDO
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Si vous arrivez ici, c'est que la connexion fonctionne !
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
