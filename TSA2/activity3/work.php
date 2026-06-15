<?php
    $pageTitle = "Work Experience";
    require "header.php";
    include "nav.php";
?>

<?php
    $workExperience = array(
        array(
            "position" => "Videographer",
            "company" => "The Creator Crate",
            "description" => "Films and shoots events, creates video content for social media, and assists in editing videos for the company."
        ),
        array(
            "position" => "Inventory Coordinator Head",
            "company" => "The Creator Crate",
            "description" => "Manages and organizes the inventory of the company, ensuring that all materials and products are properly stored and accounted for."
        )
    );
?>

<div class="container">
    <h2>Work Experience</h2>

    <?php
        foreach ($workExperience as $work) {
            echo "<div class='content-box'>";
            echo "<h3>" . $work["position"] . "</h3>";
            echo "<p><b>Company/Project:</b> " . $work["company"] . "</p>";
            echo "<p>" . $work["description"] . "</p>";
            echo "</div>";
        }
    ?>
</div>

<?php include "footer.php"; ?>