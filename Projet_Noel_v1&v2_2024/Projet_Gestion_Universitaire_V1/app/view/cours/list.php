
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>listeCours</title>
    <?php include './header.php' ?>
</head>
<body>
    <div class="container mb-1 ml-1">
        <a href="?controller=cours&&action=add" class="btn btn-primary">
            <span class="mr-2">+</span> AJOUTER UN COURS
        </a>
    </div>
<table class="table table-dark table-striped">
    <tr>
        <td>ID</td>
        <td>NOM_COURS</td>
        <td>CODE_COURS</td>
        <td>NOMBRE_HEURES</td>
        <td>ACTION</td>
    </tr>
    <?php while( $c = pg_fetch_assoc($cours)){ ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['nom_cours'] ?></td>
            <td><?= $c['code_cours'] ?></td>
            <td><?= $c['nombre_heures'] ?></td>
            <td>
            <a href="?controller=cours&&action=edit&&id=<?= htmlspecialchars($c['id']) ?>" style="text-decoration: none; color: green;">
                    ✏️ <span style="color: green;">Update</span>
                </a>
                <a href="?controller=cours&&action=delete&&id=<?= htmlspecialchars($c['id']) ?>" class="text-danger" style="text-decoration: none;">
                    <span class="text-danger">Delete</span> 🗑️
                </a>
            </td>
        </tr>
    <?php } ?>    
</table>
</body>
</html>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>