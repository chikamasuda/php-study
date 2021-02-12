<?php
namespace review9\Corporation\Kaihatsu;

class Yamada {
  static public $age = 25;
  protected $hobby = "野球";
  private $name = "山田 花子";

  public function description()
  {
    echo "フルネームは" . $this->name . "です。" . "<br>" . "年齢は、" . self::$age . "歳で、" . "趣味は" . $this->hobby . "です。";
  }
}