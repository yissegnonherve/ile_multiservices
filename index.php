<?php
// On inclut le fichier de connexion
require_once 'config.php';

try {
    // On récupère toutes les activités de la base de données (sans accent)
    $requete = $pdo->query("SELECT * FROM activites");
    $activites = $requete->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la récupération des données : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de ILE Multi-services</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f9f4; margin: 0; padding: 20px; }
        header { text-align: center; margin-bottom: 30px; }
        h1 { color: #2c5e3b; }
        .container { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        
        /* Style de la carte */
        .card { background: white; border: 1px solid #c2e0c2; border-radius: 8px; padding: 20px; width: 300px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; }
        .card h3 { color: #1e3d27; margin-top: 0; }
        .card p { color: #555; font-size: 14px; min-height: 50px; }
        
        /* AJOUT ÉTAPE 2 : Style pour ajuster les images proprement */
        .img-activite {
            width: 100%;
            height: 180px;
            object-fit: cover; 
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .btn-appel { display: inline-block; background-color: #25d366; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 10px; }
        .btn-appel:hover { background-color: #128c7e; }
    </style>
</head>
<body>

    <header>
        <h1>Plateforme de ILE Multi-services</h1>
        <p>Des prestataires qualifiés à Cotonou à votre service.</p>
    </header>

    <main class="container">
        <?php if (count($activites) > 0): ?>
            <?php foreach ($activites as $activite): ?>
                <div class="card">
                    
                    <img src="images/<?php echo htmlspecialchars($activite['icone']); ?>" alt="<?php echo htmlspecialchars($activite['titre']); ?>" class="img-activite">
                    
                    <h3><?php echo htmlspecialchars($activite['titre']); ?></h3>
                    <p><?php echo htmlspecialchars($activite['description']); ?></p>
                    
                    <a href="tel:<?php echo htmlspecialchars($activite['telephone']); ?>" class="btn-appel">
                        📞 Appeler pour réserver
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune activité disponible pour le moment.</p>
        <?php endif; ?>
    </main>

</body>
</html>