<?php
require('bdd.php');

if (array_key_exists('index', $_GET)) {
    $index = $_GET['index'];

    // Récupérez les données de la tâche depuis la base de données en fonction de l'ID
    $sql = 'SELECT * FROM taches WHERE id = :id';
    $request = $bdd->prepare($sql);

    if ($request) {
        $request->execute(['id' => $index]);
        $tache = $request->fetch(PDO::FETCH_ASSOC);

        // Vérifiez si la tâche existe
        if (!$tache) {
            // Gérez le cas où la tâche n'existe pas (par exemple, redirigez vers une page d'erreur)
        } else {
            // Incluez le formulaire de mise à jour
            include('views/edit.php');
        }
    }
} else {
    header("Location: /");
}
?>
