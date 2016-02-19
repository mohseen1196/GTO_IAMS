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
			Add Order
			</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-10 col-sm-12 col-xs-12">
			<?php
				$order=$_REQUEST['txtorder'];
				$date=$_REQUEST['txtddate'];
				//echo $dcdate . " -*- ";
				//$chngDCdate=date("Y-m-d",strtotime($dcdate));
				$dc=$_REQUEST['txtdc'];
				$client=$_REQUEST['txthclient'];
				
				/* echo $chngDCdate . ' -$$- ';
				echo $dc;
				exit; */
				$selSuppliers="UPDATE `sales_register` SET `dc_no`='".$dc."',`dispatch_date`='".$date."' WHERE `order_no`=".$order;
				$resSuppliers=mysql_query($selSuppliers);
				echo $resSuppliers;
				if($resSuppliers){
				?>
				<strong class="text-success">Product Dispatched Successfully!</strong>
				<br/><br/>
				<h4 class="text-info">Please wait... <i class="fa fa-spin fa-spinner"></i></h4>
				<script>
					setTimeout(function(){
						window.location.assign('sales_despatches.php');
					},2000);
				</script>
				<?php
				}
				else
				{				
					echo "<strong class='text-danger'>Something went wrong! Please try again</strong>";
				}
				?>
		<br/>
		</div>
	</div>
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

</body>
</html>