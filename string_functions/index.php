<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $String = "Hello, World!";
       echo strlen($String);
       echo "<br>";
       echo str_word_count($String);
       echo '<br>';
       echo strpos($String,'o'); 
       echo "<br>";
       echo str_replace("World","PHP",$String);
       echo "<br>";
       echo strtolower($String);
       echo "<br>";
       echo strtoupper($String);
       echo "<br>";
       echo substr($String,2,-2);
       echo "<br>";
       echo trim("     Hello, World!     ");
       echo "<br>";
       $str = "Hello world. It's a beautiful day.";
       print_r (explode(" ",$str));
    ?>
</body>
</html>
