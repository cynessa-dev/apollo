<?php
session_start();

$requested_theme = $_GET['theme'] ?? null;

// Save the theme in session to persist throughout the use of this application
if ($requested_theme) {
    $_SESSION['theme'] = $requested_theme;
    echo json_encode([
        'status' => 'success',
        'theme' => $requested_theme
    ]);

} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'No theme provided'
    ]);
}

?>