<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $number= -16;
      echo abs($number);
      echo '<br>';
      echo round($number);
      echo "<br>";
      echo ceil($number);
      echo "<br>";
      echo floor($number);
      echo "<br>";
      echo is_float($number) ? "It's a float" : "It's not a float";
      echo "<br>";
      echo sqrt($number);
      echo "<br>";
      echo rand(1,1000);
    ?>
</body>
</html>
