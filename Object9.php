<?php
//посудомойка
class dishwasher{
    //шнур питания, отсек,дверь, кнопка (старт), шланг подачи воды
    //public $power_cord, $compartment, $door, $button,$water_supply;
    //извините но я усталь поэтому тут будет только кнопка
    private  $button;

    public function washDishes(){
        /**
         * там много поведений
         * но можно я сделаю вид что тут
         * нужна только продуктивная мойка посуды
         */
    }
    public function __construct( $button)
    {
        /**$this->compartment = $compartment;
         * $this->door = $door;
         * $this->power_cord = $power_cord;
         * $this->water_supply = $water_supply;*/
        $this->button = $button;
    }

    public function getButton()
    {
        return $this->button;
    }
}
$myDishwasher = new dishwasher('имеется и на том спасибо');
echo 'Кнопка старта: '.$myDishwasher->getButton().'<br>';
$myDishwasher->washDishes();
