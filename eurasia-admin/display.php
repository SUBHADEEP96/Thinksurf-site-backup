<?php
include_once('connection.php');
 $query="select * from student";
 $result=mysql_query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>display</title>

</head>
<body>
	<table>
		<tr>
		<th><h2>studentr record</h2></th>
	    </tr>
	    <t>
		<th>ID</th>
		<th>NAME</th>
		<th>Email</th>
		<th>Country</th>
	</t>
</table>

</body>
</html>