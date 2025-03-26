<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Upload de fichier</title>
</head>
<body>
    <h2>Uploader un fichier</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fichier" required>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

