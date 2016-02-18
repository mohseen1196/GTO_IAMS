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
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			Product Details
			<button type="button" style="float:right" class="btn btn-primary btn-sm" onclick="printPopUp()"><i class="fa fa-print"></i> Print</button>
			</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-10 col-sm-12 col-xs-12">
		<div class="input-group date">
		<input type="text" class="form-control" placeholder="Search Product"/>
		<span class="input-group-btn">
		<button class="btn btn-default" type="button">
		<i class="fa fa-search"> </i>
		</span>
		</div>
		<br>
		<div id="printDiv">
		<table class="table table-bordered">
		<thead>
			<tr>
				<th> Product Id </th>
				<th> Product Name </th>
				<th> Edit </th>
			</tr>
		</thead>
		<tbody>
			<!--<tr align="center">
				<td> 1 </td>
				<td> Filler Powder </td>
				<td>
					<button class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">
						<i class="fa fa-eraser"></i> Edit 
					</button>
				</td>
			</tr>-->
		<?php
			$selProds="SELECT * FROM `product_master`";
			$resProds=mysql_query($selProds);
			while($row = mysql_fetch_array( $resProds )) 
			{
		?>
		<tr align="center">
			<td><?php echo $row['prod_id']; ?></td>
			<td><?php echo $row['prod_name']; ?></td>
			<td>
				<button class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal" onClick="setEditValue('<?php echo $row['prod_id'];?>','<?php echo $row['prod_name'];?>')">
					<i class="fa fa-eraser"></i> Edit 
				</button>
			</td>
		</tr>
		<?php		
			}
		?>
		</tbody>
		</table>
		</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="db_update_inward_product.php" method="get">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit Product Details</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="editTextModalId" name="editId" class="form-control">
				<input type="text" id="editTextModalName" name="editName" class="form-control">
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

</div>
 <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	
<script>
	function setEditValue(edtValid, edtValnm)
	{
		document.getElementById('editTextModalId').value=edtValid;
		document.getElementById('editTextModalName').value=edtValnm;
	}
</script>

<script>
function printPopUp(){
	var content="<link rel='stylesheet' href='http://localhost/2014/GTO_IAMS/startbootstrap-sb-admin-2-1.0.8/bower_components/bootstrap/dist/css/bootstrap.min.css'>"
	content=content + "<center class='text-primary'><h3>Green Top Organics</h3><h5>company address</h5><h4>Product List</h4></center><div class='container'>";
	content=content + $("#printDiv").html();
	var w=window.open("");
	$(w.document.body).html(content);
	//window.print();
}
</script>
</body>
</html>