<?php
//Кофемашина
class CoffeeMachine{
    //производитель, объем, мощность
    public $manufacturer, $volume, $power;

    //конструктор
    public function __construct($manufacturer, $volume,$power){
        $this->volume = $volume;
        $this->manufacturer = $manufacturer;
        $this->power = $power;
    }

    //варить кофе
    public function makingCoffee(){
        echo '&#9749';
    }
}
$CoffeeMachine1 = new CoffeeMachine('Philips',1000,2500);
$CoffeeMachine1->makingCoffee();