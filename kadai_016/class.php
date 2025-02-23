<?php
 class Food {
     public $name;
     public $price;
       
     public function_construct(string $name,int $price) {
        $this->name = $name;
        $this->price = $price;
       }
     public function show_price(){
        echo $this->price '<br>';
       }
    }
 class Animal{
     public $name;    
     public $height;
     public $weight;

     public function_construct(string $name,int $height,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
     }
       