<?php

require_once './Corporation/Kaihatsu/Yamada.php';
require_once './Corporation/Soumu/Yamada.php';

use \review9\Corporation\Soumu\Yamada;
use \review9\Corporation\Kaihatsu\Yamada as KaihatsuYamada;

$soumu = new Yamada;
echo $soumu->description() . "<br>";

$kaihatsu = new KaihatsuYamada;
echo $kaihatsu->description();