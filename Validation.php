<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Form</title>
</head>
<body>
<?php
extract($_POST);
if(!ereg("^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$",$Phone));
{
print(<p><span style=\"color:red">
INVALID PHONE NUMBER</span><br\>
A valid phone number is in the form
<strong>(555)555-5555</strong><br\>
<span style=\"color:blue\">
Click the back button and please re-enter phone number
<br>
</br>
Thank you</span>
</p>
</body>
</html>");
die();
}
?>
<p>Hello
<strong>
<span style:"color:blue">
<?php print($FirstName);
?>
</strong>
you have completed the survey
<br>
You have been added to the
<strong>
<span style="color:blue">
<?php print($book);
?>
</strong>
mailing list
</p>
<br>
<p><strong>The following data has been stored to our database</strong></p>
<table border="2">
<tr>
<td bgcolor:"#d000000">Name</td>
<td bgcolor:"#d000001">Email</td>
<td bgcolor:"#d0000002">Phone</td>
</tr>
<?php
print("<td>$FirstName $Surname</td>
<td>$email</td>
<td>$phone</td>
");
?>
</table>
<div>
You have been added to the mailing form
</div>
</body>
</html>