<!DOCTYPE html>
<html>
<head>
    <title>Activity 2: String Functions</title>
    <link rel="stylesheet" href="act_two.css">
</head>
<body>

<div class="container">

    <h1>Activity 2</h1>
    <h2>PHP String Functions</h2>

    <?php
        $names = array(
            "Railey Reyes",
            "Miguel Garcia",
            "Karl Francisco",
            "Inigo Frayna",
            "Andreu Penaflorida",
            "Janrie Oasan",
            "Romar Lising",
            "Ozzy Florendo",
            "Marcus Ramirez",
            "Jz Cordero",
            "Aerick Alba",
            "Hannah Go",
            "Alleana Cruz",
            "Angela Blancaflor",
            "Francesca Caguioa",
            "Danica Mina",
            "Tine Sarzuelo",
            "Ann Esquivas",
            "Fiona Rivas",
            "Mona Baluyot"
        );
    ?>
    
    <table>
        <tr>
            <th>Name</th>
            <th>Number of Characters</th>
            <th>Uppercase First Character</th>
            <th>Replace Vowels with @</th>
            <th>Position of Letter "a"</th>
            <th>Reverse Name</th>
        </tr>

        <?php
            foreach ($names as $name) {
                $characters = strlen($name);
                $uppercaseName = ucfirst($name);
                $replaceVowels = str_replace(
                    array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U"),
                    "@",
                    $name
                );

                $positionA = stripos($name, "a");

                if ($positionA === false) {
                    $positionA = "Not found";
                }

                $reverseName = strrev($name);

                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$characters</td>";
                echo "<td>$uppercaseName</td>";
                echo "<td>$replaceVowels</td>";
                echo "<td>$positionA</td>";
                echo "<td>$reverseName</td>";
                echo "</tr>";
            }
        ?>
    </table>

</div>

</body>
</html>