<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleslab3.css">
    <title>Two-Digit Combinations</title>
</head>
<body>
    <div class="wrapper">
        <h1>Two-Digit Decimal Combinations</h1>
        <p class="subtitle">Using Looping Statements</p>

        <div class="container">
            <h2>All Combinations from 00 to 99</h2>
            
            <div class="output-box">
                <?php
                    // using looping statements to generate all two-digit combinations
                    $combinations = array();
                    
                    // outer loop for tens digit
                    for ($tens = 0; $tens < 10; $tens++) {
                        // inner loop for ones digit
                        for ($ones = 0; $ones < 10; $ones++) {
                            // format number with leading zeros
                            $number = str_pad($tens . $ones, 2, "0", STR_PAD_LEFT);
                            $combinations[] = $number;
                        }
                    }
                    
                    // print output
                    echo implode(", ", $combinations) . ",";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
