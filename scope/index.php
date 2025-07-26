<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $test="Daniel";
      function myfunction($test)
      {
          static $staticvar=0;
          $staticvar++;
          return $staticvar
      }
      echo myfunction($test);
      echo myfunction($test);

      class Myclass{
        public $var="Hello World";
        public function myfunction(){
          echo $this->var;
        }
      }
    ?>
</body>
</html>
