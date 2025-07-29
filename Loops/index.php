<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i=0;$i<=10;$i++){
            echo "The iteration number is " . &i ."<br";
        }
        $test=5;
        while($test <10){
            echo $test;
            $test++;
        }
        $fruits=array("Apple", "Banana", "Cherry");
        foreach($fruits as $fruit){
            echo "This is a fruit: " .$fruit ."<br>";
        }
    ?>
</body>
</html>
