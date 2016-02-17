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
			 Supplier's List
			</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="input-group date">
		<input type="text" class="form-control" placeholder="Search Supplier"/>
			<span class="input-group-btn">
			<button type="button" class="btn btn-default">
			<i class="fa fa-search"> </i>
			</span>
		</div>
		</div>
	</div>
	<br/>
	
	<a href="" ><i class="fa fa-user-secret"></i> DEACTIVATED CLIENTS</a>
	<br/><br/>
	
	<table class="table table-bordered table-striped">
		<thead>
		<th>Name</th>
		<th>Address</th>
		<th>City</th>
		<th>Contact Person</th>
		<th>Contact No</th>
		<th>Email</th>
		<th>Product Name</th>
		<th>VAT No</th>
		<th>Edit / Delete</th>
		</thead>
		
		<tbody>
		<?php
			$Sup="select supplier_master.supp_name,supplier_master.supp_add,supplier_master.supp_city,supplier_master.supp_cntpr,supplier_master.supp_cntno,supplier_master.supp_eMail,supplier_master.supp_vat,product_master.prod_name from supplier_master,product_master where supplier_master.prod_id=product_master.prod_id";
			$resSup=mysql_query($Sup);
			while($row=mysql_fetch_array($resSup))
			{
		?>
		<tr align="center">
			<td><?php echo $row['supp_name']; ?></td>
			<td><?php echo $row['supp_add']; ?></td>
			<td><?php echo $row['supp_city']; ?></td>
			<td><?php echo $row['supp_cntpr']; ?></td>
			<td><?php echo $row['supp_cntno']; ?></td>
			<td><?php echo $row['supp_eMail']; ?></td>
			<td><?php echo $row['prod_name']; ?></td>
			<td><?php echo $row['supp_vat']; ?></td>
			
			<td>
			<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal" onClick="setEditValue('<?php echo $row['supp_name'];?>','<?php echo $row['supp_add'];?>','<?php echo $row['supp_city'];?>','<?php echo $row['supp_cntpr'];?>','<?php echo $row['supp_cntno'];?>','<?php echo $row['supp_eMail'];?>','<?php echo $row['supp_vat'];?>')">
					<i class="fa fa-eraser"></i>
			</button>
			</td>
		</tr>
		<?php
			}
		?>
		</tbody>
	</table>
	</form>
	<!-- Below div of closing page wrapper -->
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="db_supplier_list.php" method="get">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit Product Details</h4>
			</div>
			<div class="modal-body">
				<input type="text" id="editTextModalName" name="editName" class="form-control"><br/>
				<input type="text" id="editTextModalAdd" name="editAdd" class="form-control"><br/>
				<input type="text" id="editTextModalCity" name="editCity" class="form-control"><br/>
				<input type="text" id="editTextModalCntPr" name="editCntPr" class="form-control"><br/>
				<input type="text" id="editTextModalCntNo" name="editCntNo" class="form-control"><br/>
				<input type="text" id="editTextModaleMail" name="editeMail" class="form-control"><br/>
				<input type="text" id="editTextModalVat" name="editVat" class="form-control">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
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

  //DTP from: http://eonasdan.github.io/bootstrap-datetimepicker/
</script>

<script>
	function setEditValue(edtValnm,edtAdd,edtCty,edtcntpr,edtcnt,edteml,edtvat)
	{
		document.getElementById('editTextModalName').value=edtValnm;
		document.getElementById('editTextModalAdd').value=edtAdd;
		document.getElementById('editTextModalCity').value=edtCty;
		document.getElementById('editTextModalCntPr').value=edtcntpr;
		document.getElementById('editTextModalCntNo').value=edtcnt;
		document.getElementById('editTextModaleMail').value=edteml;
		document.getElementById('editTextModalVat').value=edtvat;
	}
</script>
<input type="button" Value="Print" onClick="window.print();">
	</body>
</html>