<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[TFA3] Activity 2</title>
    <link rel="stylesheet" href="act2.css">
</head>
<body>
    <h1>Activity 2: Array Numbers </h1>
    <?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    $sum = 0;
    $difference = $numbers[0];
    $product = 1;
    $quotient = $numbers[0];

    foreach($numbers as $number) {
        $sum = $sum + $number;
        $product = $product * $number;
    }
    for($i = 1; $i < count($numbers); $i++) {
        $difference = $difference - $numbers[$i];
        $quotient = $quotient / $numbers[$i];
    }
    ?>

    <table>
        <tr>
            <th colspan ="2">
                Array List:
                <?php foreach($numbers as $number) {
                     echo $number . " "; } ?>
            </th>
        </tr>
        
        <tr>
            <td>Addition</td>
            <td><?php echo $sum; ?></td>
        </tr>

        <tr>
            <td>Subtraction</td>
            <td><?php echo $difference; ?></td>
        </tr>

        <tr>
            <td>Multiplication</td>
            <td><?php echo $product; ?></td>
        </tr>

        <tr>
            <td>Division</td>
            <td><?php echo $quotient; ?></td>
        </tr>
    </table>
    
</body>
</html>