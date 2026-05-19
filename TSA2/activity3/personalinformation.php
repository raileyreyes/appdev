<?php
    $pageTitle = "Personal Information";
    require "header.php";
    include "nav.php";
?>

<?php
    $fullName = "Railey Reyes";
    $age = 19;
    $birthday = "June 15, 2005";
    $gender = "Male";
    $address = "Cainta, Rizal, Philippines";
    $email = "raileyreyes15@gmail.com";
    $contact = "0956-731-8271";
    $nationality = "Filipino";
?>

<div class="container">
    <h2>Personal Information</h2>

    <table>
        <tr>
            <th>Information</th>
            <th>Details</th>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><?php echo $fullName; ?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td><?php echo $birthday; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td><?php echo $contact; ?></td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td><?php echo $nationality; ?></td>
        </tr>
    </table>
</div>

<?php include "footer.php"; ?>