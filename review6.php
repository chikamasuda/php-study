<?php
function calc_tax($price, $kind = null) {
  if ($kind !== null) {
    $price =  $price * 1.1;
  } else {
    $price = $price * 1.08;
  }
  return $price;
}

$total_price = calc_tax(100, 'eat');
print $total_price;