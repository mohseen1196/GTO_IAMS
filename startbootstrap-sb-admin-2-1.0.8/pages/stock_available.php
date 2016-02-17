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
	<!--<form action="" method="post">-->
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header text-warning">
				Stock Available
			</h3>
		</div>
	</div>
	
	<!--<a href="" ><i class="fa fa-user-secret"></i> DEACTIVATED CLIENTS</a>
	<br/><br/>-->
	
	<table class="table table-bordered table-striped">
		<caption><h4> Raw Material </h4></caption>
		<thead>
		<th>Sr.No</th>
		<th>Product Name</th>
		<th>Stock Available ( in M.T / Count)</th>
		</thead>
		
		<tbody>
		<?php
			$Sup="select * from stock_master,product_master where stock_master.prod_id=product_master.prod_id and stock_master.prod_id between 1 and 4";
			$resSup=mysql_query($Sup);
			while($row=mysql_fetch_array($resSup))
			{
		?>
		<tr align="center">
			<td><?php echo $row['stock_id']; ?></td>
			<td><?php echo $row['prod_name']; ?></td>
			<td><?php echo $row['stock_available']; ?></td>
		</tr>
		<?php
			}
		?>
		</tbody>
	</table>
	
	<table class="table table-bordered table-striped">
		<caption><h4> HDPE Bags </h4></caption>
		<thead>
		<th>Sr.No</th>
		<th>Product Name</th>
		<th>Stock Available (in Numbers)</th>
		</thead>
		
		<tbody>
		<?php
			$Sup="select * from stock_master,product_master where stock_master.prod_id=product_master.prod_id and stock_master.prod_id=5";
			$resSup=mysql_query($Sup);
			while($row=mysql_fetch_array($resSup))
			{
		?>
		<tr align="center">
			<td><?php echo $row['stock_id']; ?></td>
			<td><?php echo $row['prod_name']; ?></td>
			<td><?php echo $row['stock_available']; ?></td>
		</tr>
		<?php
			}
		?>
		</tbody>
	</table>
	
	<table class="table table-bordered table-striped">
		<caption><h4> Finished Product </h4></caption>
		<thead>
		<th>Sr.No</th>
		<th>Product Name</th>
		<th>Stock Available ( in M.T / Count)</th>
		</thead>
		
		<tbody>
		<?php
			$Sup="select * from stock_master where prod_id=101";
			$resSup=mysql_query($Sup);
			while($row=mysql_fetch_array($resSup))
			{
		?>
		<tr align="center">
			<td><?php echo $row['stock_id']; ?></td>
			<td>EcoMeal</td>
			<td><?php echo $row['stock_available']; ?></td>
		</tr>
		<?php
			}
		?>
		</tbody>
	</table>
	</form>
	<!-- Below div of closing page wrapper -->
</div>

	<!-- Below div of closing wrapper -->
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

</script>
<!--
<script>
	function setEditValue(edtValStck,edtProdId,edtStckAvail)
	{
		document.getElementById('editTextStockId').value=edtValStck;
		document.getElementById('editTextProdId').value=edtProdId;
		document.getElementById('editTextStockAvail').value=edtStckAvail;
	}
</script>
-->
	</body>
</html>