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
	
	<link href="../bower_components/bootstrap/dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
</head>

<body>

    <div id="wrapper">

<?php
include ("header_menu.php");
include ("../conn/conn.php");
?>
<form action="db_insert_production_batch.php" method="post">
<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			<font color=#8A6D3B> Production Batch </font>
			</h3>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Batch Number: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="text" placeholder="Batch Number" name="batch_no" class="form-control"/>
		</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Production Date: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="input-group date">
			<input type="text" placeholder="Production" class="form-control" id="purchaseDt">
			<span class="input-group-addon">
				<span class="fa fa-calendar"></span>
			</span>
		</div>
		</div>
	</div>
	</div>
	<br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<label class="text-info">Raw Organic Manure: </label>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<input type="text" placeholder="R.O.M" id="rom" name="rom" onblur="calcEcoMeal()" class="form-control" />
	</div>
	</div>
	
	<div class="col-md-6 col-sm-4 col-xs-12">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<label class="text-info">Slaughter House Waste: </label>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<input type="text" placeholder="S.H.W" id="shw" name="shw" onblur="calcEcoMeal()" class="form-control" />
	</div>
	</div>
	</div>
	<br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Filler Powder: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="text" placeholder="Filler Powder" id="fp" name="fillerpowder" onblur="calcEcoMeal()" class="form-control"/>
		</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Animal Waste Filler: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
			<input type="text" placeholder="A.W.F" name="awf" id="awf" onblur="calcEcoMeal()" class="form-control" id="purchaseDt">
		</div>
	</div>
	</div>
	<br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">HDPE Bags Used: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="text" placeholder="H.D.P.E Bags" name="hdpebags" class="form-control"/>
		</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">ECOMEAL: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
			<input type="text" class="form-control" id="ecoMeal" readonly/>
		</div>
	</div>
	</div>
	<br/>
<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="submit" class="btn btn-success btn-outline"><i class="fa fa-save"></i> Save</button> &nbsp;&nbsp;&nbsp;&nbsp;
	<button type="button" class="btn btn-primary btn-outline" ><i class="fa fa-outdent"></i> Set Profile</button>
</div>
<!-- Below div of closing page wrapper -->
</div>
</form>
		<!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script src="../bower_components/moment/moment.js"></script>
	
	<script src="../bower_components/bootstrap/dist/js/bootstrap-datetimepicker.min.js"></script>
	
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

<script type="text/javascript">
$(function() {  
    $('#purchaseDt').datetimepicker({
		format: 'D/M/YYYY',
		maxDate:new Date()
	});
});
  //DTP from: http://eonasdan.github.io/bootstrap-datetimepicker/
  
  function calcEcoMeal(){
	document.getElementById('ecoMeal').value=parseFloat(document.getElementById('rom').value)+parseFloat(document.getElementById('shw').value)+parseFloat(document.getElementById('fp').value)+parseFloat(document.getElementById('awf').value);
  }
</script>
	</body>
</html>
