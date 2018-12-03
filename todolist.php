 <?
require_once"Database/clsuser.php";
require_once"header.php";
session_start();
$name=$_SESSION['name'];

?>

<script>
$(document).ready(function () {
$('#button').click(function () {
var toAdd = $('input[name=checkListItem]').val();
  if(toAdd !=''){
$('.list').append('<div class="hid"><span class="ch px-2" ><input type="checkbox" class="tick"></span><span  class="item">' + toAdd + '</span></div>');}else { alert('Please Write Something');}
  $('.list:even').css({"background-color":"#ffffff;"});
  
  /*$('.item').filter(':even').css("background-color", "#f1f1f1");*/
}); 
$(document).on('click', '.tick', function() {
if($(this).prop('checked') == true){
  $(this).parent().next("span").css({"color":"red","text-decoration":"line-through"});
}
  else{
     $(this).parent().next("span").css({"color":"#000","text-decoration":"none"});
  }
    });
  
    
  
});
</script>


       
       
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	
  
    
       
		<div class="w-100 text-center float-left">
		<h2>Welcome <? echo ucfirst($name); ?></h2>
    <h2>To-Do List</h2>
		<div class="w-100 float-left text-center">
		
    <form name="checkListForm" >
			<input type="text" class="input_filed" name="checkListItem" reqired/>
      
		</form>
		<div id="button" style="cursor:pointer;"><b>Add!</b></div>
		
    </div>
		<br/>
   
    <div class="items" style="width:10%;margin:0 auto;text-align:left;">
    <div class="list"></div> 
     
    </div>
    </div>

    
	</body>
</html>