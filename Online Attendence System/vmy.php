<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACKNOWLEDGEMENT</title>
</head>

<body>

<?php

$vote=$_POST['vote'];


$link=mysql_connect("localhost","root");
$db=mysql_select_db('collegeclub',$link);
$query="INSERT INTO vote VALUES('$vote')";
mysql_query($query);
echo "<script type='text/javascript'>\n";
//echo "alert('you are Succesflly registered');\n";
echo "window.location.href='voteprogress.php'\n";
echo "</script>"; 
?>
</body>
</html>
