

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/sb-admin.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/council_index.js"></script>
	
	
	
	
	
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI." name="description" />
    <meta content="Semantic-UI, Theme, Design, Template" name="keywords" />
    <meta content="PPType" name="author" />
    <meta content="#ffffff" name="theme-color" />
    
    <link href="static/dist/semantic-ui/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="static/stylesheets/default.css" rel="stylesheet" type="text/css" />
    <link href="static/stylesheets/pandoc-code-highlight.css" rel="stylesheet" type="text/css" />
    <script src="static/dist/jquery/jquery.min.js"></script>
	<script src="admin.js"></script>
	
	
	
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a id="events" onclick="load(this.id)"><em class="fa fa-calendar">&nbsp;</em> Events Requests</a></li>
			<li><a id="confirmed_events" onclick="load(this.id)"  ><em class="fa fa-calendar">&nbsp;</em> Confirmed Events</a></li>
			<li><a id="pending_events" onclick="load(this.id)"  ><em class="fa fa-calendar">&nbsp;</em> Pending Events</a></li>
			<li><a  href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div  class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div id="add_here">
			
		<div class="row">
		
		<div class="ui grid" style="margin-top:40px">
            <div class="row">
           <div class="ui horizontal divider"> Non _Conflicting Events</div> 
           <div class="container">  
           <div class="row">
				<div class="col-md-offset-10"><a class='ui tiny button blue' href='doaction.php'>Approve All</a></div>
		   </div>
		   </div>
		</div>
		
		 
         <table class="ui single line striped selectable center aligned  table">
<thead><tr><th>#Event No</th><th>Event Name</th><th>Committee Name</th><th>Date</th><th>Capacity</th><th>Timing</th><th>#Operation1</th><th>#Operation2</th></tr></thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","evm") or die("couldn't to the  server");

$data=mysqli_query($con,"SELECT * FROM temporary_table");

if(($data) && (mysqli_num_rows($data) >0)){

//getting data and generating a row
while($row=mysqli_fetch_assoc($data))
{
	
$order=$row['event_no'];    ///event id
echo("<tr><td>".$row['event_no']."</td><td>".$row['event_name']."</td><td>".$row['committee_name']."</td><td>".$row['date']."</td><td>".$row['capacity']."</td><td>".$row['timing']."</td><td><a class='ui tiny button blue' href='doaction.php?accept=$order'>Approve</a></td><td><a class='ui tiny button orange' href='load.php?reject=$order'>Reject</a></td></tr>");
}		
}
else{
echo "<tr><td colspan='9'>No records match found! </td></tr>";	
}
mysqli_close($con);
?>

			</tbody>
            </table>
            </div>	
			
			
		</div>	
			

		

	</div>	

	<div class="ui grid" style="margin-top:40px">
            <div class="row">
           <div class="ui horizontal divider">Conflicting Events</div> 
           <div class="container">  
           

            <h3>Events on Time : 27th March at 5.00 PM in Venue : Auditorium</h3>

            <table class="ui single line striped selectable center aligned  table">
<thead><tr><th>#Event No</th><th>Event Name</th><th>Committee Name</th><th>#Priority</th></tr></thead>
<tbody>

           	<tr><td>1</td><td>CODATHON</td><td>CSI</td><td>
           		 <div class="form-group">
				  <select class="form-control" id="sel1">
				    <option>1</option>
				    <option>2</option>
				    <option>3</option>
				  </select>
				</div> 
           	</td></tr>

           		<tr><td>2</td><td>PREPLACEMENT TALK TCS</td><td>Placement Committie</td><td>
           		 <div class="form-group">
				  <select class="form-control" id="sel1">
				    <option>1</option>
				    <option>2</option>
				    <option>3</option>
				  </select>
				</div> 
           	</td></tr>

           		<tr><td>3</td><td>Udaan</td><td>Dance Committee</td><td>
           		 <div class="form-group">
				 <select class="form-control" id="sel1">
				    <option>1</option>
				    <option>2</option>
				    <option>3</option>
				  </select>
				</div> 
           	</td></tr>


</tbody>
            </table>



<div class="row">
<div class="col-md-offset-5">
<button class="btn-primary btn success">PRIORITIZE!</button>
</div>
</div>           


		   </div>
		</div>


	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
		
</body>
</html>