<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>listes Clients</title>
    <?php include './header.php' ?>
</head>
<body>
    <div class="container mb-1 ml-1">
            <a href="?controller=client&&action=add" class="btn btn-primary">
                <span class="mr-2">+</span> AJOUTER UN CLIENT
            </a>
     </div>
<table class="table table-dark table-striped">
    <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>EMAIL</th>
        <th>TELEPHONE</th>
        <th>ACTIONS</th>
    </tr>
    <?php foreach ($clients as $c) {?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['nom'] ?></td>
            <td><?= $c['prenom'] ?></td>
            <td><?= $c['email'] ?></td>
            <td><?= $c['telephone'] ?></td>
            <td>
               <a href="?controller=client&&action=edit&&id=<?= htmlspecialchars($c['id'], ENT_QUOTES, 'UTF-8') ?>" style="text-decoration: none; color: green;">
                    ✏️ <span style="color: green;">Update</span>
                </a>
                <a href="?controller=client&&action=delete&&id=<?= htmlspecialchars($c['id'], ENT_QUOTES, 'UTF-8') ?>" class="text-danger" style="text-decoration: none;">
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
