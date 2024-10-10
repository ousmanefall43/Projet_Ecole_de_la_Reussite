<?php
// Connexion à la base de données
require_once '../../Config/config.php';

// Fonction pour archiver un professeur
function archiverProfesseur($db, $id_professeur) {
    $query = "UPDATE professeurs SET archive = 1 WHERE id_professeur = ?";
    $stmt = $db->prepare($query);
    return $stmt->execute([$id_professeur]);
}

// Vérifier si une action d'archivage est demandée
if (isset($_GET['action']) && $_GET['action'] == 'archive' && isset($_GET['id'])) {
    $id_professeur = $_GET['id'];
    if (archiverProfesseur($db, $id_professeur)) {
        $message = "Professeur archivé avec succès.";
    } else {
        $message = "Erreur lors de l'archivage du professeur.";
    }
}

// Fonction pour lister les professeurs non archivés
function listProfesseursNonArchives($db) {
    $sql = "SELECT * FROM professeurs WHERE archive = 0";
    return $db->query($sql);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Professeurs à Archiver</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .teacher-photo {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Liste des Professeurs à Archiver</h2>
        <?php if (isset($message)): ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de Naissance</th>
                    <th>Adresse</th>
                    <th>Sexe</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Niveau</th>
                    <th>Date d'Embauche</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $professeurs = listProfesseursNonArchives($db);
                while ($row = $professeurs->fetch(PDO::FETCH_ASSOC)):
                ?>
                <tr>
                    <td><img src="upload/<?php echo htmlspecialchars($row['photo']); ?>" alt="Photo de <?php echo htmlspecialchars($row['nom']); ?>" class="teacher-photo"></td>
                    <td><?php echo htmlspecialchars($row['matricule']); ?></td>
                    <td><?php echo htmlspecialchars($row['nom']); ?></td>
                    <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                    <td><?php echo htmlspecialchars($row['date_naissance']); ?></td>
                    <td><?php echo htmlspecialchars($row['adresse']); ?></td>
                    <td><?php echo htmlspecialchars($row['sexe']); ?></td>
                    <td><?php echo htmlspecialchars($row['telephone']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['niveau']); ?></td>
                    <td><?php echo htmlspecialchars($row['date_embauche']); ?></td>
                    <td><?php echo htmlspecialchars($row['statut']); ?></td>
                    <td>
                        <a href="?action=archive&id=<?php echo $row['id_professeur']; ?>" class="btn btn-warning btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir archiver ce professeur ?');">
                            <i class="fas fa-archive"></i> Archiver
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="teacher.php" class="btn btn-primary">Retour à la liste des professeurs</a>
        <a href="archive.php" class="btn btn-secondary">Voir les professeurs archivés</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>