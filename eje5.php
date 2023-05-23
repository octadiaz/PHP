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
    echo "<table border=1px>";
    echo "<tr>";
    $a = 1;
    
    for($i=1; $a<=10; $i++)
    {
        echo "<td>";
        echo "$a";
        $a = $a + 1;
    }
    
    $b = 1;
    for($i=1; $b<=10; $i++)
    {
        echo "<tr>";
        echo "<td>";
        echo "$b";
        $b = $b + 1;
    }
    
    $c =1;
    for($i=1; $c<=100; $i++)
    {
        echo "$c";
    }
?>

<table>
</table>

</body>
</html>