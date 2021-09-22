<?php
//феечка винкс
class FairyWinx{
    //свойства или атрибуты
    private $wings;//крылья
    private $suit;//костюм
    private $magic;//волшебство

    //методы класса
    public function reincarnation()//перевоплощение в фею
    {
        /** какой-то вау эффект*/
    }
    public function fight()//бороться с силами зла
    {
        /** активные действия с помощью магии */
    }

    //буду выполнять разными способами каждый объект
    //начнем с первого, где распишем и геттеры и сеттеры

    /**сеттеры*/
    public function setMagic($magic)
    {
        $this->magic = $magic;
    }
    public function setSuit($suit)
    {
        $this->suit = $suit;
    }
    public function setWings($wings)
    {
        $this->wings = $wings;
    }

    /**геттеры*/
    public function getMagic()
    {
        return $this->magic;
    }
    public function getSuit()
    {
        return $this->suit;
    }
    public function getWings()
    {
        return $this->wings;
    }
}
$bestFairy = new FairyWinx();
$bestFairy->setMagic('огня');
$bestFairy->setSuit('красный');
$bestFairy->setWings('голубой');

echo 'Фея обладает магией: '.$bestFairy->getMagic().'<br>';
echo 'Цвет костюма: '.$bestFairy->getSuit().'<br>';
echo 'Цвет ее крыльев: '.$bestFairy->getWings();
$bestFairy-> reincarnation();
$bestFairy-> fight();
