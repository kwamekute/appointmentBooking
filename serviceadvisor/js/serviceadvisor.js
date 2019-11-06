$(document).ready(function(event){



//Update old
$("#btnsubmit").click(function(event){
	event.preventDefault();
	var newdescriptionofservice = $("#newdescriptionofserviceo").val().trim();
	var vehicle = $("#vehicle").val();
	
	if(newdescriptionofservice==""){
		alert("Enter all the required details");
		//toastr.error("Enter all the required details");
	}else{
	
	var data = $("#fmaddserve").serialize();
	//$("#fmaddnew").addClass("loading");
		$.ajax({
			url:'serviceadvice_code.php',
			type:'post',
			data:data,
			success:function(response){
				alert(response);					
			}
		});
		
	}	
	
});

	
//load appointment details table
	$('#checkintb').DataTable({
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
    "ajax": "getallcheckin_code.php",
    "columnDefs": [{
      "targets": -1,
      "data": "id",
      "defaultContent":"<a class='btn btn-primary'>View</a>"
    }]
  });
  
  
  //click event for employee details table
  $('#checkintb tbody').on( 'click', 'tr', function () {
    var table = $('#checkintb').DataTable();
    var data = table.row( this ).data();
	var appid = data[0];
	
	window.location = "serviceadvice.php?appid="+appid+"";
	
  });


  	
//load jobs details table
	$('#capptb').DataTable({
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
    "ajax": "getallconfrimedapp_code.php",
    "columnDefs": [{
      "targets": -1,
      "data": "id",
      "defaultContent":"<a class='btn btn-primary'>View</a>"
    }]
  });
  
  
  //click event for employee details table
  $('#capptb tbody').on( 'click', 'tr', function () {
    var table = $('#capptb').DataTable();
    var data = table.row( this ).data();
	var appid = data[5];
	
	//window.location = "serviceadvice.php?appid="+appid+"";
	
  });

});
