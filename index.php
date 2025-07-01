<?php
include(__DIR__ . '/view/commun/header.php');


$page = $_GET['page'] ?? 'signature';

switch ($page) {
    case 'signature':
        include(__DIR__ . '/view/Signature/formulaire.php');
        break;

    case 'consultation':
        include(__DIR__ . '/view/Signature/consultation.php');
        break;

    default:
        echo "<p>Page introuvable.</p>";
        break;
}

include('/Applications/MAMP/htdocs/livre-dor/view/commun/footer.php');