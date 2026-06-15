<?php require 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php
    define("PAGE_TITLE", "Biography of Miguel Garcia");

    $name = "Miguel Garcia";
    $age = 20;
    $birthday = "July 18, 2005";
    $hobby = "Playing video games";
    $course = "BSIT";
    $description = "Miguel, a.k.a \"Pard Ong\" is a cheerful and friendly person. He likes spending time with his friends and enjoys playing games during his free time.";
?>

<div class="container">
    <div class="bio-card">
        <img src="pics/mico.jpg" alt="Friend 1">

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