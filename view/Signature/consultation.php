<?php require_once __DIR__ . '/../../BDD/BDD.php';?>
<link rel="stylesheet" href="/assets/css/style.css">

<h2>📋 Signatures reçues</h2>

<?php
$signatures = $bdd->query("SELECT * FROM signatures ORDER BY date_signature DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if (empty($signatures)): ?>
    <p>Aucune signature pour le moment.</p>
<?php else: ?>
    <?php foreach ($signatures as $s): ?>
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <strong><?= htmlspecialchars($s['prenom']) ?> <?= htmlspecialchars($s['nom']) ?></strong><br>
            Email : <?= htmlspecialchars($s['email']) ?> | Téléphone : <?= htmlspecialchars($s['numero']) ?><br>
            <em><?= nl2br(htmlspecialchars($s['message'])) ?></em><br>
            <small>Signé le : <?= $s['date_signature'] ?></small>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

