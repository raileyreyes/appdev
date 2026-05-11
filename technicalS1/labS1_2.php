<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="labS1_2.css">
</head>
<body>
    <h1>Multiplication Table</h1>
    <table>
        <?php
            for ($row = 0; $row <= 10; $row++) {
                echo "<tr>";

                for ($col = 0; $col <= 10; $col++) {
                    $answer = $row * $col;

                    if (($row + $col) % 2 == 0) {
                        echo "<td class='yellow'>$answer</td>";
                    } else {
                        echo "<td class='green'>$answer</td>";
                    }
                }

                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>