<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student Details</title>
</head>

<body bgcolor="pink">
<?php
$link=mysql_connect("localhost","root");
$db=mysql_select_db('depwebsite',$link);
$query="SELECT * FROM update";
$rt=mysql_query($query);
?>
<center>
<h1>STUDENT DETAILS</h1>
<table border=3>
<tr><td>STUDENT ID</td><td>STUDENT NAME</td><td>GENDER</td><td>FATHER NAME</td><td>FATHER MOBILE NO</td><td>PRESENT ADDRESS</td><td>PERMANENT ADDRESS</td>><td>CLASS</td><td>SPECILIZATION</td></tr>
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
