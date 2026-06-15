<?php
    $pageTitle = "Affiliation";
    require "header.php";
    include "nav.php";
?>

<?php
    $affiliations = array(
        array(
            "organization" => "Alliance of Information Technology Students (AITS)",
            "role" => "Member",
            "year" => "2024 - 2025"
        ),
    );
?>

<div class="container">
    <h2>Affiliation</h2>

    <table>
        <tr>
            <th>Organization</th>
            <th>Role</th>
            <th>Year</th>
        </tr>

        <?php
            foreach ($affiliations as $affiliation) {
                echo "<tr>";
                echo "<td>" . $affiliation["organization"] . "</td>";
                echo "<td>" . $affiliation["role"] . "</td>";
                echo "<td>" . $affiliation["year"] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>

<?php include "footer.php"; ?>