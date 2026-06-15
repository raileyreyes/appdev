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
            $firstname = $_GET['firstname'];
            $middlename = $_GET['middlename'];
            $lastname = $_GET['lastname'];
            $dob = $_GET['dob'];
            $address = $_GET['address'];

            echo "<h2>Personal Information:</h2>";
            echo "<p><strong>First Name:</strong> " . $_GET['firstname'] . "</p>";
            echo "<p><strong>Middle Name:</strong> " . $_GET['middlename'] . "</p>";
            echo "<p><strong>Last Name:</strong> " . $_GET['lastname'] . "</p>";
            echo "<p><strong>Date of Birth:</strong> " . $_GET['dob'] . "</p>";
            echo "<p><strong>Address:</strong> " . $_GET['address'] . "</p>";
            echo "</div>";
        }
    ?>
</div>

</body>
</html>