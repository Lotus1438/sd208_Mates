<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


    
        $str = "Hello, woRLd, 1438 ! 2001 good & morning!";
       function countWords($str){ 
         $arr = explode(" " , $str);
          $unique = [];
          foreach ($arr as $el){
            $key = strtolower($el);
            if (array_key_exists($key , $unique)){
           
              $value = $unique[$key];
              $unique[$key] = ++$value;
            }else{
       
              $unique[$key] = 1;
            }
          }
          return $unique;
        }
        print_r(countWords($str));
      
      
    
 ?>    
</body>
</html>