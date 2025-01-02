<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajouter un Etudiant</title>
    <?php include './header.php' ?>
</head>
<body>
    <div class="container mb-1 ml-1">
        <a href="?controller=etudiant&&action=add" class="btn btn-primary">
            <span class="mr-2">+</span> AJOUTER UN ETUDIANT
        </a>
    </div>

  <table class="table table-dark table-striped">
    <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>EMAIL</th>
        <th>fILIERE</th>
        <th>ACTION</th>
    </tr>
    <?php while( $etu = pg_fetch_assoc($etudiants)){ ?>
        <tr>
            <td><?= $etu['id'] ?></td>
            <td><?= $etu['nom'] ?></td>
            <td><?= $etu['prenom'] ?></td>
            <td><?= $etu['email'] ?></td>
            <td><?= $etu['filiere'] ?></td>
            <td>
                <a href="?controller=etudiant&&action=edit&id=<?= htmlspecialchars($etu['id']) ?>" style="text-decoration: none; color: green;">
                    ✏️ <span style="color: green;">Update</span>
                </a>
                <a href="?controller=etudiant&&action=delete&id=<?= htmlspecialchars($etu['id']) ?>" class="text-danger" style="text-decoration: none;">
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
