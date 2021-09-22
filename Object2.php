<?php
//рюкзак
class backpack{
    //атрибуты или свойства
    private $lock, $handle;//Замок, Ручки

    //метод класса
    public function storage(){//действие хранения
        echo 'я пуст внутри :(';
    }

    //все сеттеры в этом способе объединим
    public function setValue($handle,$lock)
    {
        $this->handle = $handle;
        $this->lock = $lock;
    }

    //оставляем геттеры
    public function getLock()
    {
        return $this->lock;
    }
    public function getHandle()
    {
        return $this->handle;
    }
}
$myBackpack = new backpack();
$myBackpack->setValue('кодовый','широкие');
echo 'Замок: '.$myBackpack->getHandle().'<br>';
echo 'Ручки: '.$myBackpack->getLock().'<br>';
$myBackpack-> storage();
