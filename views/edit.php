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
            <form class="standard-form label-left" action="update.php" method="POST">
                <fieldset>
                    <legend>Informations sur la tâche</legend>
                    <ul>
                        <li>
                            <label for="titre">Titre :</label>
                            <input id="titre" name="titre" type="text" value="<?= $tache['titre'] ?>">
                        </li>
                        <li>
                            <label for="description">Tâche :</label>
                            <textarea id="description" name="description" rows="5"><?= $tache['description'] ?></textarea>
                        </li>
                        <li>
                            <label for="day">Date de fin :</label>
                            <input type="date" name="date" value="<?= $tache['date'] ?>">
                        </li>
                        <input type="hidden" name="index" value="<?= $index ?>">
                        <li>
                            <input type="submit" value="Modifier" title="Modifier une tâche">
                        </li>
                    </ul>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>