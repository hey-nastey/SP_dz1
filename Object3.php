<?php
class Doctor{
    //специализация, опыт, нервы
    public $specialization, $experience,$nerves;

    //конструктор
    public function __construct( $specialization, $experience,$nerves)
    {
        $this->experience = $experience;
        $this->nerves = $nerves;
        $this->specialization = $specialization;
    }

    //лечить
    public function heal(){

    }
}
$bestDoctor = new Doctor('стоматолог',10,'железные');
$bestDoctor->heal();