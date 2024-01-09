<?php
require('bdd.php');

if (!empty($_POST['titre']) && 
    !empty($_POST['description']) && 
    !empty($_POST['date']) && 
    isset($_POST['index'])) {

    $id = $_POST['index'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $sql = 'UPDATE taches SET titre = :titre, description = :description, date = :date WHERE id = :id';

    $request = $bdd->prepare($sql);

        $request->execute([
            'id' => $id,
            'titre' => $titre,
            'description' => $description,
            'date' => $date
        ]);
    }



header('Location: /');
?>
