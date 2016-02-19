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

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			<font color=#8A6D3B> Production Batch </font>
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?php
				$batch_no=$_POST['batch_no'];
				$rom=$_POST['rom'];
				$shw=$_POST['shw'];
				$fillerpowder=$_POST['fillerpowder'];
				$awf=$_POST['awf'];
				$hdpebags=$_POST['hdpebags'];
				$date=$_REQUEST['txtdate'];
				//$date=date("Y-m-d",strtotime($date));
				//echo "Batch No: ".$batch_no." rom: ".$rom." shw: ".$shw." FP: ". $fillerpowder. " awf: ".$awf." hdpebags: ".$hdpebags;
				$prodQry="INSERT INTO `production_batch_register`(`batch_no`, `R.O.M`, `S.H.W`, `filler_powder`, `A.W.F`, `HDPE_Bags`) VALUES ('".$batch_no."','".$rom."','".$shw."','".$fillerpowder."','".$awf."','".$hdpebags."')";
				$resQry=mysql_query($prodQry);
				$resQry;

				
			//Update Query for Filler powder	
				$selProd="SELECT `stock_available` FROM `stock_master` WHERE `prod_id`=1";
				$resProd=mysql_query($selProd);
				$rowProd=mysql_fetch_array($resProd,MYSQL_BOTH);
				
				$newstk=floatval($rowProd['stock_available'])-floatval($fillerpowder);
				$updtstk="UPDATE `stock_master` SET `stock_available`='".$newstk."',`stock_date`='".$date."' WHERE `prod_id`=1";
				$resuptdstck=mysql_query($updtstk);
			
			
			//Update Query for Raw Organic Manure		
				$selProd="SELECT `stock_available` FROM `stock_master` WHERE `prod_id`=2";
				$resProd=mysql_query($selProd);
				$rowProd=mysql_fetch_array($resProd,MYSQL_BOTH);
					
				$newstk=floatval($rowProd['stock_available'])-floatval($rom);
				$updtstk="UPDATE `stock_master` SET `stock_available`='".$newstk."',`stock_date`='".$date."' WHERE `prod_id`=2";
				$resuptdstck=mysql_query($updtstk);
				
					
			//Update Query for Slaughter House Waste	
				$selProd="SELECT `stock_available` FROM `stock_master` WHERE `prod_id`=3";
				$resProd=mysql_query($selProd);
				$rowProd=mysql_fetch_array($resProd,MYSQL_BOTH);
				
				$newstk=floatval($rowProd['stock_available'])-floatval($shw);
				$updtstk="UPDATE `stock_master` SET `stock_available`='".$newstk."',`stock_date`='".$date."' WHERE `prod_id`=3";
				$resuptdstck=mysql_query($updtstk);
				
				
			//Update Query for Animal Waste Filler		
				$selProd="SELECT `stock_available` FROM `stock_master` WHERE `prod_id`=4";
				$resProd=mysql_query($selProd);
				$rowProd=mysql_fetch_array($resProd,MYSQL_BOTH);
				
				$newstk=floatval($rowProd['stock_available'])-floatval($awf);
				$updtstk="UPDATE `stock_master` SET `stock_available`='".$newstk."',`stock_date`='".$date."' WHERE `prod_id`=4";
				$resuptdstck=mysql_query($updtstk);
				
				
			//Update Query for HDPE Bags	
				$selProd="SELECT `stock_available` FROM `stock_master` WHERE `prod_id`=5";
				$resProd=mysql_query($selProd);
				$rowProd=mysql_fetch_array($resProd,MYSQL_BOTH);
				
				$newstk=floatval($rowProd['stock_available'])-floatval($hdpebags);
				$updtstk="UPDATE `stock_master` SET `stock_available`='".$newstk."',`stock_date`='".$date."' WHERE `prod_id`=5";
				$resuptdstck=mysql_query($updtstk);
				
				
			//Update Query for ECOMEAL	
				$selProd="SELECT `stock_available` FROM `stock_master` WHERE `prod_id`=101";
				$resProd=mysql_query($selProd);
				$rowProd=mysql_fetch_array($resProd,MYSQL_BOTH);
				
				$newstk=floatval($rowProd['stock_available'])+10;
				$updtstk="UPDATE `stock_master` SET `stock_available`='".$newstk."',`stock_date`='".$date."' WHERE `prod_id`=101";
				$resuptdstck=mysql_query($updtstk);
				if($resQry){
					echo "<strong class='text-success'>Production batch created successfully</strong>";
				?>
				<br/><br/>
				<h4 class="text-info">Please wait... <i class="fa fa-spin fa-spinner"></i></h4>
					<script>
						setTimeout(function(){
							window.location.assign('production_batch.php');
						},1500);
					</script>
				<?php
				}
				else{
					echo "<h3 class='text-danger'>Production batch failed</h3>";
				}
			?>
		</div>
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


</script>
	</body>
</html>