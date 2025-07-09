<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=livre_or', 'user_ecole', 'mdp_ecole');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Erreur de connexion à la base : " . $e->getMessage());
}
?>
