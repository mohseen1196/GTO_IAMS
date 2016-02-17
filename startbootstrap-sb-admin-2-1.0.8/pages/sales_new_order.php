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
<form action="db_sales_order.php" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			<font color=#8A6D3B> New Order </font>
			</h3>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Order Number: </label>
		</div>
		<div class="col-md-8 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Order Number" class="form-control" name="txtorder" required />	<br/>
		</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Date of Order: </label> 
		</div>
		<div class="col-md-8 col-sm-4 col-xs-12">
		<div class="input-group date">
			<input type="text" placeholder="Order Date" class="form-control" id="purchaseDt" name="txtpdate" />
			<span class="input-group-addon">
				<span class="fa fa-calendar"></span>
			</span>
		</div>
		</div>
	</div>
	</div>
	
	<div class="row">
	<div class="col-md-12">
	<div class="col-md-2 col-sm-4 col-xs-12">
		<label class="text-info">Client: </label>
	</div>
	<div class="col-md-10 col-sm-4 col-xs-12">
		<div class="input-group date"> 
		<input type="hidden" id="ClientId" name="txthclient"/>
		<input type="text" placeholder="Client" class="form-control" id="Client" readonly />
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
														<th>Client Name</th>
														<th>Client City</th>
														<th>Select</th>
													</tr>
												</thead>
												<tbody>
												<?php
													$sup="select * from client_master";
													$resProd=mysql_query($sup);
													while($row=mysql_fetch_array($resProd))
													{
												?>
													<tr align="center">
														<td><label id="lbl1"><?php echo $row['client_name'];?></label></td>
														<td><?php echo $row['client_city'];?></td>
														<td>
														<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onClick="setEditValue('<?php echo $row['client_name'];?>','<?php echo $row['client_city'];?>',<?php echo $row['client_id'];?>);"> Select 
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
	</div>
	<br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Destination: </label>
		</div>
		<div class="col-md-8 col-sm-6 col-xs-10">
			<input type="hidden" id="ClientCity"/>
			<input type="text" placeholder="Destination" class="form-control" id="Dest" readonly />	<br/>
		</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Quantity: </label> 
		</div>
		<div class="col-md-8 col-sm-4 col-xs-12">
			<input type="text" placeholder="Quantity" class="form-control" name="txtqty" required />
		</div>
	</div>
	</div>
	<br/>
	<div class="col-md-12 sm-col-12 xs-col-12">
		<button class="btn btn-primary btn-outline"> <i class="fa fa-inr"></i> New Order </button>
	</div>
<!-- Below div of closing page wrapper -->
</div>
</form>
</div>
<!-- Below div of wrapper -->
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
  function setEditValue(edtValnm, edtValdest, edtValcn)//,edtValcc)
	{
		//alert(edtValnm+" "+edtValprod);
		document.getElementById('Client').value=edtValnm;
		document.getElementById('Dest').value=edtValdest;
		document.getElementById('ClientId').value=edtValcn;
		//document.getElementById('ClientCity').value=edtValcc;
	}
</script>
	</body>
</html>