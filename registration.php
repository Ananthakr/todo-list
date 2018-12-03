<? ob_start();

require_once"header.php";
?>


<?
require_once"Database/clsuser.php";
$obj=new user();

extract($_REQUEST);
if(isset($signup)){
	$ins=$obj->registration();
}


?>
<script>
var emailflag=0;
	
$(function(){
	
	$('#email').keyup(function(e) {
		var email=$(this).val();
		 $.ajax({
        type:'post',
        url:'ajax_data.php',
        data:{
          email:email,
		  checkemail:"check"
        },
        success:function(response) {
            if(response==1){
				$("#email").css('border','2px solid #ff0000');
				emailflag=1;
			}else{
				$('#email').css('border','1px solid #a1a3a3');
				emailflag=0;
			}
        }
      });
	});
	
	
	
});
function validation(){
var name = $("#name").val();
var email = $("#email").val();
var pass=$('#pass').val();


if (emailflag==1) {
alert("This email already registered");
return false;
}


else {
return true;
}
	}
</script>

<body>

<div class="col-xl-6 col-lg-6 col-md-6 col-12 reg"  style="margin:0 auto;padding:1% 2%;">
<h4 style="text-align:center;">New User? Register here...</h4>
<div class="w-100 float-left" style="text-align:center; padding: 0px 0;">
   
<? 
if(isset($err)){
$msg="This Mailid/phone already registered";
$clr="Red";
}
if(isset($err)){
	echo '<b class="w-100 text-center float-left" style="color:'.$clr.'">'.$msg.'</b>';
}
?>
</div>
<form method="post" id="form" onsubmit="return validation()">
<div class="w-100 float-left" style="text-align:center; padding: 10px 0;"><input type="text" id="name" name="name" placeholder="Name" class="input_filed" style=" width: 80%;" required /></div>

<div class="w-100 float-left" style="text-align:center; padding: 10px 0;"><input type="email" id="email" name="email" placeholder="Email" class="input_filed" style=" width: 80%;" required /></div>

<div class="w-100 float-left" style="text-align:center; padding: 10px 0;"><input type="password" id="pass" name="pass" placeholder="Password" class="input_filed" style=" width: 80%;" required /></div>

<div class="w-100 float-right" style="text-align:center;"><input type="submit" onclick="return validation()" id="signup" name="signup" value="Register Now!" class="btn btn-primary" style="margin:10px 0 0 0px; width: 50%;background-color:#007bff;"/></div>
</form>

</div>



</body>
</html>