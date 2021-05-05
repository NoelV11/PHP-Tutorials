<? php
if($_GET["Name"]||$_GET["Age"])
{
echo "Welcome".$_GET["Name"];
echo "You are".$_GET["Age"]."years old";
exit();
}
<html>
<head>
<title>$ _GET method</title>
</head>
<body>
<form action="<? php $_PHP_SELF?>" method="GET">
Name<input type="text">
Age<input type="number">
<input type="submit">
<input type="reset">
</form>
</body>
</html>