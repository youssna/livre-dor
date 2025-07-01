<?php
session_start();
require_once __DIR__ . '/../../BDD/BDD.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $email = $_POST['email'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $message = $_POST['message'] ?? '';

    if (empty($nom) || empty($prenom) || empty($email) || empty($numero)) {
        header('Location: ../../View/Signature/formulaire.php?error=Tous les champs sont obligatoires');
        exit();
    }

    $stmt = $bdd->prepare("INSERT INTO signatures (nom, prenom, email, numero, message, date_signature) VALUES (?, ?, ?, ?, ?, NOW())");
    $stmt->execute([$nom, $prenom, $email, $numero, $message]);

header('Location: ../../index.php?page=signature&success=1');
exit();
}
?>
