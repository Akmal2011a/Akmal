<?php


echo "1 dan 10 gacha bo'lgan tub sonlar: ";

for ($i = 2; $i <=67; $i++) {
    $tub = true;

    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $tub = false;
            break;
        }
    }

    if ($tub) {
        echo $i . " ";
    }
}
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
   <h1><?=$i?></h1>
   <hr>
</body>
</html>
