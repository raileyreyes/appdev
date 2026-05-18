
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[TFA3] Activity 1</title>
    <link rel="stylesheet" href="act1.css">
</head>
<body>
    <?php 
     $students = array(
        array("name" => "Railey Reyes", "image" => "images/railey.png", "age" => 20, "birthday" => "June 15, 2005", "contact" => "09123456789"),
        array("name" => "Nash De Guia", "image" => "images/nash.png", "age" => 22, "birthday" => "March 22, 2005", "contact" => "09123456789"),
        array("name" => "Romar Lising", "image" => "images/romar.png", "age" => 19, "birthday" => "October 10, 2005", "contact" => "09123456789"),
        array("name" => "Jz Cordero", "image" => "images/jz.png", "age" => 21, "birthday" => "December 5, 2002", "contact" => "09123456789"),
        array("name" => "Aerick Alba", "image" => "images/aerick.png", "age" => 20, "birthday" => "August 30, 2004", "contact" => "09123456789"),

        array("name" => "Marcus Ramirez", "image" => "images/marcus.png", "age" => 20, "birthday" => "June 6, 2005", "contact" => "09123456789"),
        array("name" => "Mozziel Florendo", "image" => "images/mozziel.png", "age" => 22, "birthday" => "March 21, 2005", "contact" => "09123456789"),
        array("name" => "Fort Pabalate", "image" => "images/fort.png", "age" => 19, "birthday" => "October 13, 2005", "contact" => "09123456789"),
        array("name" => "Stephen Curry", "image" => "images/stephen.png", "age" => 21, "birthday" => "December 27, 2008", "contact" => "09123456789"),
        array("name" => "Bronny James Jr.", "image" => "images/bronny.png", "age" => 20, "birthday" => "August 7, 2009", "contact" => "09123456789")
     );

     sort($students);
     ?>

     <table> 
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>

        <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><img src="<?php echo $student['image']; ?>" alt="<?php echo $student['name']; ?>"></td>
            <td><?php echo $student['age']; ?></td>
            <td><?php echo $student['birthday']; ?></td>
            <td><?php echo $student['contact']; ?></td>
        </tr>
        <?php } ?>
     
     
     </table>
    
</body>
</html>