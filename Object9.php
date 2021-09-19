<?php
//посудомойка
class dishwasher{
    //шнур питания, отсек,дверь, кнопка (старт), шланг подачи воды
    public $power_cord, $compartment, $door, $button,$water_supply;

    public function __construct($power_cord, $compartment, $door, $button,$water_supply){
        $this->compartment = $compartment;
        $this->door = $door;
        $this->power_cord = $power_cord;
        $this->water_supply = $water_supply;
        $this->button = $button;
    }

    public function washDishes(){
        /**
         * там много поведений
         * но можно я сделаю вид что тут
         * нужна только продуктивная мойка посуды
         */
    }
}
$myDishwasher = new dishwasher();
$myDishwasher->washDishes();