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
			Add Supplier
			</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-10 col-sm-12 col-xs-12">
			<?php
				$date=$_REQUEST['txtpdate'];
				//$date=date("Y-m-d",strtotime($date));
				$supp=$_REQUEST['txthsupp'];
				$prod=$_REQUEST['txthprod'];
				$nobags=$_REQUEST['txtnobags'];
				$billno=$_REQUEST['txtbill'];
				$billamt=$_REQUEST['txtbillamt'];
				$discount=$_REQUEST['txtdisc'];
				$net=$_REQUEST['txtnet'];
				
			//	echo $date." -*- ".$supp." -*- ".$bill." -*- ".$weight." -*- ".$rate." -*- ".$VAT." -*- ".$final;
				$selSuppliers="INSERT INTO `purchase_bags`(`purchase_date`, `supp_id`, `prod_id`, `no_bags`, `bill_no`, `bill_amt`, `discount`, `net_amt`) VALUES ('".$date."','".$supp."','".$prod."','".$nobags."','".$billno."','".$billamt."','".$discount."','".$net."')";
				$resSuppliers=mysql_query($selSuppliers);
				echo $resSuppliers;
					
				$selProd="SELECT `stock_available` FROM `stock_master` WHERE `prod_id`='".$prod."'";
				$resProd=mysql_query($selProd);
				$rowProd=mysql_fetch_array($resProd,MYSQL_BOTH);
				
				
				$newstk=floatval($rowProd['stock_available'])+floatval($nobags);
				$updtstk="UPDATE `stock_master` SET `stock_available`='".$newstk."',`stock_date`='".$date."' WHERE `prod_id`='".$prod."'";
				$resuptdstck=mysql_query($updtstk);
				
				if($resSuppliers){
				?>
				<strong class="text-success">Product inwarded Successfully.</strong>
				<br/><br/>
				<h4 class="text-info">Please wait... <i class="fa fa-spin fa-spinner"></i></h4>
				<script>
					setTimeout(function(){
						window.location.assign('inward_Purchase_Bags.php');
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