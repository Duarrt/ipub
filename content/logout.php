<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo "Por favor espere..."."<meta http-equiv='refresh' content=\"0; URL='index.php'\"/>";
?>
