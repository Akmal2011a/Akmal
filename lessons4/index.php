<?php
$arr=array(
array(1,3,4,6,78,98,345),
array(1,3,4,6,78,98,14,54,7,345),
array(1,3,4,6,78,98,321,454,345)
);

$arr[2][]=7;
for($i=0; $i<count($arr); $i++){
    $u=count($arr[$i]);
    for($j=0; $j<$u; $j++)
    echo $arr[$i][$j].".";

}
echo "<br>"











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
         padding: 20px;
         background-color:blue;
      }
    </style>
</head>
<body>
   <h1><?=$s?></h1>
</body>
</html>





