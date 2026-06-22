<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_information";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbldogs ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="view-container">
    <h2>Dog Records</h2>

    <?php
    if (mysqli_num_rows($result) > 0) {
        $count = 1;

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='dog-card'>";
            echo "<h3>Dog " . $count . "</h3>";
            echo "<p>Name: " . $row['d_name'] . "</p>";
            echo "<p>Breed: " . $row['d_breed'] . "</p>";
            echo "<p>Age: " . $row['d_age'] . "</p>";
            echo "<p>Address: " . $row['d_address'] . "</p>";
            echo "<p>Color: " . $row['d_color'] . "</p>";
            echo "<p>Height: " . $row['d_height'] . "</p>";
            echo "<p>Weight: " . $row['d_weight'] . "</p>";
            echo "</div>";

            $count++;
        }
    } else {
        echo "<p>No dog records found.</p>";
    }
    ?>

    <a href="DogRegister.php" class="link">Add Dog Information</a>
</div>

</body>
</html>