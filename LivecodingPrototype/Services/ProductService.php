<?php
require "../DataAccess/ProductDAO.php";
class ProductService{


    public function getProducts()
    {
        $productDAO = new ProductDAO();
        return $productDAO->getProducts();
    }

    public function addProduct($product)
    {
        $productDAO = new ProductDAO();
        $exist = false;
        foreach ($productDAO->getProducts() as $key => $value) {
            if($value->getName() == $product->getName()){
            $exist = true;
            break;
            }

        }
        if($exist)
        {
            echo "product already exists\n";
        }
        else
        {
            $productDAO->addProduct($product);
            echo "product already exists\n";
        }
    }

}








?>