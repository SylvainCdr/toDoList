<?php

$bdd = new PDO('mysql:host=localhost;dbname=todolist2;charset=utf8', 'root', '');

/**
 *                                                        le :id permet de mettre un parametre de manière sécurisée
 * $request = $bdd->prepare('SELECT * FROM taches WHERE id = :id');
 * 
 * Si on a des parametres, alors on les met dans le tableau dans execute()
 * $request->execute([
 *      'id' => 2
 * ]);
 * 
 * Si on attend des resultats, alors on fait un fetchAll si plusieurs resultats, ou un fetch si un seul resultat
 * $data = $request->fetchAll(PDO::FETCH_ASSOC);
 */