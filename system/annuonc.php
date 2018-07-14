<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

<?php 

include("navbar.php");

?>
<!--Start annuonc dropdown num 1-->
<div class="container" id="NA">
	<div class="col-md-8 col-md-offset-2">
		<h2>Annuoncment</h2>
		<p>Click on The Annuoncment Title To Show More Details</p>
		<div class="panel-group ">
			<div class="panel panel-default">
			    <div class="panel-heading" data-toggle="collapse" href="#collapse1">		        
			          <h4 ><span class="glyphicon glyphicon-briefcase"></span> The Annuoncment Title</h4>
			    </div>
			    <div id="collapse1" class="panel-collapse collapse">
				    <div class="panel-body">Lorem Ipsum has been the industry's standard dummy text
				                             ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
				                             five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
				                             of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
				                             Lorem Ipsum 
				    </div>
			        <div class="panel-footer text-center">Publisher Name - 10/10/2018 08:55 AM</div>
		    </div>
		</div>

	</div>
</div>


<?php 

include("footer.php");

?>

