<!DOCTYPE html>
<html>
<head>
<title>Array Dsiplay</title>
</head>
<body>
<?php
$Fruits=array["Apple"=>1,"Banana"=>2,"Grapefruit"=>3];
$Cars=array["Volkswagen","Ford","Skoda"];
foreach($Cars as $val)
{
print($Cars);
}
array_push=($Fruits,"Mangosteen","Orange");
$Car=array_pop($Cars);
print($Car);
foreach ($Fruits as $key=>$val)
{
echo "The fruits are".$Fruits;
}
?>
</body>
</html>