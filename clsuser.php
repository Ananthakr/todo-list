<?
require_once"clsdatabase.php";
class user extends database
{
function user()
{
parent::database();
}


function registration(){
		extract($_REQUEST);
		$chk=mysql_num_rows(mysql_query("SELECT * FROM users where Email='$email' "));
		if(empty($chk)){
			
			mysql_query("insert into users (`Name`,`Email`,`Password`) values 
				('$name','$email','$pass')");


header('Location:index.php?suc=msg');
}
else{
	header('Location:register.php?err=msg');
}

}
function login(){
	extract($_REQUEST);
	$usrnm=mysql_real_escape_string($username);
	$pas=mysql_real_escape_string($password);
	$sql=mysql_fetch_assoc(mysql_query("select Id,Name,Email from users where Email='$usrnm' and Password='$pas'"));
	if(!empty($sql['Id'])){
		session_start();
		$_SESSION['id']=$sql['Id'];
		$_SESSION['name']=$sql['Name'];
		$_SESSION['email']=$sql['Email'];
		header('Location:todolist.php?suc=msg');
	}
	else{
		header('Location:index.php?logs=err');
	}
}
function checkemail($email){
	$sql=mysql_query("select * from users where Email='$email' ");
	return $sql;
}

}

?>