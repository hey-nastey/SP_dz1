<?php
//бобёр
class beaver{
    //хвост, зубки, лапки
    public $tail, $teeth, $paws;

    public function __construct($tail, $teeth, $paws){
        $this->paws=$paws;
        $this->tail=$tail;
        $this->teeth=$teeth;
    }

    public function buildDam(){
        /**
         * строить плотину
         */
    }
}
$myBeaver = new beaver();
$myBeaver->buildDam();