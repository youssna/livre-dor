<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d'Or</title>
    <link rel="stylesheet" href="/livre-dor/assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <h1>📖 Livre d'Or</h1>
        <nav class="nav-bar">
            <a href="/livre-dor/index.php?page=signature">✍️ Signer</a>
            <a href="/livre-dor/index.php?page=consultation">📋 Voir les signatures</a>
        </nav>
    </header>
    <main class="main-container">