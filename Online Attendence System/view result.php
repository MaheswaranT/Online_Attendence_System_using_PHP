<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Canteen Bill Details</title>
</head>

<body>
<?php
$link=mysql_connect("localhost","root");
$db=mysql_select_db('schoolwebsite',$link);
$query="SELECT * FROM icon";
$rt=mysql_query($query);
?>
<center>
<h1>CANTEEN BILL DETAILS</h1>
<table border=3>
<tr><td>Folio No</td><td>Diner Id</td><td>Diner Type</td><td>Server Id</td><td>Item Pariculars</td><td>Date</td><td>Total Amount</td></tr>
<?php
while($row=mysql_fetch_array($rt))
{
echo"<tr>";
echo"<td>".$row['name'];
echo"</td>";
echo"<td>".$row['ron'];
echo"</td>";
echo"<td>".$row['mno'];
echo"</td>";
echo"<td>".$row['em'];
echo"</td>";
echo"<td>".$row['date'];
echo"</td>";
echo"<td>".$row['vote'];
echo"</td>";
echo"<td>".$row['place'];
echo"</td>";
echo"</tr>";
}
?>
</body>
</html>
