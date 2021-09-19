<?php
//Колесо обозрения
class ferrisWheel{
    //Сиденья,Двери,Окна
    public $seats,$doors,$windows;

    public function __construct($seats,$doors,$windows){
        $this->doors = $doors;
        $this->seats = $seats;
        $this->windows = $windows;
    }

    public function rotation(){
        /**
         *реализация вращения
         */
    }
}
$myFerrisWheel = new ferrisWheel();
$myFerrisWheel ->rotation();