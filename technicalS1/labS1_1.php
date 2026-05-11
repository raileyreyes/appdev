<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="labS1_1.css">
</head>
<body>
    <?php 
        $name = "Railey Reyes";
        $age = 20;
        $birthday = "June 15, 2005";
        $location = "Cainta";
        $studentNumber = "202410536";
        $course = "BSITWMA";
        $gender = "Male";
        $date = "May 11, 2026";
        $nationality = "Filipino";
    ?>

    <div class="container">
        <h1>Student Registration Form</h1>

        <p><b>Name:</b> <?php echo $name; ?></p>
        <p><b>Age:</b> <?php echo $age; ?></p>
        <p><b>Birthday:</b> <?php echo $birthday; ?></p>
        <p><b>Location:</b> <?php echo $location; ?></p>
        <p><b>Student Number:</b> <?php echo $studentNumber; ?></p>
        <p><b>Course:</b> <?php echo $course; ?></p>
        <p><b>Gender:</b> <?php echo $gender; ?></p>
        <p><b>Date:</b> <?php echo $date; ?></p>
        <p><b>Nationality:</b> <?php echo $nationality; ?></p>
    </div>
</body>
</html>