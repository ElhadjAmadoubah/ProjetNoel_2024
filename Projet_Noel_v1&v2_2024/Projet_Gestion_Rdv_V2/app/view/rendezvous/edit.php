<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editer rendezvoux</title>
    <?php include './header.php' ?>
</head>
<body>
    <form action="?controller=rendezvous&&action=update" method="POST">
        <input type="text" name="id" value=<?= $rendezvou['id']?> hidden><br>
        <label for="">date</label>
        <input type="date" name="date" value=<?= $rendezvou['date']?>><br>
        <label for="">heure</label>
        <input type="time" name="heure" value=<?= $rendezvou['heure']?>><br>
        <label for="">description</label>
        <input type="text" name="description" value=<?= $rendezvou['description']?>><br>
        <label for="client_id">client</label>
        <select name="client_id" class="form-select" required>
                <option value="">Sélectionnez un client</option>
                <?php foreach ($clients as $client): ?>
                    <option value="<?= htmlspecialchars($client['id'] ) ?>" 
                        <?= $client['id'] == $rendezvou['client_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($client['prenom']) ?>
                    </option>
                <?php endforeach; ?>
            </select>

        <button type="submit">SAUVEGARDER</button>

    </form>
</body>
</html>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>