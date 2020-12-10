<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
    <title>BMI Calculator</title>
</head>
<body>
<form action="result.php" method= "POST">
    <div class="form">
      <h3> ꧁☬ 𝐁𝐌𝐈 𝐂𝐚𝐥𝐜𝐮𝐥𝐚𝐭𝐨𝐫 ☬꧂</h3>
            Height<br>(cm.): <input name = "cm" type = "text" id="cm" value= "" required><br>
            Weight<br>(kg.): <input name = "kg" type = "text" id="kg" value= "" required><br>
            <br>
            <button onclick="computeBmi()" name="btn">Compute BMI</button>
          
    </div>
    </form>
    



</body>
</html>