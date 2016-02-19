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
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header text-warning"> 
			Bill Print
			<?php if(isset($_POST['orderno'])){?>
			 <button type="button" style="float:right; margin-left:10px" class="btn btn-primary btn-sm" onclick="printPopUp()"><i class="fa fa-print"></i>  Print</button> 
			<?php } ?> 
			<?php if(isset($_POST['orderno'])){?>
			<a href="reports_print_bill.php" style="float:right" class="btn btn-warning btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
			<?php } ?>
			</h3>
		</div>
	</div>
	<br/>
	<?php if(!isset($_POST['orderno'])){?>
		<form action="reports_print_bill.php" method="POST">
	<div class="row">
			<div class="col-md-12">
				<div class="col-md-2">
					<label>Order Number</label>
				</div>
				<div class="col-md-6">
					<div class="input-group date">
					<input type="hidden" id="orderid" name="orderid"/>
					<input type="text" placeholder="Order Number" id="orderno" class="form-control" name="orderno" readonly />
					<span class="input-group-addon" data-toggle="modal" data-target="#myModal">
						<span class="fa fa-search"> </span>
					</span>
					</div>
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-success btn-sm">GO</a>
				</div>
			</div>
	</div><br/>
		</form>
	<?php } ?>
	<br/>
	<?php if(isset($_POST['orderno'])){?>
	<div class="row">
	<div id="printDiv">
		<?php
			$supid=$_POST['orderno'];
			$supDets="SELECT * FROM `sales_register`,`client_master` WHERE sales_register.client_id=client_master.client_id and sales_register.order_no = $supid";
			$resProd=mysql_query($supDets);
			while($row=mysql_fetch_array($resProd))
			{
		?>
		<div class="col-md-8">
			<table class="table table-bordered" height="150">
				<tr>
					<td><h3>M/s: <u><?php echo $row['client_name'];?></u><br/><u><?php echo $row['client_add'];?></u><br/><u><?php echo $row['client_city'];?></u></h3></td>
				</tr>
			</table>
		</div>
		<div class="col-md-4">
			<table class="table table-bordered" height="150">
				<tr>
					<td><h3>TAX INVOICE No. <i class="text-danger"><?php echo $row['bill_no'];?></i><br/></h3>
						Date: <strong><?php echo $row['bill_date'];?></strong>
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-12">
			<u><h4>Description of Goods: <span class="text-info">ECHOMEAL - Organic Manure</span></h4></u>
		</div>
		<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>Order Date</th>
				<th>Details</th>
				<th>Quantity</th>
				<!--<th>Rate</th>-->
				<th>Net Amount</th>
			</tr>
			</thead>			
			<tbody>
				<tr align="center">
					<td><label id="lbl1"><?php echo $row['order_date'];?></label></td>
					<td>
						&nbsp;
						<hr/>
						Discount:
						<hr/>
						VAT (%)
					</td>
					<td>
						<?php echo $row['order_qty'];?>
						<hr/>
						<?php echo $row['discount'];?>
						<hr/>
						<?php echo $row['vat_amount'];?>
					</td>
					<!--<td><?php echo (floatVal($row['net_amount'])+floatVal($row['discount'])-(floatVal($row['vat_amount'])/100))/floatVal($row['order_qty']);?></td>-->
					<td><?php echo $row['net_amount'];?></td>
				</tr>
				<tr>
					<td colspan="3"><strong style="float:right">Total: </strong></td>
					<td><strong><?php echo $row['net_amount'];?></strong></td>
				</tr>
			</tbody>
		</table>
		</div>
		<?php
			}
		?>
	</div>
	</div>
	<?php } ?>
	<br/>
	
<!-- Below div of closing page wrapper -->
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Order Details</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Order No.</th>
							<th>Client</th>
							<th>Bill No</th>
							<th>Bill Date</th>
							<th>Order Quantity.</th>
							<th>Discount.</th>
							<th>VAT (%)</th>
							<th>Net Amount</th>
							<th>Dispatch Challan</th>
							<th>Dispatch Date</th>
							<th>Select</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sup="SELECT * FROM `sales_register`,`client_master` WHERE sales_register.client_id=client_master.client_id and not sales_register.bill_no='' and not sales_register.dc_no=''";
						$resProd=mysql_query($sup);
						while($row=mysql_fetch_array($resProd))
						{
					?>
						<tr align="center">
							<td><label id="lbl1"><?php echo $row['order_no'];?></label></td>
							<td><?php echo $row['client_name'];?></td>
							<td><?php echo $row['bill_no'];?></td>
							<td><?php echo $row['bill_date'];?></td>
							<td><?php echo $row['order_qty'];?></td>
							<td><?php echo $row['discount'];?></td>
							<td><?php echo $row['vat_amount'];?></td>
							<td><?php echo $row['net_amount'];?></td>
							<td><?php echo $row['dc_no'];?></td>
							<td><?php echo $row['dispatch_date'];?></td>
							<td>
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onClick="setEditValue('<?php echo $row['sales_id'];?>','<?php echo $row['order_no'];?>','<?php echo $row['client_name'];?>','<?php echo $row['bill_no'];?>','<?php echo $row['dc_no'];?>');"> Select 
							</button></td>
						</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
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
	content=content + "<center class='text-primary'><h3>Green Top Organics</h3><h5>company address</h5><h4>Bill</h4></center><div class='container'>";
	content=content + $("#printDiv").html();
	var w=window.open("");
	$(w.document.body).html(content);
	//window.print();
}

function setEditValue(edtOrderid, edtOrderNo,Clientnm,BillNo,dcNo)//,edtValcc)
	{
		//alert(edtValnm+" "+edtValprod);
		document.getElementById('orderid').value=edtOrderid;
		document.getElementById('orderno').value=edtOrderNo;
		document.getElementById('clientnm').value=Clientnm;
		document.getElementById('billno').value=BillNo;
		document.getElementById('dcno').value=dcNo;
	}
</script>
	</body>
</html>