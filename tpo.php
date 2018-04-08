<!DOCTYPE html>
<html>
<head>
		<title>TPO</title>
			 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
		<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current', {packages: ['corechart']});
		</script>

		<style type="text/css">

			.row1h{
				margin-top : 20px;
			}

			.row1h_1{
				border-radius: 10px;
				border: 1px solid grey;
				padding-top: 20px;	
			}
			.btn{
				margin-top: 17px;
			}
			#moc{
				margin-top : 20px;
			}

//*{border : 2px solid grey;}*/

		</style>

</head>
<body>

	<script type = "text/javascript">
	    
	   var ij=0;
	   
	   ar = [[12,23,17],[15,11,18],[21,21,34]];

	   function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Year', 'Count'],
               ['2012',  ar[ij][0]],
               ['2013',  ar[ij][1]],
               ['2014',  ar[ij][2]],
            ]);

            var options = {title: 'No. Of Students'}; 

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container'+ij));
            ij++;
            chart.draw(data, options);
            if(ij<3)
            	drawChart();
         }

        setTimeout(drawChart,1000);
         
         
         
        
      </script>


		<div class="container">
			 <div class="page-header">
			    <h1>Company past records</h1>      
			  </div>

			<div class="row">
				<div class="col-md-4">
					<div>TCS</div>
					<div id = "container0"></div>
					
				</div>
				<div class="col-md-4">
					<div>ATOS</div>
					<div id = "container1"></div>
					
				</div>
				<div class="col-md-4">
					<div>JET BRAINS</div>
					<div id = "container2"></div>
					
				</div>
			</div>
		</div>

		<div class="container" id="add_student">

			<div class="page-header">
			    <h1>Add Company Events</h1>      
			  </div>

		<div class="container row1h_1">

				<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="name">Company Name</label>
						<br>	
						<input type="text" class="form-input" name="name" id="name">
					</div>
				</div><!--.row1h_1-->
				<div class="col-md-3">
					<div class="form-group">
						<label for="ptr">Pointer Criteria</label>
						<input type="number" id="ptr" step=".01" class="form-input" name="name">
					</div>
				</div><!--.row1h_1-->
				<div class="col-md-3">
					<div class="form-group">
						<label for="pkg">Package</label><br/>
						<input id="pkg" type="number" class="form-input" name="name">
					</div>
				</div><!--.row1h_1-->
				<div class="col-md-2">
					<div class="form-group">
						<label for="date">Date</label>
						<input type="date" id="date" class="form-input" name="name">
					</div>
				</div><!--.row1h_1-->
					<div class="col-md-1">
					<button class="btn-primary btn btn-small" onclick="send_data()" type="button">Send</button>
					</div>
				</div>
		</div>
		</div><!--.row1h-->

	</div><!--container-fluid(#add_student)-->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Message</h4>
        </div>
        <div class="modal-body">
          <p id="modal_text"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

<div id="list_here">
</div>
	<script type="text/javascript">
		

			
			function send_data()
			{
				var name = $("#name").val();
				var date = $("#date").val();
				var ptr = $("#ptr").val();
				var pkg = $("#pkg").val();
				//alert(name+" "+date+" "+ptr+" "+pkg);

				$.ajax({
				url : "company_insert.php",
				async : false,
				type : "POST",	
				data : {
					"name" : name,
					"date" : date,
					"ptr" : ptr,
					"pkg" : pkg
				},
				success : function(d){
					
					//alert(d);
					$("#modal_text").text(d);
		    		$('#myModal').modal('show');
		    		setTimeout(
		    			function()
		    			{
		    				$('#myModal').modal('hide');
		                },3000);


		    		print_list(ptr);
				}

				});

				//print_list(ptr);
			}

			 function print_list(ptr)
			 {

			 	//alert(ptr);
			 	$.ajax({
			 	url : "fetch_list.php",
			 	async : false,
			 	type : "POST",
			 	data : {
			 		"ptr" : ptr,
			 	},
			 	success : function(d){
					
			 		//alert(d);
			 		$("#list_here").html(d);
		    		
					}

			 	});
			}
	</script>
</body>
</html>