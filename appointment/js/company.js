$(document).ready(function(event){
	
	/*setInterval(function(){
		$("#empdetb").DataTable().ajax.reload();
	},2000);*/
	//load employee details table
	$('#comtb').DataTable({
    "pagingType": "numbers",
    "processing": true,
	"dom": 'Bfrtip',
	"buttons": [
            "copy", "csv", "excel",
			{
				title: "Appointments",
                extend: 'print',
				exportOptions: {
					stripHtml: false
				},
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            'sd'
							);
 
                    $(win.document.body).find( 'table' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ],
    "serverSide": true,
    "ajax": "getallcompanies_code.php",
    "columnDefs": [{
      "targets": -1,
      "data": "id",
      "defaultContent":"<a class='btn btn-primary'>View</a>"
    }]
  });
  
  
  //click event for employee details table
  $('#comtb tbody').on( 'click', 'tr', function () {
    var table = $('#comtb').DataTable();
    var data = table.row( this ).data();
	var appid = data[5];
	var userid = data[6];
	var navuser = $("#navuser").html().trim();
	if(userid!=navuser){
		alert("You cannot edit this appointment information");
	}else{
		window.location = "addcustomer.php?appid="+appid+"";
	}
	
  });


    //Save new
	$("#btnaddcom").click(function(event){
		event.preventDefault();
		
		var comname = $("#comname").val().trim();
		var address = $("#address").val().trim();
		var email = $("#email").val().trim();
		var mobile = $("#phone").val().trim();
		
		if(comname=="" || address=="" || email=="" || mobile==""){
			alert("Enter all the required details");
			//toastr.error("Enter all the required details");
		}else{
		
		var data = $("#fmaddnew").serialize();
		//$("#fmaddnew").addClass("loading");
			$.ajax({
				url:'addcompany_code.php',
				type:'post',
				data:data,
				success:function(response){
					alert(response);					
				}
			});
			
		}		

	});
	

	//Update old
	$("#btnupdateold").click(function(event){
		event.preventDefault();
		var customer = $("#customer").val().trim();
		var vehicle = $("#vehicle").val();
		
		if(customer=="" || vehicle==""){
			alert("Enter all the required details");
			//toastr.error("Enter all the required details");
		}else{
		
		var data = $("#fmaddold").serialize();
		//$("#fmaddnew").addClass("loading");
			$.ajax({
				url:'updateappold_code.php',
				type:'post',
				data:data,
				success:function(response){
					alert(response);					
				}
			});
			
		}	
		
	});

	
	//Delete
	/*$("#btndeleteadmin").click(function(event){
		event.preventDefault();
		var empid = $("#empid").val().trim();
		$("#fmaddemp").addClass("loading");
		if( empid != "" ){
			$.ajax({
				url:'deleteemployee_code.php',
				type:'post',
				data:{empid:empid},
				success:function(response){
					if(response == 1){
						toastr.success("Deleted");	
					}else if(response == 3){
					   toastr.error("Error");	
					}else{
						toastr.error("Error");	
					}
				}
			});
		} else {
			toastr.error("Select A Patient");	
		}
		setTimeout(function(){
			$("#fmaddemp").removeClass("loading");
			$("#empdetb").DataTable().ajax.reload();
			},2000);
		
	});*/


});
