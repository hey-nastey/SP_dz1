//бобёр
class beaver{
    //свойства
    private $tail, $teeth, $paws;//хвост, зубки, лапки

    //метод класса
    public function buildDam(){
        /**
         * строить плотину
         */
    }
    public function __construct($tail = 'длинный', $teeth = 'крепкие', $paws = 'короткие'){
    $this->paws=$paws;
    $this->tail=$tail;
    $this->teeth=$teeth;
    }

    public function getPaws()
    {
        return $this->paws;
    }
    public function getTail()
    {
        return $this->tail;
    }
    public function getTeeth()
    {
        return $this->teeth;
    }

}
$bestBeaver = new beaver();
echo 'Хвост: '.$bestBeaver->getTail().'<br>';
echo 'Зубки: '.$bestBeaver->getTeeth().'<br>';
echo 'Лапки: '.$bestBeaver->getPaws();
$bestBeaver->buildDam();
