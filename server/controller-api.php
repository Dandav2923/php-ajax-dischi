<?php
include __DIR__ . '/../server/db.php';
header('Content-Type: application/json');
echo json_encode ([
    'results' => $cards,
    'length' => count($cards)
]);
?>