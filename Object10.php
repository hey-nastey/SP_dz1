<?php
//ураааа десятый это буду я...
class I{
    //физическое состояние, моральное состояние
    public $physical_condition, $moral_condition;

    public function __construct($physical_condition, $moral_condition){
        $this->moral_condition = $moral_condition;
        $this->physical_condition = $physical_condition;
    }

    //cон
    public function sleep(){
        echo 'я не высыпаюсь...&#128564</br>';
    }

    //выполнение каких-либо дел
    public function work(){
        echo 'who is work?';
    }
}
$me = new I('2/5','-321654/5');
$me->sleep();
$me->work();