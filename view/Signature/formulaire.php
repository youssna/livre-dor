<link rel="stylesheet" href="/assets/css/style.css">
<include(__DIR__ . /view/commun/header.php);>

<h2>📘 Laissez votre message</h2>

<?php if (!empty($_GET['success'])): ?>
    <p style="color: green;">✅ Merci pour votre signature !</p>
<?php elseif (!empty($_GET['error'])): ?>
    <p style="color: red;">❌ <?= htmlspecialchars($_GET['error']) ?></p>
<?php endif; ?>

<form action="/livre-dor/Controller/Signature/traitementSignature.php" method="POST">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Prénom :</label><br>
    <input type="text" name="prenom" required><br><br>

    <label>Email :</label><br>
    <input type="email" name="email" required><br><br>

    <label>Numéro de téléphone :</label><br>
    <input type="text" name="numero" required><br><br>

    <label>Message :</label><br>
    <textarea name="message" rows="5"></textarea><br><br>

    <button type="submit">Envoyer</button>
</form>

