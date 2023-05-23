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
    
    for($i=1; $i<=10; $i++)
    {
        echo "<td>";
        echo "$i";
        for($j=0; $j < 10; $j++)
        {
            echo "<tr>";
            echo $j;
        }
        
    }
    
    
?>

<table>
</table>

</body>
</html>