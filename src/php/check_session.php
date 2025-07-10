<?php
session_start();
header('Content-Type: application/json');

if (isset($_SESSION['user_id'])) {
    echo json_encode([
        'loggedIn' => true,
        'name' => $_SESSION['name'],
        'role' => $_SESSION['role']
    ]);
} else {
    echo json_encode(['loggedIn' => false]);
}
?>
