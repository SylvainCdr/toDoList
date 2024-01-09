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
        <!-- Formulaire listant toutes les tâches existantes avec possibilité de suppression. -->
        <form class="standard-form" action="remove.php" method="POST">
            <ul class="task-list">
                <?php foreach($tasks as $tache) : ?>
                    <li>
                        <label for="task-1" class=""><?= $tache['titre'] ?></label>
                        <p><?= $tache['description'] ?></p>
                        <p><?= $tache['date'] ?></p>
                        <a href="/edit.php?index=<?= $tache['id'] ?>">Editer</a>
                        <a href="/delete.php?index=<?= $tache['id'] ?>">Supprimer</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </form>
        <hr>

        <section>
            <!-- Formulaire d'ajout de tâche -->
            <form class="standard-form label-left" action="add.php" method="POST">
                <fieldset>
                    <legend>Informations sur la tâche</legend>
                    <ul>
                        <li>
                            <label for="titre">Titre :</label>
                            <input id="titre" name="titre" type="text">
                        </li>
                        <li>
                            <label for="description">Tâche :</label>
                            <textarea id="description" name="description" rows="5"></textarea>
                        </li>
                        <li>
                            <label for="day">Date de fin :</label>
                            <input type="date" name="date">
                        </li>
                        <li>
                            <input type="submit" value="Ajouter" title="Ajouter une nouvelle tâche">
                        </li>
                    </ul>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>