<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faculty Details</title>
</head>

<body>
<?php
$link=mysql_connect("localhost","root");
$db=mysql_select_db('depwebsite',$link);
$query="SELECT * FROM attendence";
$rt=mysql_query($query);
?>
<center>

<h1>ATTENDENCE DETAILS</h1>
<table border=3>
<tr><td>Date</td><td>Class</td><td>Day Order</td><td>Hour</td><td>Subject</td><td>Staff Name</td><td>20BCA001</td>><td>20BCA002</td><td>20BCA003</td>><td>20BCA004</td><td>20BCA005</td>><td>20BCA006</td><td>20BCA007</td>><td>20BCA008</td><td>20BCA009</td>><td>20BCA010</td></tr>
<?php
while($row=mysql_fetch_array($rt))
{
echo"<tr>";
echo"<td>".$row['date'];
echo"</td>";
echo"<td>".$row['cls'];
echo"</td>";
echo"<td>".$row['do'];
echo"</td>";
echo"<td>".$row['hr'];
echo"</td>";
echo"<td>".$row['sub'];
echo"</td>";
echo"<td>".$row['stn'];
echo"</td>";
echo"<td>".$row['s1'];
echo"</td>";
echo"<td>".$row['s2'];
echo"</td>";
echo"<td>".$row['s3'];
echo"</td>";
echo"<td>".$row['s4'];
echo"</td>";
echo"<td>".$row['s5'];
echo"</td>";
echo"<td>".$row['s6'];
echo"</td>";
echo"<td>".$row['s7'];
echo"</td>";
echo"<td>".$row['s8'];
echo"</td>";
echo"<td>".$row['s9'];
echo"</td>";
echo"<td>".$row['s10'];
echo"</td></tr>";


}
?>
</body>
</html>
