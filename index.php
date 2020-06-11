<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 3</title>
</head>
<body>
    <?php
        setlocale(LC_TIME, "fr_FR");
        $date = date('D-m-y');
    ?>
    <p><?= 'nous somme encore le ' . strftime("%A %d %B %G", strtotime($date)) ?></p>
</body>
</html>


