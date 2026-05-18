<?php require 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php
    define("PAGE_TITLE", "Biography of Romar Lising");

    $name = "Romar Lising";
    $age = 20;
    $birthday = "July 24, 2006";
    $hobby = "Loves shooting homeless people";
    $course = "BSIT";
    $description = "Romar loves shooting homeless people in the streets of Manila. He is a very kind and generous person.";
?>

<div class="container">
    <div class="bio-card">
        <img src="pics/romar.jpg" alt="Friend 3">

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