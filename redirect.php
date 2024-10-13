<?php
// Get the requested path from the URL
$path = $_SERVER['REQUEST_URI'];

// Define the new domain
$new_domain = 'https://telefauci.k.vu';

// Redirect to the new domain with the same path
header("Location: $new_domain$path");
exit();
?>
