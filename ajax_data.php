<?
error_reporting(1);
session_start();
require_once"Database/clsuser.php";
$obj=new user();
extract($_REQUEST);


if(isset($checkemail)){
	$sql=$obj->checkemail($email);
	echo mysql_num_rows($sql);
}


	
?>
