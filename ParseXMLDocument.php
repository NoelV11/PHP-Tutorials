<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$note=<<XML;
<root>
<first>Favourite</first>
<second>Snake</second>
<Third>Tree</third>
</root>
$xml=simplexml_load_string($note);
print_r($xml);
?>
</body>
</html>