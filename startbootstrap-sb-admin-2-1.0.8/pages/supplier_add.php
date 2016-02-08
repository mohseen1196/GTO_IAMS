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
	<link href="../bower_components/bootstrap/dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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

<div id="page-wrapper">
	<form action="db_add_supplier.php" method="post">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header text-warning">
			 Add Supplier
			</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Name: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="Name" name="txtnm" class="form-control" required />
		</div>
	</div>
	<br/>

	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Address: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<textarea placeholder="Address" name="txtadd" style="resize:none;" class="form-control" required /></textarea>
		</div>
	</div>
	<br/>

	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">City: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="City" name="txtcity" class="form-control" required />
		</div>
	</div>
	<br/>

	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Contact Person: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="Contact Person" name="txtcontactPerson" class="form-control" required />
		</div>
	</div>
	<br/>

	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Contact No: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="Contact Number" name="txtContactNo" class="form-control" required />
		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">E-Mail Address: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="email" placeholder="Email Address" name="txtEmailAdd" class="form-control" />
		</div>
	</div>
	<br/>

	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">Select Product: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<!--<input type="text" placeholder="Select Product" name="txtselProduct" class="form-control" required />-->
			<select name="txtselProduct" class="form-control">
				<?php
				$resQry=mysql_query("SELECT * FROM `product_master`");
				while($row = mysql_fetch_array( $resQry ))
				{
					echo "<option value='".$row['prod_id']."'>".$row['prod_name']."</option>";
				}
				?>
			</select>
		</div>
	</div>
	<br/>

	<div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="text-info">VAT No: </label>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<input type="text" placeholder="VAT Number" name="txtvat" class="form-control" required />
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
	<script src="../bower_components/moment/moment.js"></script>
	<script src="../bower_components/bootstrap/dist/js/bootstrap-datetimepicker.min.js"></script>
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