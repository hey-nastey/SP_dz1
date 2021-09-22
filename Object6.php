<?php
//электрический чайник
class electricKettle{
    //свойства
    private $material,$illumination, $button;//материал,подсветка, кнопка(вкл/выкл)

    //метод класса
    public function boil(){
        /**
         * кипятим водичку
         */
    }

    //конструктор
    public function __construct($material,$illumination, $button){
    $this->illumination = $illumination;
    $this->material = $material;
    $this->button = $button;
    }

    //геттеры
    public function getButton()
    {
        return $this->button;
    }
    public function getIllumination()
    {
        return $this->illumination;
    }
    public function getMaterial()
    {
        return $this->material;
    }

}
$myElectricKettle = new electricKettle('стекла','розовенькой','работающей');
echo 'Электрический чайник из '.$myElectricKettle->getMaterial().' c '.$myElectricKettle->getIllumination().' подсветкой и '.$myElectricKettle->getButton().' кнопкой';
$myElectricKettle->boil();
