<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>AjouterEtudiant</title>
    <?php include './header.php' ?>
</head>
<body>
<form action="?controller=etudiant&&action=save" method="POST">
    <label for="">nom</label>
    <input type="text" name="nom" required><br>
    <label for="">prenom</label>
    <input type="text" name="prenom" required><br>
    <label for="">Email</label>
    <input type="email" name="email" required><br>
    <label for="">filiere</label>
    <input type="text" name="filiere" required><br>

    <button type="submit">Ajouter</button>

</form>
</body>
</html>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
