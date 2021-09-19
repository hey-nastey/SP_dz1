<?php
//электрический чайник
class electricKettle{
    //материал,подсветка, кнопка(вкл/выкл)
    public $material,$illumination, $button;

    public function __construct($material,$illumination, $button){
        $this->illumination = $illumination;
        $this->material = $material;
        $this->button = $button;
    }

    public function boil(){
        /**
         * кипятим водичку
         */
    }
}
$myElectricKettle = new electricKettle('Стекло','розовенький','ну кнопка есть');
$myElectricKettle->boil();