<?php
//феечка винкс
class FairyWinx{
    private $wings;//крылья
    private $suit;//костюм
    private $magic;//волшебство

    //так как поля приватны,необходимо их вернуть, что бы обращаться из вне
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

    //конструктор
    public function __construct($wings, $suit, $magic){
        $this->wings = $wings;
        $this->suit = $suit;
        $this->magic = $magic;
    }

    //действия, методы
    public function reincarnation()//перевоплощение в фею
    {
        /**
        какой-то вау эффект
         */
    }
    public function fight()//бороться с силами зла
    {
        /**
        активные действия с помощью магии
         */
    }

}
$bestFairy = new FairyWinx('голубые','красный','огонь');
$bestFairy-> reincarnation();
$bestFairy-> fight();