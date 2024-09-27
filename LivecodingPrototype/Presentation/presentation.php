<?php
include "../Services/ProductService.php";
include "../Entities/Product.php";
$Service = new ProductService();
function  presentation()
{
    echo "+-----------------------------------------+\n";
    echo "|              Welcome                    |\n";
    echo "+-----------------------------------------+\n";
    echo "|             [V] : View books            |\n";
    echo "|             [A] : Add book              |\n";
    echo "|             [E] : Exit                  |\n";
    echo "+-----------------------------------------+\n";
}
function DisplayData()
{
    global $Service;
    foreach($Service->getProducts() as $key => $product)
    {
        echo ($key+1) . ") " . $product->Display();
    }
}
function AddProduct()
{
    global $Service;
    $name = readline("Enter Name product : ");
    $price  = readline("Enter price product: ");
    $book = new Product($name, $price);
    $Service->addProduct($book);
    
}
function start()
{
    presentation();
    $value = readline("enter value : ");
    $V = strtolower($value);
    switch ($V) {
        case "a":
            AddProduct();
            start();
        case "v":
            DisplayData();
            start();
        case "e":
            exit;            
        default:
            echo "enter correct value :"; 
            start();           
    }
}







?>