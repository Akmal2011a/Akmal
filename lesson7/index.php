<?php

 


$n=20;


function va($num) {
    if ($num<2)return false;
    if ($num==2)return true;
    if ($num%2==0)return false;

    for ($i=3;$i*$i<=$num;$i+=2) {
        if($num%$i==0)return false;
    }
    return true;
}


$count = 0;
for ($i = 2; $i <= $n; $i++) {
    if (va($i)) {
        $count++;
    }
}

echo "$n jami tub sonlar: $count";

?>






















































































<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
    <style>
      body{
         background-color: green; 
      }
      h1{
         color:red;
         border: 10px solid black;
         border-radius:50px; 
         text-align:center;
         padding:40px;
         background-color:blue;
      }
    </style>
</head>
<body><br><br><br><br><br><br><br><br><br><br>

    <hr>
   <h1><?=$count?></h1> 
   <!-- <hr>
</body>
</html> 
