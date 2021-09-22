<?php
//Колесо обозрения
class ferrisWheel{
    //свойства
    private $seats,$doors,$windows;//Сиденья,Двери,Окна

    //метод класса
    public function rotation(){
        /**
         *реализация вращения
         */
    }

    //конструктор
    public function __construct($seats = 'мягкие',$doors = 'надежные',$windows= 'имеются'){
        $this->doors = $doors;
        $this->seats = $seats;
        $this->windows = $windows;
    }

    //геттеры
    public function getDoors()
    {
        return $this->doors;
    }
    public function getSeats()
    {
        return $this->seats;
    }
    public function getWindows()
    {
        return $this->windows;
    }
}
$myFerrisWheel = new ferrisWheel();
echo 'Сиденья: '.$myFerrisWheel->getSeats().'<br>';
echo 'Двери: '.$myFerrisWheel->getDoors().'<br>';
echo 'Окна: '.$myFerrisWheel->getWindows().'<br>';
$myFerrisWheel ->rotation();
