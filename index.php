<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 3</title>
</head>
<body>
    <?php
        //on set la varial LC-TIME en france (fr_FR)
        setlocale(LC_TIME, "fr_FR.UTF-8");
    ?>
    <p><?= 'nous somme toujours le ' . strftime("%A %d %B %Y") //on affiche la date actuel, %A=nom du jour en lettre ,%D=jour en chiffre, %B=mois en chiffre, %Y= annee en chiffre?></p>
</body>
</html>


