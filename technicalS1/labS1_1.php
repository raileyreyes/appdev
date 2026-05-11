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

    <table>
        <tr>
            <th colspan="2">Personal Information</th>
        </tr>

        <tr>
            <td class="label">Name</td>
            <td><?php echo $name; ?></td>
        </tr>

        <tr>
            <td class="label">Age</td>
            <td><?php echo $age; ?></td>
        </tr>

        <tr>
            <td class="label">Birthday</td>
            <td><?php echo $birthday; ?></td>
        </tr>

        <tr>
            <td class="label">Location</td>
            <td><?php echo $location; ?></td>
        </tr>

        <tr>
            <td class="label">Student Number</td>
            <td><?php echo $studentNumber; ?></td>
        </tr>

        <tr>
            <td class="label">Course</td>
            <td><?php echo $course; ?></td>
        </tr>

        <tr>
            <td class="label">Gender</td>
            <td><?php echo $gender; ?></td>
        </tr>

        <tr>
            <td class="label">Date</td>
            <td><?php echo $date; ?></td>
        </tr>

        <tr>
            <td class="label">Nationality</td>
            <td><?php echo $nationality; ?></td>
        </tr>

    </table>

</div>

</body>
</html>