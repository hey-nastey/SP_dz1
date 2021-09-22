<?php
//ураааа десятый это буду я...
class I{
    //мои свойства
    public $physical_condition, $moral_condition;//физическое состояние, моральное состояние

    //мои методы
    public function sleep(){//cон
        echo 'я не высыпаюсь...&#128564</br>';
    }
    public function work(){//выполнение каких-либо дел
        echo 'who is work?';
    }

    //мой конструктор
    public function __construct($physical_condition, $moral_condition){
        $this->moral_condition = $moral_condition;
        $this->physical_condition = $physical_condition;
    }

    //мои геттеры
    public function getMoralCondition()
    {
        return $this->moral_condition;
    }
    public function getPhysicalCondition()
    {
        return $this->physical_condition;
    }

}
$me = new I('0/5','-329745764381654/5');
echo 'физическое состояние: '.$me->getPhysicalCondition().'<br>';
echo 'моральное состояние: '.$me->getMoralCondition().'<br>';
$me->sleep();
$me->work();
