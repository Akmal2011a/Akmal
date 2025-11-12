<?php

function salom ($ism){
return "salom " . $ism;
}
$ism="Akmal ";
echo salom ($ism);


   

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
   <h1><?=$ism?></h1>
   <hr>
</body>
</html>
