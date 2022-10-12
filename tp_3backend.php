<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>1.</h2>
    <?php
    $contador = 1; 
    $lim = 100; 
    while($contador <= $lim){ 
    echo $contador . '-'; 
    $contador++; 
    } 
   ?> 

   <h2>2.</h2>

    <?php
    $contador = 100; 
    $lim = 1; 
    while($contador >= $lim){ 
    echo $contador . '-'; 
    $contador--; 
    } 
   ?> 
   <h2>3.</h2>
   
   <?php
   
   for($n = 1; $n <= 100; $n++)
   {
       if($n % 2 == 0)
       {
            echo $n . '-';
       }
   }
   ?>

   


</body>
</html>