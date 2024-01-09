<?php

require('bdd.php');

if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['date'])) {
    // Je prépare ma requete et j'utilise :title :desc et :date pour mettre en place mes parametres securisés
    $sql = 'INSERT INTO taches (titre, description, date) VALUES (:titre, :description, :date)';
    
    $request = $bdd->prepare($sql);

    if ($request) {
           // Je spécifie la correspondance entre les :title etc avec les variable du POST dans l'execute
    $request->execute([
        'titre' => $_POST['titre'],
        'description' => $_POST['description'],
        'date' => $_POST['date']
    ]);
    }}


    header('Location: /');
?>

 
