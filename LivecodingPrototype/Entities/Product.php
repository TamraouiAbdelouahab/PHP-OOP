<?php

class Product{
    private $id;
    private $name;  
    private $price;

    public function __construct($name, $price){
        $this->id = time();
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }

    public function Display():string{
        return  "id : ". $this->id ." ,name : ". $this->name ." ,price : ". $this->price ."\n";
    }


}










?>