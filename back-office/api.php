<?php


// Permet de faire croire au navigateur que l'on est sur un fichier json
header('Content-type: application/json');

// Connecté la bdd
try{
    $pdo = new PDO('mysql:host=localhost;dbname=api;charset=utf8', 'root', '');
    $retour["success"] = true;
    $retour["message"] = "Connexion réussie";
} catch(Exception $e){
    $retour["success"] = false;
    $retour["message"] = "Connexion impossible";
}

// Requête pour afficher les données
$requete = $pdo->prepare("SELECT * FROM `film`");
$requete->execute();
$resultats = $requete->fetchAll();

// Création des valeurs
$retour["success"] = true;
$retour["message"] = "Voiçi les films disponible";
$retour["results"]["nombre de films"] = count($resultats);
$retour["results"]["film"] = $resultats;


// Afficher les valeurs
echo json_encode($retour);

?>