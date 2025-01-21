<?php

namespace views;

session_start();

use \PDO;

// Connection en utlisant la connexion PDO avec le moteur en prefix
$pdo = new PDO('sqlite:_inc/BD/myapp.sqlite');

// Permet de gérer le niveau des erreurs
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$nom = $_POST["form"]["nom"];


//$nbRows = $pdo->exec("INSERT INTO UTILISATEUR (nom,score) VALUES ('$nom', null )");

$_SESSION["nom"] = $nom;

$stmt = $pdo->prepare("SELECT nom FROM UTILISATEUR WHERE nom = :nom");
$stmt->execute([':nom' => $nom]);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(empty($rows)){
    $pdo->exec("INSERT INTO UTILISATEUR (nom,score) VALUES ('$nom', null )");
}

header('Location: ?action=questions');

