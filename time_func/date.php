<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo date("Y-m-d H:i:s");
      echo "<br>"; 
      echo time();
      $date="2025-010-1 12:00:00";
      echo "<br>";
      echo strtotime($date);
    ?>
</body>
</html>
