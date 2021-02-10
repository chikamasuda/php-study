<?php
class Car {
    private $owner = '山田太郎';
    protected $cc = 2000;
    public $type = '乗用車';

    public function __construct($owner) {
        $this->owner = $owner;
    }

    public function __destruct() {
        echo '車は壊れました。<br>';
    }
    
    public function run()
    {
        echo $this->owner . 'の' . $this->type . 'が発進しました。<br>';
    }
}
