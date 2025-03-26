<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fichier'])) {
    $dossierCible = 'uploads/';
    $nomFichier = basename($_FILES['fichier']['name']);
    $cheminFichier = $dossierCible . $nomFichier;
    $typesAutorises = ['image/jpeg', 'image/png', 'application/pdf'];
    
    if (!in_array($_FILES['fichier']['type'], $typesAutorises)) {
        die("Format de fichier non autorisé.");
    }
    
    if (move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminFichier)) {
        echo "Fichier uploadé avec succès.";
    } else {
        echo "Échec de l'upload.";
    }
    
} else {
    echo "Aucun fichier reçu.";
}
?>