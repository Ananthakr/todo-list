
	   
	   <?
require_once"Database/clsuser.php";
require_once"header.php";
extract($_REQUEST);
$obj= new user();
session_start();
if(isset($signin)){
	$login=$obj->login();
}
if(isset($suc)){
	$msg=" Succesfully Registered. Log in to continue...";
	$clr="Green";
}
if(isset($suc)){
	echo '<b class="w-100 text-center float-left" style="color:'.$clr.'">'.$msg.'</b>';
}

if(isset($logs)){
	$msg=" Check the login...";
	$clr="Red";
}
if(isset($logs)){
	echo '<b class="w-100 text-center float-left" style="color:'.$clr.'">'.$msg.'</b>';
}

?>
<div class="w-100 float-left log">
<div class="col-xl-4 col-lg-4 col-md-6 col-12"  style="margin:0 auto;padding: 1% 2%;">
    <h4 style="text-align:center;color:teal;">Users Login</h4>
<form method="post">
<div class="w-100" style="text-align:center; padding: 10px 0;"><input type="text" name="username" placeholder="Email" class="input_filed" style=" width: 70%;"/></div>
<div class="w-100" style="text-align:center; padding: 10px 0;"><input type="password" name="password" placeholder="Password" class="input_filed" style=" width: 70%;"/></div>
<div class="w-100" style="text-align:center;" ><input type="submit" name="signin" value="Sign In" class="btn" style="margin:20px 0 0 0; width: 50%;background-color:teal;color:white;"/></div>
</form>
<div class="w-100" style="text-align:center;" ><a href="registration.php" class="reg" style="text-decoration:none;"><h6>Registration for new user</h6></a></div>
</div>
</div>