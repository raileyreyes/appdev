<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[TFA3] Activity 3</title>
    <link rel="stylesheet" href="act3.css">
</head>
<body>
    <h1>Activity 3: User Defined Functions</h1>
    <?php

    $num1 = 10;
    $num2 = 5;
    $num3 =2;

    function calculateNum($a, $b, $c) {
        $sum = $a + $b + $c;
        $difference = $a - $b - $c;
        $product = $a * $b * $c;
        $quotient = $a / $b / $c;
        
        echo"<table>";

        echo"<tr>";
        echo"<th colspan='2'>Given Numbers: $a, $b, $c</th>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Addition</td>";
        echo"<td>$sum</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Subtraction</td>";
        echo"<td>$difference</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Multiplication</td>";
        echo"<td>$product</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Division</td>";
        echo"<td>$quotient</td>";
        echo"</tr>";

        echo"</table>";
    }

    calculateNum($num1, $num2, $num3);
    ?>
    
</body>
</html>