<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
<body>
<div class="container-fluid">
<div class="row">
  <h2 class="hut"><i class="fa fa-certificate"></i></h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Name" name="nme">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Stdid">Student ID:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="Stdit" placeholder="Enter ID" name="Stdid">
      </div>
    </div>
        <div class="form-group">
         <label class="control-label col-sm-2" for="sel1">Certificate Type:</label>
         <div class="col-sm-10">
            <select class="form-control" id="sel1">
            <option>No Gatogery has been choosen</option>
            <option>Graduation Certificate</option>
            <option>Registration Certificate</option>
        </select>
         </div>
     </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <label class="file-upload btn btn-default">
                 <input type="file" style="

    padding: 10px;
"/>
            </label>
        </div>
    </div>
    <div class="form-group">        
      <div class="subdiv col-sm-offset-2 col-sm-10">
        <button type="submit" class="sub btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>
<?php 
include("footer.php");
?>
