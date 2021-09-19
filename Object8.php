<?php
//Акустическая система
class SpeakerSystem{
    //кол-во колонок, кол-во полос, материал
    public $columns, $bands, $material;

    public function __construct($columns, $bands, $material){
        $this->material = $material;
        $this->columns = $columns;
        $this->bands = $bands;
    }

    public function playback(){
        /**
         * реализация воспроизведения мелодии
         */
    }
}
$mySpeakerSystem = new SpeakerSystem(2,3,'Дерево');
$mySpeakerSystem->playback();