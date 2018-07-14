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
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

				           
				<form>
				    <div class="controls">
				            <div class="form-group">
				                    <label for="form_name">Name</label>
				                    <input id="" type="text" name="name" class="form-control" placeholder="">
				                    <div class="help-block with-errors"></div>
				            </div>

				            <div class="form-group">
				                    <label for="form_message">Description</label>
				                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
				                    <div class="help-block with-errors"></div>			           
				            </div>

				           <input type="submit" class="btn btn-success btn-send" value="Send message">
				         
				          
				        		       
				    </div>

				</form>   

                </div>

            </div>

        </div>


<?php 

include("footer.php");

?>

