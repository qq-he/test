<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8" />
    <title>参数加法和减法示例</title>  
</head>  
<body>  
<?php  
        //Adding two numbers  
         function add($x, $y) {  
            $sum = $x + $y;  
            echo "Sum of two numbers is = $sum <br><br>";  
         }   
         add(300, 700);  

         //Subtracting two numbers  
         function sub($x, $y) {  
            $diff = $x - $y;  
            echo "Difference between two numbers is = $diff";  
         }   
         sub(1000, 500);  
      ?>  
</body>  
</html>