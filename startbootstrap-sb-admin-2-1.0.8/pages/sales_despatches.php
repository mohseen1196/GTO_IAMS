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
<form action="db_sales_dispatches.php" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			<font color=#8A6D3B> Dispatches </font>
			</h3>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-6 col-sm-12 col-xs- 12">
		<div class="col-md-4 col-sm-12 col-xs-12">
			<label class="text-info">Order No: </label>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="input-group date">
			<input type"text" placeholder="Order No" class="form-control" readonly name="txtorder" id="orderno" />
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
														<th>Client Name</th>
														<th>Select</th>
													</tr>
												</thead>
												<tbody>
												<?php
													$sup="select * from sales_register,client_master where sales_register.client_id=client_master.client_id and dc_no=''";
													$resProd=mysql_query($sup);
													while($row=mysql_fetch_array($resProd))
													{
												?>
													<tr align="center">
														<td><label id="lbl1"><?php echo $row['order_no'];?></label></td>
														<td><?php echo $row['client_name'];?></td>
														<td>
														<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onClick="setEditValue('<?php echo $row['order_no'];?>','<?php echo $row['client_name'];?>',<?php echo $row['client_id'];?>);"> Select 
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
			<label class="text-info">Dispatch Date: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="input-group date">
			<input type="text" placeholder="Date" class="form-control" id="purchaseDt" name="txtddate">
			<span class="input-group-addon">
				<span class="fa fa-calendar"></span>
			</span>
		</div>
		</div>
	</div>
	</div>
	<br/><br/>
	
	<div class="row">
		<div class="col-md-2 col-sm-4 col-xs-12">
			&nbsp;&nbsp;&nbsp;&nbsp;<label class="text-info">Client Name: </label>
		</div>
		<div class="col-md-7 col-sm-6 col-xs-10">
			<input type="hidden" name="txthclient" id="cId"/>
			<input type="text" placeholder="Client Name" class="form-control" id="cName" readonly />
		</div>
	</div	>
	<br/><br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">DC Number: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="text" placeholder="Dispatch Chalan" class="form-control" name="txtdc"/>
		</div>
	</div>
	</div>
	<br/><br/>
	
	
	<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="submit" class="btn btn-primary btn-outline"><i class="fa fa-road"></i> Dispatch</button>
	</div>
<!-- Below div of closing page wrapper -->
</div>
</form>
<!-- Below div of closing id wrapper -->
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
  //DTP from: http://eonasdan.github.io/bootstrap-datetimepicker/
  function setEditValue(edtValno, edtValname, edtValId)//,edtValcc)
	{
		document.getElementById('orderno').value=edtValno;
		document.getElementById('cName').value=edtValname;
		document.getElementById('cId').value=edtValId;
	}
</script>
	</body>
</html>