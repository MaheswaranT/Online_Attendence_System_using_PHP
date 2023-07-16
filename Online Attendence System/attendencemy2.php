<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACKNOWLEDGEMENT</title>
</head>

<body>

<?php
$date=$_POST['date'];
$cls=$_POST['cls'];
$do=$_POST['do'];
$hr=$_POST['hr'];
$sub=$_POST['sub'];
$stn=$_POST['stn'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
$s6=$_POST['s6'];
$s7=$_POST['s7'];
$s8=$_POST['s8'];
$s9=$_POST['s9'];
$s10=$_POST['s10'];



$link=mysql_connect("localhost","root");
$db=mysql_select_db('depwebsite',$link);
$query="INSERT INTO attendence2 VALUES('$date','$cls','$do','$hr','$sub','$stn','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10')";
mysql_query($query);
echo "<script type='text/javascript'>\n";
//echo "alert('you are Succesflly registered');\n";
echo "window.location.href='aprogress.php'\n";
echo "</script>"; 
?>
</body>
</html>
