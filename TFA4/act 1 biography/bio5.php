<?php require 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php
    define("PAGE_TITLE", "Biography of Hannah Go");

    $name = "Hannah Go";
    $age = 18;
    $birthday = "July 7, 2007";
    $hobby = "Loves making fun of Railey Reyes";
    $course = "BSN";
    $description = "Hannah loves her boyfriend, Railey Reyes. She is a loving and playful person <3.";
?>

<div class="container">
    <div class="bio-card">
        <img src="pics/hannah.jpg" alt="Friend 5">

        <div class="bio-info">
            <h2><?php echo PAGE_TITLE; ?></h2>
            <p><b>Name:</b> <?php echo $name; ?></p>
            <p><b>Age:</b> <?php echo $age; ?></p>
            <p><b>Birthday:</b> <?php echo $birthday; ?></p>
            <p><b>Course:</b> <?php echo $course; ?></p>
            <p><b>Hobby:</b> <?php echo $hobby; ?></p>
            <p><b>Description:</b> <?php echo $description; ?></p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>