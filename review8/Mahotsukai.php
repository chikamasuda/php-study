<?php
require_once './Murabito.php';

class Mahotsukai extends Murabito {
  public function __construct($weapon, $body, $head) {
    parent::__construct($weapon, $body, $head);
  }
}

echo "魔法使い装備" . "<br>";
$murabito = new Mahotsukai("きのつえ", "ぬののふく", "ぬののぼうし");
$murabito->equipment();