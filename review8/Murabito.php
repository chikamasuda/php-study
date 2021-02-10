<?php
class Murabito {

  public function __construct($weapon, $body, $head) {
    $this->weapon = $weapon;
    $this->body = $body;
    $this->head = $head;
  }

  public function equipment()
  {
    echo "ぶき：" . $this->weapon . "<br>";
    echo "からだ：" . $this->body . "<br>";
    echo "あたま：" . $this->head . "<br>";
  }
}