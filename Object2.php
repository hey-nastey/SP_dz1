<?php
//рюкзак
class backpack{
    //Замок, Ручки
    private $lock, $handle;

    //возвращение полееей
    public function getHandle()
    {
        return $this->handle;
    }
    public function getLock()
    {
        return $this->lock;
    }

    //конструктор
    public function __construct($lock, $handle){
        $this->lock = $lock;
        $this->handle = $handle;
    }

    //действие хранения
    public function storage(){
        echo 'я пуст внутри';
    }
}
$myBackpack = new backpack('кодовый_замок','широкие');
$myBackpack-> storage();