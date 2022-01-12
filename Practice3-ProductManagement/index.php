<?php
include_once "Services/ProductManager.php";
include_once "Models/Product.php";

//use Servicer\ProductManager;
//use Models\Product;



$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProduct();
foreach ($products as $product){
    echo $product->getName()."<br>";
}