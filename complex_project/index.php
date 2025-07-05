<?php
require_once 'src/Controllers/ProductController.php';
require_once 'src/Controllers/UserController.php';
require_once 'src/Services/EmailService.php';
require_once 'src/Models/Product.php';
require_once 'src/Models/User.php';

use Controllers\ProductController;
use Controllers\UserController;

$productController = new ProductController();
$productController->handleRequest();

$userController = new UserController();
$userController->authenticate('admin', '1234');
