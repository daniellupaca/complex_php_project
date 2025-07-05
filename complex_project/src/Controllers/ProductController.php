<?php
namespace Controllers;

use Models\Product;

class ProductController {
    public function handleRequest() {
        $products = [
            new Product('Laptop', 1499.99),
            new Product('Smartphone', 899.99),
        ];
        foreach ($products as $p) {
            echo $p->getFormattedPrice();
        }
    }
}
