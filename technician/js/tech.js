$(document).ready(function(event){



//Update old
$("#btnaddjob").click(function(event){
	event.preventDefault();
	var technician = $("#technician").val().trim();
	var starttime = $("#starttime").val();
	var endtime = $("#endtime").val();
	
	if(technician=="" || starttime==""){
		alert("Enter all the required details");
		//toastr.error("Enter all the required details");
	}else{
	
	var data = $("#fmaddjob").serialize();
	//$("#fmaddnew").addClass("loading");
		$.ajax({
			url:'viewjob_code.php',
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
	var appid = data[5];
	
	window.location = "serviceadvice.php?appid="+appid+"";
	
  });


  	
//load capp details table
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
  
  
  //click event for capps details table
  $('#capptb tbody').on( 'click', 'tr', function () {
    var table = $('#capptb').DataTable();
    var data = table.row( this ).data();
	var appid = data[0];
	
	window.location = "addjob.php?appid="+appid+"";
	
  });
  
  
  
  //load jobs details table
	$('#jobstb').DataTable({
    "pagingType": "numbers",
    "processing": true,
	"dom": 'Bfrtip',
	"buttons": [
            "copy", "csv", "excel",
			{
				title: "Jobs",
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
    "ajax": "getalljobs_code.php",
    "columnDefs": [{
      "targets": -1,
      "data": "id",
      "defaultContent":"<a class='btn btn-primary'>View</a>"
    }]
  });
  
  
  //click event for job details table
  $('#jobstb tbody').on( 'click', 'tr', function () {
    var table = $('#jobstb').DataTable();
    var data = table.row( this ).data();
	var jobid = data[0];
	
	window.location = "viewjob.php?jobid="+jobid+"";
	
  });

});
