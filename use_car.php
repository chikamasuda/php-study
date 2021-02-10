<?php
require_once './SuperCar.php';

$car = new SuperCar('佐藤二朗');
$car->type = 'スポーツカー';
$car->run();
echo "まだまだ走れる！<br>";
