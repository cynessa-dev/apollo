<?php
session_start();

$account_type = $_GET['account_type'] ?? 'free';

// Save the theme in session to persist throughout the use of this application
if ($account_type) {
    $_SESSION['account_type'] = $account_type;
    echo json_encode([
        'status' => 'success',
        'account_type' => $account_type
    ]);

} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'invalid account type provided'
    ]);
}

?>