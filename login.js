$(document).ready(function(){
	
  //login
  $("#btnlogin").click(function(event){
	$('#p2').show(100);
    event.preventDefault();
    var username = $("#username").val().trim();
    var password = $("#password").val().trim();
    if( username != "" && password != "" ){
      $.ajax({
        url:'login_code.php',
        type:'post',
        data:{username:username,password:password},
        success:function(response){
          $('#p2').hide(100);
          if(response == 1){
            window.location = "appointment/";
          }else if(response == 2){
            window.location = "reception/";
          }else if(response == 3){
            window.location = "serviceadvisor/";
          }else if(response == 4){
            window.location = "jobplanner/";
          }else if(response == 5){
            window.location = "technician/";
          }else if(response == 6){
            window.location = "customer/";
          }else if(response == 7){
            window.location = "workshop/";
          }else if(response == 8){
            window.location = "admin/";
          }else{
            alert(response);
          }
        }
      });
    } else {
     
	  alert("Enter your login details");
      
    }
	//setTimeout(function(){
	 //},2000);
  });


});
