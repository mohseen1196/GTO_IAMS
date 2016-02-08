<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Top Organics</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">


<?php
include ("header_menu.php");
include ("../conn/conn.php");
?>

<div id="page-wrapper">
	<form action="db_add_client.php" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			<font color=#8A6D3B> Client Details </font>
			</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Name: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="Name" class="form-control" required name="txtnm" />
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Address: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<textarea placeholder="Address" class="form-control" style="resize:none;" name="txtadd" required /></textarea>
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">City: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="City" class="form-control" name="txtcity" required />
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Dist: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="District" class="form-control" name="txtdist" required />
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Contact Person: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="Contact Person" class="form-control" name="txtcontactPerson" required />
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Contact No: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="Contact Number" class="form-control" name="txtcntno" required />
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">VAT No: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="VAT Number" class="form-control" name="txtvat" required />
		</div>
	</div>
	<br/>
	
	<button class="btn btn-success btn-outline"><i class="fa fa-save"></i> Save</button>
	</form>
<!-- Below div of closing page wrapper -->
</div>
		<!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

  //DTP from: http://eonasdan.github.io/bootstrap-datetimepicker/
</script>
	</body>
</html>