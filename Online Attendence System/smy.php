<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACKNOWLEDGEMENT</title>
</head>

<body>

<?php

$name=$_POST['name'];
$ron=$_POST['ron'];
$mno=$_POST['mno'];
$em=$_POST['em'];
$date=$_POST['date'];
$vote=$_POST['vote'];
$place=$_POST['place'];

$link=mysql_connect("localhost","root");
$db=mysql_select_db('schoolwebsite,$link);
$query="INSERT INTO icon VALUES('$name','$ron','$mno','$em','$date','$vote','$place')";
mysql_query($query);
echo "<script type='text/javascript'>\n";
//echo "alert('you are Succesflly registered');\n";
echo "window.location.href=sprogress.php'\n";
echo "</script>"; 
?>
</body>
</html>
