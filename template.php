<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="themes/romain-theme/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <title>My Home Page</title>
</head>
<body>
    <div class="contTop">
    <img src="<?= $profileUrl ?>" alt="">
    <h1><?= $firstname . " " . $lastname ?></h1>
    </div>
    <p><?= $bio ?></p>
    <div class="ExperiencesPro">
        <h2>Expériences professionnelles</h2>
        <?php foreach($expPro as $value): ?>
        <div class="ExperiencePro">
            <h3><?= $value['poste'] ?> - <strong><?= $value['entreprise'] ?></strong> (<?= $value['lieu'] ?>)</h3>
            <p><small><?= $value['dateDeb'] ?> - <?= $value['dateFin'] ?> </small></p>
            <p><?= $value['description'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <footer>
        Copyright - Tous droits réservés &copy; <?= $firstname . " " . $lastname ?> 2022
    </footer>
</body>
</html>