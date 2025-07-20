<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fruits=['mango','banana','orange'];
        unset($fruits[1]); // This will remove 'banana' from the array)
        echo $fruits[1];

        $tasks=[
            'laundry' => 'Rishabh',
            'trash' => 'Navinya',
            'Grocery' => 'Mayur'
        ];
        echo $tasks['laundry'];
      
        print_r($tasks);

        echo count($tasks);

        sort($tasks);
        print_r($tasks);

        array_push($tasks, 'cleaning');
        array_push($tasks, 'dishwasher');
        print_r($tasks);

        array_splice($fruits,1,0,'kiwi');
        print_r($fruits);
    ?>
</body>
</html>
