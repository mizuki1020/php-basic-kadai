<?php

 class Food {
     public $name;
     public $price;
       
     public function __construct (string $name,int $price) {
        $this->name = $name;
        $this->price = $price;
       }

     public function show_price(){
        echo $this->price. '<br>';
       }
    }

 class Animal{
     public $name;    
     public $height;
     public $weight;

     public function __construct (string $name,int $height,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
     }

     public function show_height(){
      echo $this->height. '<br>';
     }
   }    
   
   $rice=new Food('ライス',150);
   $dog=new Animal('ぽち',70,5);

   print_r($rice);
   print_r($dog);

   $rice->show_price();
   $dog->show_height();

   ?>