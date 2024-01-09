<?php

// --------------------------------------------------------------------------------------
// CODE PRINCIPAL
// --------------------------------------------------------------------------------------
include('bdd.php');

// Je prépare ma requete en base de donnée 
$request = $bdd->prepare('SELECT * FROM taches');

// Je l'execute pour pouvoir ensuite recupérer les resultats
$request->execute();

// J'utilise fetchAll pour récuperer tous les resultats de ma requete sous forme d'un tableau associatif
$tasks = $request->fetchAll(PDO::FETCH_ASSOC);

// --------------------------------------------------------------------------------------
// TEMPLATE
// --------------------------------------------------------------------------------------
// Chargement du template.
include 'views/todolist.php';