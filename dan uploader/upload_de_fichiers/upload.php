<?php
$uploadDir = 'storage/'; 

// Vérification si un fichier a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $allowedExtensions = ['pdf'];
    $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);

    // Validation de l'extension
    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Format de fichier non autorisé.";
        exit;
    }

    // Création du répertoire si inexistant
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Déplacement du fichier
    $destination = $uploadDir . basename($file['name']);
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        echo "Fichier uploadé avec succès !";
    } else {
        echo "Erreur lors de l'upload.";
    }
} else {
    echo "Aucun fichier n'a été envoyé.";
}
?>