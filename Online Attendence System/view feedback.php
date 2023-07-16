<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Exercise Details</title>
</head>

<body bgcolor="pink">
<?php
$link=mysql_connect("localhost","root");
$db=mysql_select_db('depwebsite',$link);
$query="SELECT * FROM feedback";
$rt=mysql_query($query);
?>
<center>
<h1>EXERCISE DETAILS</h1>
<table border=3>
<tr><td>Trainer Id</td><td>Exercise Name</td><td>Exercise Type</td><td>Equipment Name</td><td>Useful For</td><td>Exercise For</td><td>Exercise Explanation</td>><td>Not Applicable For</td><td>Exercise Timing</td></tr>
<?php
while($row=mysql_fetch_array($rt))
{
echo"<tr>";
echo"<td>".$row['foliono'];
echo"</td>";
echo"<td>".$row['name'];
echo"</td>";
echo"<td>".$row['ron'];
echo"</td>";
echo"<td>".$row['mno'];
echo"</td>";
echo"<td>".$row['em'];
echo"</td>";
echo"<td>".$row['pa'];
echo"</td>";
echo"<td>".$row['pea'];
echo"</td>";
echo"<td>".$row['place'];
echo"</td>";
echo"<td>".$row['date'];
echo"</td></tr>";
}
?>
</body>
</html>
