<?php require 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php
    define("PAGE_TITLE", "Biography of Jonash De Guia");

    $name = "Jonash De Guia";
    $age = 20;
    $birthday = "December 15, 2005";
    $hobby = "Mixes and makes tracks for fun";
    $course = "BSIT";
    $description = "Jonash is fun to be with and easy to talk to. He enjoys gooning with his friends and making music during his free time.";
?>

<div class="container">
    <div class="bio-card">
        <img src="pics/nash.jpg" alt="Friend 4">

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