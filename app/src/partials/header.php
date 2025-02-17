<?php
// Define page title dynamically
$pageTitles = [
    'home' => 'Home - Crypto Trade',
    'about' => 'About Us - Crypto Trade',
    'contact' => 'Contact Us - Crypto Trade',
    '404' => 'Page Not Found - Crypto Trade'
];

$pageTitle = $pageTitles[$route] ?? 'Crypto Trade';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crypto Trade - Your gateway to secure and smart trading.">
    <meta name="keywords" content="crypto, trading, bitcoin, ethereum, finance">
    <meta name="author" content="Crypto Trade Team">
    
    <title><?php echo $pageTitle; ?></title>
    
    <link rel="stylesheet" href="/src/static/css/main-layout.css">
</head>
<body>

<header>
    <h1>Crypto Trade</h1>
</header>
