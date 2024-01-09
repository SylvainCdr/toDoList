<?php

require('bdd.php');

if (array_key_exists('index', $_GET)) {
    $index = $_GET['index'];

    $sql = 'DELETE FROM taches WHERE id = :id';

    $request = $bdd->prepare($sql);

    if ($request) {
       $request->execute(['id' => $index]);

       
    };
}


header('Location: /');
?>
