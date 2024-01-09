<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="css/todolist.css">
</head>
<body>
	<main>
        <h1>Gestionnaire de tâches :-)</h1>

        <section>
            <!-- Formulaire d'ajout de tâche -->
            <form class="standard-form label-left" action="loginPost.php" method="POST">
                <fieldset>
                    <ul>
                        <li>
                            <label for="pseudo">Pseudo :</label>
                            <input id="pseudo" name="pseudo" type="text">
                        </li>
                        <li>
                            <input type="submit" value="Se connecter" title="Modifier une tâche">
                        </li>
                    </ul>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>