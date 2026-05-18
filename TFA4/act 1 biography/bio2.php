<?php require 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php
    define("PAGE_TITLE", "Biography of Kelly Medalla");

    $name = "Kelly Medalla";
    $age = 34;
    $birthday = "July 8, 1992";
    $hobby = "Loves hunting monsters";
    $course = "BSIT";
    $description = "Kelly is a hunter from Brooksville, He likes slaying monsters from wild lands in Cainta, Rizal. Let us thank Kelly for keeping us safe!";
?>

<div class="container">
    <div class="bio-card">
        <img src="pics/kelly.jpg" alt="Friend 2">

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