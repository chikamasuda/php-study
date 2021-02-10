<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>最初のPHP</title>
</head>
<body>
  <?php
    // $score = [
    //   'A' => 50,
    //   'B' => 30,
    //   'C' => 20
    // ];

    // foreach ($score as $name => $val) {
    //   print $name . 'さんの点数は、' . $val . '点です。<br>';
    // }

    // $i = 0;
    // while ($i < 10) {
    //   $i++;
    //   print '$iは、' . $i . 'です。<br>';
    // }

    function change_name ($n) {
      $result = $n . '君';
      return $result;
    }

    $name = 'さとる';
    $name = change_name($name);
    print $name;
  ?>
</body>
</html>