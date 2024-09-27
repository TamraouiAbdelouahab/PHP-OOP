<?php
require "../DB/Database.php";
class ProductDAO {


    public function getProducts() {
        $Database = new Database();
        return $Database->getProducts();
    }
    public function addProduct($product) {
    $Database = new Database();
    $Database->setProduct($product);
    $Database->saveData();
    }






}






?>