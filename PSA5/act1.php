<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <h1>Personal Information</h1>
    <p class="subtitle">Using $_POST Function</p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label> First Name: </label>
        <input type="text" name="firstname" required>

        <label> Middle Name: </label>
        <input type="text" name="middlename" required>

        <label> Last Name: </label>
        <input type="text" name="lastname" required>

        <label> Date of Birth: </label>
        <input type="text" name="dob" required>

        <label> Address:</label>
        <input type="text" name="address" required>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            echo "<div class='result'>";
            echo "<h2>Submitted Information:</h2>";
            echo "First Name: " . $_POST['firstname'] . "<br>";
            echo "Middle Name: " . $_POST['middlename'] . "<br>";
            echo "Last Name: " . $_POST['lastname'] . "<br>";
            echo "Date of Birth: " . $_POST['dob'] . "<br>";
            echo "Address: " . $_POST['address'] . "<br>";
            echo "</div>";
        }
        ?>
</div>

<div class="container">
    <h1>Personal Information</h1>
    <p class="subtitle">Using $_GET Function</p>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label> First Name: </label>
        <input type="text" name="firstname" required>

        <label> Middle Name: </label>
        <input type="text" name="middlename" required>

        <label> Last Name: </label>
        <input type="text" name="lastname" required>

        <label> Date of Birth: </label>
        <input type="text" name="dob" required>

        <label> Address:</label>
        <input type="text" name="address" required>

        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
        if (isset($_GET['submit'])) {
            echo "<div class='result'>";
            echo "<h2>Submitted Information:</h2>";
            echo "First Name: " . $_GET['firstname'] . "<br>";
            echo "Middle Name: " . $_GET['middlename'] . "<br>";
            echo "Last Name: " . $_GET['lastname'] . "<br>";
            echo "Date of Birth: " . $_GET['dob'] . "<br>";
            echo "Address: " . $_GET['address'] . "<br>";
            echo "</div>";
        }
    ?>
</div>

</body>
</html>