<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACKNOWLEDGEMENT</title>
</head>

<body>

<?php
$foliono=$_POST['foliono'];
$name=$_POST['name'];
$ron=$_POST['ron'];
$mno=$_POST['mno'];
$em=$_POST['em'];
$pa=$_POST['pa'];
$pea=$_POST['pea'];



$place=$_POST['place'];
$date=$_POST['date'];
$link=mysql_connect("localhost","root");
$db=mysql_select_db('depwebsite',$link);
$query="INSERT INTO staff VALUES('$foliono','$name','$ron','$mno','$em','$pa','$pea','$place','$date')";
mysql_query($query);
echo "<script type='text/javascript'>\n";
//echo "alert('you are Succesflly registered');\n";
echo "window.location.href='vprogress up.php'\n";
echo "</script>"; 
?>
</body>
</html>
