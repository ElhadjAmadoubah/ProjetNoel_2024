<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modifier Client</title>
    <?php include './header.php' ?>
</head>

<body>
    <form action="?controller=client&&action=update" method="POST">
        <input type="text" name="id" value=<?= $client['id']?> hidden><br>
        <label for="">nom</label>
        <input type="text" name="nom" value=<?= $client['nom']?>><br>
        <label for="">prenom</label>
        <input type="text" name="prenom" value=<?= $client['prenom']?>><br>
        <label for="">email</label>
        <input type="email" name="email" value=<?= $client['email']?>><br>
        <label for="">telephone</label>
        <input type="text" name="telephone" value=<?= $client['telephone']?>><br>
    

        <button type="submit">Update</button>

    </form>
</body>
</html>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
