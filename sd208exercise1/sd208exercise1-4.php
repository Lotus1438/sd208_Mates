<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function display() {
        for($i = 1; $i <= 100; $i++){
            if ($i %3 == 0 && $i %5 == 0){
                echo "<br>FizzBuzz<br>";
                
            }
            elseif ($i %3 == 0){
                echo "<br>Fizz<br>";
                
            }
            elseif ($i %5 == 0){
                echo "<br>Buzz<br>";
            
            }
            else
            {
                echo "<br>";
                echo $i;
                echo "<br>";
            }
        }
      }
      display();
      ?> 
</body>
</html>