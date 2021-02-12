<?php
namespace review9\Corporation\Soumu;

class Yamada {
  static public $age = 27;
  protected $hobby = "サッカー";
  private $name = "山田 太郎";

  public function description()
  {
    echo "フルネームは" . $this->name . "です。" . "<br>" . "年齢は、" . self::$age . "歳で、" . "趣味は" . $this->hobby . "です。";
  }
}