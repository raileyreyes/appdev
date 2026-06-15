<?php
if (isset($_POST['submit'])) {
    setcookie("firstname", $_POST['firstname'], time() + 10);
    setcookie("middlename", $_POST['middlename'], time() + 20);
    setcookie("lastname", $_POST['lastname'], time() + 30);

    header("Refresh: 0");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="container">
        <h1>Personal Information</h1>
        <p class="subtitle">Using Cookies</p>

        <form method="post">

            <label> First Name: </label>
            <input type="text" name="firstname" required>

            <label> Middle Name: </label>
            <input type="text" name="middlename" required>

            <label> Last Name: </label>
            <input type="text" name="lastname" required>

            <input type="submit" name="submit" value="Save Cookies">
        </form>
    
    <div class="result">

        <h2> Cookie Values </h2>

        <?php

        if(isset($_COOKIE['firstname']))
            echo "First Name: " . $_COOKIE['firstname'] . "<br>";
        else
            echo "First Name: Waiting for 10 seconds...<br>";

        if(isset($_COOKIE['middlename']))
            echo "Middle Name: " . $_COOKIE['middlename'] . "<br>";
        else
            echo "Middle Name: Waiting for 20 seconds...<br>";

        if(isset($_COOKIE['lastname']))
            echo "Last Name: " . $_COOKIE['lastname'] . "<br>";
        else 
            echo "Last Name: Waiting for 30 seconds...<br>";
    ?>

    </div>
</div>

</body>
</html>