<?php
class Doctor{
    //свойства
    private $specialization,$nerves;//специализация, нервы

    //метод
    public function heal(){
        /**лечить*/
    }
    //setValues заменили на конструктор
    public function __construct( $specialization, $nerves)
    {
        $this->nerves = $nerves;
        $this->specialization = $specialization;
    }

    //геттеры
    public function getNerves()
    {
        return $this->nerves;
    }
    public function getSpecialization()
    {
        return $this->specialization;
    }
}
$bestDoctor = new Doctor('стоматолог','железные');
echo 'Специализация: '.$bestDoctor->getSpecialization().'<br>';
echo 'Нервы: '.$bestDoctor->getNerves().'<br>';
$bestDoctor->heal();
