<?php
require_once './Murabito.php';

class Yusha extends Murabito {
  public function __construct($weapon, $body, $head) {
    parent::__construct($weapon, $body, $head);
  }
}

echo "勇者装備" . "<br>";
$murabito = new Yusha("ひのきのぼう", "ぬののふく", "きのぼうし");
$murabito->equipment();