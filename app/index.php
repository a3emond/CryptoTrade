<?php
// Load route mappings
$routes = require 'src/routes.php';
// Get requested route from URL
$route = $_GET['route'] ?? 'home';
// Check if the route exists, otherwise use 404
$page = $routes[$route] ?? $routes['404'];
?>

<?php require 'src/partials/header.php'; ?>

<nav> <?php require 'src/partials/nav.php'; ?> </nav>

<div class="main-content">
    <?php require $page; ?>
</div>

<?php require 'src/partials/footer.php'; ?>

<script src="src/static/js/main.js"></script>

