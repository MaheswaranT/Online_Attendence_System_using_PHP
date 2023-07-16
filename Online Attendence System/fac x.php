<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search</title>
</head>

<body bgcolor="pink">
<?php
$foliono=$_POST['foliono'];
$link=mysql_connect("localhost","root");
$db=mysql_select_db('depwebsite',$link);
$query="SELECT * FROM vechicle";
$rt=mysql_query($query);
?>
<center>
<h1>FACULTY SEARCH DETAILS</h1>
<table border=3>
<tr><td>Faculty Id</td><td>Faculty Name</td><td>Sex</td><td>Mobile No</td><td>Email id</td><td>Present Address</td><td>Permanent Address</td>><td>Designation</td><td>Qualification</td></tr>
<?php
while($row=mysql_fetch_array($rt))
{
if($row['foliono']==$foliono)
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
}
?>

</table>
</body>
</html>
