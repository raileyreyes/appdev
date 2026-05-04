<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        background-color: #b0b0b0;
        display: flex;
        justify-content: center;
        padding: 40px 20px;
    }
    .page {
        width: 750px;
        min-width: 750px;
        background-color: #ffffff;
        box-shadow: 0 6px 30px rgba(0,0,0,0.35);
    }
</style>
</head>
<body>

<?php
    $first_name  = "Railey";
    $last_name   = "Reyes";
    $job_title   = "Web Developer";
    $email       = "raileyreyes15@email.com";
    $phone       = "+63 956 731 8271";
    $location    = "Cainta, Rizal, Philippines";
    $summary     = "I am a first-year BSIT student at FEU Institute of Technology, passionate about web and mobile development and eager to learn new technologies.";

    $skill1 = "Java";
    $skill2 = "JavaScript";
    $skill3 = "C++";
    $skill4 = "Database";
    $skill5 = "HTML & CSS";

    $job_role    = "Logistics and Media Production Member";
    $job_company = "The Creator Crate";
    $job_period  = "September 2025 - Present";
    $job_desc    = "Manages inventory and serves as videographer for content creation and documentation.";

    $school      = "FEU Institute of Technology";
    $degree      = "BS Information Technology - Web and Mobile Development";
    $school_year = "2024 - Present";
?>

    <!-- PAPER RESUME -->
    <div class="page">

        <!-- HEADER -->
        <div class="header">
            <h1><?php echo $first_name . " " . $last_name; ?></h1>
            <p class="job-title"><?php echo $job_title; ?></p>
            <div class="header-contact">
                <span><?php echo $email; ?></span>
                <span><?php echo $phone; ?></span>
                <span><?php echo $location; ?></span>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="content">

            <!-- PROFILE -->
            <div class="section">
                <h2>Profile</h2>
                <p><?php echo $summary; ?></p>
            </div>

            <!-- SKILLS -->
            <div class="section">
                <h2>Skills</h2>
                <ul> 
                    <li><?php echo $skill1; ?></li>
                    <li><?php echo $skill2; ?></li>
                    <li><?php echo $skill3; ?></li>
                    <li><?php echo $skill4; ?></li>
                    <li><?php echo $skill5; ?></li>
                </ul>
            </div>

            <!-- EXPERIENCE -->
            <div class="section">
                <h2>Experience</h2>
                <h3><?php echo $job_role; ?></h3>
                <p class="meta"><?php echo $job_company . " | " . $job_period; ?></p>
                <p><?php echo $job_desc; ?></p>
            </div>

            <!-- EDUCATION -->
            <div class="section">
                <h2>Education</h2>
                <h3><?php echo $degree; ?></h3>
                <p class="meta"><?php echo $school . " | " . $school_year; ?></p>
            </div>

        </div>

    </div>

</body>
</html>