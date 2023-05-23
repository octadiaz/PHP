<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 1;
    while ($x > 0 and $x <= 10)
    {
        echo $x;
        $x = $x + 1;
    }
    
    echo "<br>";

    $y = 1;
    for ($i = 1; $y <= 10; $i++)
    {
        echo $y;
        $y = $y + 1;
    }
    ?>
</body>
</html>