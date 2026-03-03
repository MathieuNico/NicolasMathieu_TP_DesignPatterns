<?php
require_once 'LicenceManager.php';

$employeA = LicenceManager::getInstance();
// on imagine qu'un nouvel employé arrive dans l'entreprise et a besoin d'accéder au gestionnaire de licence
$employeB = LicenceManager::getInstance();
// on vérifie que les deux employés utilisent la même instance du gestionnaire de licence
if ($employeA === $employeB) {
    echo "Les deux employés utilisent la même instance du gestionnaire de licence.\n";
    $resultA = $employeA->verifyLicense("ENT-2026-PRO");
    $resultB = $employeB->verifyLicense("WRONG-KEY");
    echo "Licence vérifiée pour employé A : " . ($resultA ? "Valide" : "Invalide") . "\n";
    echo "Licence vérifiée pour employé B : " . ($resultB ? "Valide" : "Invalide") . "\n";
} else {
    echo "Les deux employés utilisent des instances différentes du gestionnaire de licence.\n";
}




