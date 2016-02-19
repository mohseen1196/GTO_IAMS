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

<div id="page-wrapper">
<form action="db_sales_generate_bills.php" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			<font color=#8A6D3B> Generate Bill </font>
			</h3>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Order Number: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<div class="input-group date">
			<input type="hidden"/>
			<input type="text" placeholder="Order No" class="form-control" id="orderno" name="txtorder" readonly />
			<input type="hidden" name="txthsalesid" id="SalesId">
			<span class="input-group-addon" data-toggle="modal" data-target="#myModal">
				<span class="fa fa-search"> </span>
			</span>
			<!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Supplier List</h4>
                                        </div>
                                        <div class="modal-body">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>Order No</th>
														<th>Quantity</th>
														<th>Select</th>
													</tr>
												</thead>
												<tbody>
												<?php
													$sup="SELECT * FROM `sales_register` WHERE `bill_no`=''";
													$resProd=mysql_query($sup);
													while($row=mysql_fetch_array($resProd))
													{
												?>
													<tr align="center">
														<td><label id="lbl1"><?php echo $row['order_no'];?></label></td>
														<td><?php echo $row['order_qty'];?></td>
														<td>
														<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onClick="setEditValue('<?php echo $row['order_no'];?>','<?php echo $row['order_qty'];?>',<?php echo $row['sales_id'];?>);"> Select 
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
			</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Bill Number: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
			<input type="text" placeholder="Bill No" class="form-control" name="txtbill">
		</div>
	</div>
	</div>
	<br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<label class="text-info">Quantity: </label>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<input type="text" placeholder="Qty" class="form-control" id="quantity" name="txtqty" readonly />
	</div>
	</div>
	
	<div class="col-md-6 col-sm-4 col-xs-12">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<label class="text-info">Bill Amount: </label>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<input type="text" placeholder="Bill Amt" class="form-control" id="billamount" name="txtbillamt" onBlur="BA()" />
	</div>
	</div>
	</div>
	<br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Bill Date: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<div class="input-group date">
			<input type="text" placeholder="Bill Date" class="form-control" id="purchaseDt" name="txtbdate">
			<span class="input-group-addon">
				<span class="fa fa-calendar"></span>
			</span>
		</div>
	</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Discount: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
			<input type="text" placeholder="Discount" class="form-control" id="discount" name="txtdisc" onBlur="BA()" />
		</div>
	</div>
	</div>
	<br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">VAT ( In %): </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="VAT Amount" class="form-control" id="vat" name="txtvat" onBlur="BA()"/>
		</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Net Amount: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
			<input type="text" class="form-control" placeholder="Net Amount" name="txtnet" id="netamount"/>
		</div>
	</div>
	</div>
	<br/>
<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="submit" class="btn btn-primary btn-outline"><i class="fa fa-calculator"></i> Add Bill</button>
</div>
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

<script type="text/javascript">
$(function() {  
    $('#purchaseDt').datetimepicker({
		format: 'D/M/YYYY',
		maxDate:new Date()
	});
});
function setEditValue(edtValno, edtValqty, edtValsalesId)//,edtValcc)
	{
		//alert(edtValnm+" "+edtValprod);
		document.getElementById('orderno').value=edtValno;
		document.getElementById('quantity').value=edtValqty;
		document.getElementById('SalesId').value=edtValsalesId;
		//document.getElementById('ClientCity').value=edtValcc;
	}
	
	function BA()
	{
		var tmpVat=(parseFloat(document.getElementById('vat').value)/100)*parseFloat(document.getElementById('billamount').value);
		document.getElementById('netamount').value=parseFloat(document.getElementById('billamount').value)-parseFloat(document.getElementById('discount').value)+tmpVat;
	}
  //DTP from: http://eonasdan.github.io/bootstrap-datetimepicker/
</script>
	</body>
</html>