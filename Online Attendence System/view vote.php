<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Voting Result</title>
</head>

<body>
<?php
$link=mysql_connect("localhost","root");
$db=mysql_select_db('collegeclub',$link);
$query="SELECT * FROM vote";
$rt=mysql_query($query);
?>
<center>
<h1>VOTING DETAILS</h1>
<table border=3>
<tr><td>VOTE COUNT</td></tr>
<?php
while($row=mysql_fetch_array($rt))
{
echo"<tr>";
echo"<td>".$row['vote'];
echo"</td>";
echo"</tr>";
}
?>
</body>
</html>
