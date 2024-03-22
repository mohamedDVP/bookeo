<?php

class Product {
    protected string $name;
    protected string $description;
    protected float $price;

    

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function setPrice(float $price) {
        $this->price = $price;
    }

    public function displayProduct() {
        echo "Name: $this->name, Description: $this->description, Price: $this->price";
    }



}

$product1 = new Product();
$product1->getDescription();