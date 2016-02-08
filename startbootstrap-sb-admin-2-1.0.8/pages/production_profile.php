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
			<font color=#8A6D3B> Production Profile </font>
			</h3>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<label class="text-info">Raw Organic Manure: </label>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<input type="text" placeholder="R.O.M" name="rom" class="form-control" />
	</div>
	</div>
	
	<div class="col-md-6 col-sm-4 col-xs-12">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<label class="text-info">Slaughter House Waste: </label>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<input type="text" placeholder="S.H.W" name="shw" class="form-control" />
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
			<input type="text" placeholder="Filler Powder" name="fillerpowder" class="form-control"/>
		</div>
	</div>
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Animal Waste Filler: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
			<input type="text" placeholder="A.W.F" name="awf" class="form-control" id="purchaseDt">
		</div>
	</div>
	</div>
	<br/>
	
	<div class="row">
	<div class="col-md-6 col-sm-4 col-xs-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<label class="text-info">Total Product: </label> 
		</div>
		<div class="col-md-6 col-sm-4 col-xs-12">
			<input type="text" class="form-control" readonly/>
		</div>
	</div>
	</div>
	<br/>
<div class="col-md-12 col-sm-12 col-xs-12">
	<button type="submit" class="btn btn-success btn-outline"><i class="fa fa-save"></i> Save</button> &nbsp;&nbsp;&nbsp;&nbsp;
	<button type="button" class="btn btn-primary btn-outline" data-toggle="modal" data-target="#myModal"><i class="fa fa-outdent"></i> List Profile</button>
	<!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Pre-Defined Profile</h4>
                                        </div>
                                        <div class="modal-body">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>Filler Powder</th>
														<th>Organic Manure</th>
														<th>Slaughter House Waste</th>
														<th>Animal Waste Filler</th>
														<th>Select</th>
													</tr>
												</thead>
												<tbody>
												<?php
													$sup="select supplier_master.supp_name,supplier_master.supp_add,supplier_master.supp_city,supplier_master.supp_cntpr,supplier_master.supp_cntno,supplier_master.supp_eMail,supplier_master.supp_vat,product_master.prod_name,product_master.prod_id,supplier_master.supp_id from supplier_master,product_master where supplier_master.prod_id=product_master.prod_id and product_master.prod_id between 1 and 4";
													$resProd=mysql_query($sup);
													while($row=mysql_fetch_array($resProd))
													{
												?>
													<tr align="center">
														<td><?php echo $row['supp_name'];?></label></td>
														<td><?php echo $row['supp_city'];?></td>
														<td><?php echo $row['prod_name'];?></td>
														<td>
														<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onClick="setEditValue('<?php echo $row['supp_name'];?>','<?php echo $row['prod_name'];?>',<?php echo $row['supp_id'];?>,<?php echo $row['prod_id'];?>);"> Select 
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

  //DTP from: http://eonasdan.github.io/bootstrap-datetimepicker/
</script>
	</body>
</html>