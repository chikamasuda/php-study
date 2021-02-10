<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>送信内容</h1>
  <?php
    $name = $_POST['name'];
    $postal = $_POST['postal'];
    $address = $_POST['address'];
    
    print '名前：' . $name . '<br>';
    print '郵便番号：' . $postal . '<br>';
    print '住所：' . $address . '<br>';
  ?>
</body>
</html>

