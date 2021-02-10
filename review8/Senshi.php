<?php
require_once './Murabito.php';

class Senshi extends Murabito {
  public function __construct($weapon, $body, $head) {
    parent::__construct($weapon, $body, $head);
  }
}

echo "戦士装備" . "<br>";
$murabito = new Senshi("どうのつるぎ", "てつのよろい", "てつのかぶと");
$murabito->equipment();