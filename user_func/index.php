<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function sayHello($name="Aakash"){
        echo "Hello, " .$name."!";
      }
      $test=sayHello("Rishabh");
      echo $test;
      echo "<br>";
      function calculator(int $num1,int $num2){
        return $num1 + $num2;
      }
      $result = calculator(5, 10);
      echo "The result of the calculation is: " . $result;
    ?>
</body>
</html>
