<?php
$routes = [];

// Home page
route('/', function() {
    require_once 'home.php';
});

// About page
route('/about', function() {
    require_once 'views/about.php';
});

// User profile with parameter
route('/user/:id', function($id) {
    echo "User ID: " . htmlspecialchars($id);
});

// Contact page
route('/contact', function() {
    require_once 'views/contact.php';
});

// API endpoint example
route('/api/users/:id', function($id) {
    header('Content-Type: application/json');
    echo json_encode(['user_id' => $id, 'name' => 'John Doe']);
});

route('/industry/e-commerce', function() {
    require_once 'industry/e-commerce.php';
});