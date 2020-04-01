<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
//rederigiendo página principal
header('Location: ../index.php');
?>