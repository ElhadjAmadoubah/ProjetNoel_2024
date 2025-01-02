<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editer un Etudiant</title>
    <?php include './header.php' ?>
</head>
<body>
<form action="?controller=etudiant&&action=update" method="POST">
    <input type="text" name="id" value=<?= $etudiant['id']?> hidden><br>
    <label for="">nom</label>
    <input type="text" name="nom" value=<?= $etudiant['nom']?>><br>
    <label for="">prenom</label>
    <input type="text" name="prenom" value=<?= $etudiant['prenom']?>><br>><br>
    <label for="">email</label>
    <input type="email" name="email" value=<?= $etudiant['email']?>>><br>
    <label for="">filiere</label>
    <input type="filiere" name="filiere" value=<?= $etudiant['filiere']?>>><br>
   

    <button type="submit">Update</button>

</form>
</body>
</html>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
