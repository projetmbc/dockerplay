<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Que de questions...</title>
</head>

<body>
    <p>
        Quel jour sommes-nous pour PHP ?
        <?php
            echo '<b>'.date("d / m / Y").'</b>';
        ?>
    </p>
    <p>
        Quelle heure est-il pour PHP ?
        <?php
            echo '<b>'.date("h:i:s a").'</b>';
        ?>
    </p>
    <p>
        Dans quelle étagère ?
        <b>
            Veuillez poser la bonne question je vous prie en évitant de me demander le nombre réponse à la vie.
        </b>
</body>
</html>
