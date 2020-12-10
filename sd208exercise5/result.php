<?php
session_start();

if (isset($_POST['btn'])) { 
    $height = $_POST['cm'];
    $weight = $_POST['kg'];


    $height = $height /100;
    $total =($height * $height );
    $bmi = $weight/$total;
    
    
    if ($bmi <= 18.5) {
        $output = "You are Under Weight";
    
    } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
        $output = "You are Normal";
    
    } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $output = "You are Over Weight";
    
    } else if ($bmi > 30.0) {
        $output = "You are OBESE";
    }
    
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href= "style.css">
    <title>BMI Calculator</title>
</head>
<body>
<form action="index.php">
    <div class="form" method= "post">
           <h3>꧁☬ 𝐑𝐞𝐬𝐮𝐥𝐭 ☬꧂</h3>
           <br>
           <p><?php echo $bmi; ?></p>
           <p><?php echo $output;   ?> </p>
            <button name = "button">Back to Calculator</button>
    </div>
    </form>
</body>
</html>




