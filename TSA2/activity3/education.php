<?php
    $pageTitle = "Educational Attainment";
    require "header.php";
    include "nav.php";
?>

<?php
    $education = array(
        array(
            "level" => "Elementary",
            "school" => "Sacred Heart Academy of Pasig",
            "year" => "2012 - 2018"
        ),
        array(
            "level" => "Junior High School",
            "school" => "Escuela de. Sto. Rosario",
            "year" => "2018 - 2022"
        ),
        array(
            "level" => "Senior High School",
            "school" => "Lorenzo Ruiz de Manila School",
            "year" => "2022 - 2024"
        ),
        array(
            "level" => "College",
            "school" => "FEU Institute of Technology",
            "year" => "2024 - Present"
        )
    );
?>

<div class="container">
    <h2>Educational Attainment</h2>

    <table>
        <tr>
            <th>Level</th>
            <th>School</th>
            <th>Year</th>
        </tr>

        <?php
            foreach ($education as $school) {
                echo "<tr>";
                echo "<td>" . $school["level"] . "</td>";
                echo "<td>" . $school["school"] . "</td>";
                echo "<td>" . $school["year"] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>

<?php include "footer.php"; ?>