<?php
session_start();

// Unset and destroy the session to log the user out
session_unset();
session_destroy();

// Redirect to the home page after logout
header('Location: ../../frontend/user/index.php');
exit;
?>
