<?php
    $pageTitle = "Career Objective";
    require "header.php";
    include "nav.php";
?>

<?php
    $careerObjective = "To become familiar and skilled with web development and programming. To be specific, I want to be a UI/UX designer and a front-end developer. I want to create visually appealing and user-friendly websites that provide an excellent user experience. I am eager to learn and grow in this field, and I am committed to continuously improving my skills and knowledge.";
?>

<div class="container">
    <h2>Career Objective</h2>

    <div class="content-box">
        <p><?php echo $careerObjective; ?></p>
    </div>
</div>

<?php include "footer.php"; ?>