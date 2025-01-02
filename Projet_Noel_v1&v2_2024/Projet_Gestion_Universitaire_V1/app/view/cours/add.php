<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajouter un Cours</title>
    <?php include './header.php' ?>
</head>
<body>
<form action="?controller=cours&&action=save" method="POST">
    <label for="">NOM_COURS</label>
    <input type="text" name="nom_cours" required><br>
    <label for="">CODE_COURS</label>
    <input type="text" name="code_cours" required><br>
    <label for="">NOMBRE_HEURES</label>
    <input type="number" name="nombre_heures" required><br>
   

    <button type="submit">AJOUTER</button>

</form>
</body>
</html>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>