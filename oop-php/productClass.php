<?php


class Product{
    private string $name;
    private float $price;
    private string $description;

    public function __construct($name,$price,$description)
    {
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
        
    }
    //setters
    public function setName($name){
      $this->name=$name;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function setDescription($description){
        $this->description=$description;
    }
    //getters
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getDescription(){
        return $this->description;
    }
    public function displayProductDetails(){
       return $this->name.$this->price.$this->description;
    }
}
//create an instance of a product
$product=new Product('charger',1200,'Its a samsung charger');
echo$product->displayProductDetails();
?>