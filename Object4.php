//Кофемашина
class CoffeeMachine{
    //свойства
    private $manufacturer, $volume, $power;//производитель, объем, мощность

    //метод класса
    public function makingCoffee(){//варить кофе
        echo '&#9749';
    }

    //конструктор
    public function __construct($manufacturer, $volume,$power){
        $this->volume = $volume;
        $this->manufacturer = $manufacturer;
        $this->power = $power;
    }

    //геттеры
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    public function getPower()
    {
        return $this->power;
    }
    public function getVolume()
    {
        return $this->volume;
    }
}
$CoffeeMachine1 = new CoffeeMachine('Philips',1000,2500);
echo 'Кофемашина '.$CoffeeMachine1->getManufacturer().' c объемом '.$CoffeeMachine1->getVolume().' и мощностью '.$CoffeeMachine1->getPower().'<br>';
$CoffeeMachine1->makingCoffee();
