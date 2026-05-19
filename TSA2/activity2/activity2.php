<!DOCTYPE html>
<html>
<head>
    <title>[TSA2] Activity 2</title>
    <link rel="stylesheet" href="activity2.css">
</head>
<body>

<div class="container">

    <h1>Activity 2</h1>
    <h2>Volume of Shapes</h2>

    <?php
        define("PI", 3.1416);

        function cubeVolume($side) {
            return $side * $side * $side;
        }

        function rectangularPrismVolume($length, $width, $height) {
            return $length * $width * $height;
        }

        function cylinderVolume($radius, $height) {
            return PI * $radius * $radius * $height;
        }

        function coneVolume($radius, $height) {
            return (PI * $radius * $radius * $height) / 3;
        }

        function sphereVolume($radius) {
            return (4 * PI * $radius * $radius * $radius) / 3;
        }

        $cubeSide = 5;

        $rectLength = 8;
        $rectWidth = 4;
        $rectHeight = 6;

        $cylinderRadius = 3;
        $cylinderHeight = 10;

        $coneRadius = 4;
        $coneHeight = 9;

        $sphereRadius = 6;
    ?>

    <div class="card-container">

        <div class="shape-card">
            <h3>Cube</h3>
            <p><b>Formula:</b> side × side × side</p>
            <p><b>Given:</b> Side = <?php echo $cubeSide; ?></p>
            <p class="answer">Volume = <?php echo cubeVolume($cubeSide); ?> cubic units</p>
        </div>

        <div class="shape-card">
            <h3>Right Rectangular Prism</h3>
            <p><b>Formula:</b> length × width × height</p>
            <p><b>Given:</b> Length = <?php echo $rectLength; ?>, Width = <?php echo $rectWidth; ?>, Height = <?php echo $rectHeight; ?></p>
            <p class="answer">Volume = <?php echo rectangularPrismVolume($rectLength, $rectWidth, $rectHeight); ?> cubic units</p>
        </div>

        <div class="shape-card">
            <h3>Cylinder</h3>
            <p><b>Formula:</b> π × radius² × height</p>
            <p><b>Given:</b> Radius = <?php echo $cylinderRadius; ?>, Height = <?php echo $cylinderHeight; ?></p>
            <p class="answer">Volume = <?php echo cylinderVolume($cylinderRadius, $cylinderHeight); ?> cubic units</p>
        </div>

        <div class="shape-card">
            <h3>Cone</h3>
            <p><b>Formula:</b> π × radius² × height ÷ 3</p>
            <p><b>Given:</b> Radius = <?php echo $coneRadius; ?>, Height = <?php echo $coneHeight; ?></p>
            <p class="answer">Volume = <?php echo coneVolume($coneRadius, $coneHeight); ?> cubic units</p>
        </div>

        <div class="shape-card">
            <h3>Sphere</h3>
            <p><b>Formula:</b> 4 × π × radius³ ÷ 3</p>
            <p><b>Given:</b> Radius = <?php echo $sphereRadius; ?></p>
            <p class="answer">Volume = <?php echo sphereVolume($sphereRadius); ?> cubic units</p>
        </div>

    </div>

</div>

</body>
</html>