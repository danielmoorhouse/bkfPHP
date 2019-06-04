
<?php
ob_start();
session_start();
$timezone = date_default_timezone_set("Europe/London");
$con = mysqli_connect("localhost", "dan", "La2Zc!8#", "barry_kinder_db"); // connection variable
if(mysqli_connect_errno())
{
	echo "Failed to connect:" . mysqli_connect_errno();
}
?>