<?php

class Database{
    
    private $Products = [];

    public function __construct() { 
        $this->getData();
    }
    private function getData()
    {
        $filepath = "../DB/Products.txt";
        if(file_exists($filepath)) {
            $content = file_get_contents($filepath);
            $data = unserialize($content);
            $this->Products = $data->Products;
        }
    }
    private function setData()
    {
        $filepath = "../DB/Products.txt";
        $data = serialize($this);
        file_put_contents($filepath, $data);
    }
    public function saveData()
    {
        $this->setData();
    }
    public function getProducts()
    {
        return $this->Products;
    }
    public function setProduct($product)
    {
        array_push($this->Products, $product);
    }








}






















?>