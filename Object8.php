<?php
//Акустическая система
class SpeakerSystem{
    //свойства
    public $columns, $material;//кол-во колонок, материал

    //метод класса
    public function playback(){
        /**
         * реализация воспроизведения мелодии
         */
    }
    //конструктор
    public function __construct($columns, $material){
        $this->material = $material;
        $this->columns = $columns;
    }

    //геттеры
    public function getMaterial()
    {
        return $this->material;
    }
    public function getColumns()
    {
        return $this->columns;
    }

}
$mySpeakerSystem = new SpeakerSystem(2,'Дерево');
echo 'Кол-во колонок: '.$mySpeakerSystem->getColumns().'<br>';
echo 'Материал: '.$mySpeakerSystem->getMaterial().'<br>';
$mySpeakerSystem->playback();
