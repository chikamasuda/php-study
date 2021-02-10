<?php
require_once './Car.php';

class SuperCar extends Car {
    public function __construct($owner) {
        parent::__construct($owner);
        $this->cc = 6000;
    }

    public function run()
    {
        echo $this->cc . 'ccの' . $this->type . 'が爆速で発進しました。<br>';
    }
}
