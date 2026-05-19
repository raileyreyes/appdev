<?php
    $pageTitle = "Skills";
    require "header.php";
    include "nav.php";
?>

<?php
    $skills = array(
        "Basic PHP Programming",
        "HTML and CSS Web Design",
        "Problem Solving",
        "Teamwork",
        "Time Management",
        "Basic Computer Troubleshooting"
    );
?>

<div class="container">
    <h2>Skills</h2>

    <div class="list-box">
        <?php
            foreach ($skills as $skill) {
                echo "<div class='item'>" . $skill . "</div>";
            }
        ?>
    </div>
</div>

<?php include "footer.php"; ?>