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
<form action="db_sales_generate_bills.php" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header text-warning"> 
			Purchase List
			<button type="button" style="float:right" class="btn btn-primary btn-sm" onclick="printPopUp()"><i class="fa fa-print"></i> Print</button>
			</h3>
		</div>
	</div>
	<br/>
	
	<div class="row">
	<div id="printDiv">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Purchase Date</th>
				<th>Supplier</th>
				<th>Product</th>
				<th>Bill No.</th>
				<th>Weight</th>
				<th>Rate</th>
				<th>VAT No.</th>
				<th>Final Amount</th>
			</tr>
			</thead>			
			<tbody>
			<?php
				$sup="SELECT * FROM `purchase_details`,`supplier_master`,`product_master` WHERE supplier_master.supp_id=purchase_details.supp_id and purchase_details.prod_id=product_master.prod_id";
				$resProd=mysql_query($sup);
				while($row=mysql_fetch_array($resProd))
				{
			?>
				<tr align="center">
					<td><label id="lbl1"><?php echo $row['purchase_date'];?></label></td>
					<td><?php echo $row['supp_name'];?></td>
					<td><?php echo $row['prod_name'];?></td>
					<td><?php echo $row['bill_no'];?></td>
					<td><?php echo $row['weight'];?></td>
					<td><?php echo $row['rate'];?></td>
					<td><?php echo $row['vat'];?></td>
					<td><?php echo $row['final_amount'];?></td>
				</tr>
			<?php
				}
			?>
			</tbody>
		</table>
	</div>
	</div>
	<br/>
	
<!-- Below div of closing page wrapper -->
</form>
</div>
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

<script>
function printPopUp(){
	var content="<link rel='stylesheet' href='http://localhost/2014/GTO_IAMS/startbootstrap-sb-admin-2-1.0.8/bower_components/bootstrap/dist/css/bootstrap.min.css'>"
	content=content + "<center class='text-primary'><h3>Green Top Organics</h3><h5>company address</h5><h4>Purchase List</h4></center><div class='container'>";
	content=content + $("#printDiv").html();
	var w=window.open("");
	$(w.document.body).html(content);
	//window.print();
}
</script>
	</body>
</html>