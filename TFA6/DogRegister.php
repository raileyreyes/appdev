<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_information";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

if (isset($_POST['save'])) {
    $name = $_POST['d_name'];
    $breed = $_POST['d_breed'];
    $age = $_POST['d_age'];
    $address = $_POST['d_address'];
    $color = $_POST['d_color'];
    $height = $_POST['d_height'];
    $weight = $_POST['d_weight'];

    $sql = "INSERT INTO tbldogs (d_name, d_breed, d_age, d_address, d_color, d_height, d_weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if (mysqli_query($conn, $sql)) {
        $message = "Dog information saved successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Dog Information</h2>

    <?php
    if ($message != "") {
        echo "<p class='message'>$message</p>";
    }
    ?>

    <form method="POST" action="">
        <label>Name</label>
        <input type="text" name="d_name" required>

        <label>Breed</label>
        <input type="text" name="d_breed" required>

        <label>Age</label>
        <input type="text" name="d_age" required>

        <label>Address</label>
        <input type="text" name="d_address" required>

        <label>Color</label>
        <input type="text" name="d_color" required>

        <label>Height</label>
        <input type="text" name="d_height" required>

        <label>Weight</label>
        <input type="text" name="d_weight" required>

        <button type="submit" name="save">save</button>
    </form>

    <a href="DogView.php" class="link">View Dog Records</a>

    <p class="footer">© Railey Reyes</p>
</div>

</body>
</html>