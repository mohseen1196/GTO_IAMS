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
			Update Client Details
			</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-10 col-sm-12 col-xs-12">
			<?php
				//$id=$_REQUEST['txthid'];
				$name=$_REQUEST['editName'];
				$add=$_REQUEST['editAdd'];
				$city=$_REQUEST['editCity'];
				$dist=$_REQUEST['editDist'];
				$cPerson=$_REQUEST['editCntPr'];
				$cNo=$_REQUEST['editCntNo'];
				$vat=$_REQUEST['editVat'];
			
			$selProds="UPDATE `client_master` SET `client_name`='".$name."',`client_add`='".$add."',`client_city`='".$city."',`client_dist`='".$dist."',`client_cntpr`='".$cPerson."',`client_cntno`='".$cNo."',`client_vatno`='".$vat."' WHERE `client_name`='".$name."'";
			$resProds=mysql_query($selProds);
			if($resProds){
			?>
				<strong class="text-success">Successfully Updated Values.</strong>
				<br/><br/>
				<h4 class="text-info">Please wait... <i class="fa fa-spin fa-spinner"></i></h4>
			<script>
					setTimeout(function(){
						window.location.assign('client_list.php');
					},2000);
				</script>	
			<?php 
			}
			else{				
			?>
				<strong class="text-danger">Something went wrong! Please try again</strong>
			<?php
			}
			?>
			<?php
			$delProds="DELETE FROM `client_master` WHERE `client_name`='".$name."'";
			$resDel=mysql_query($delProds);
			if($resDel){
			?>
			<strong class="text-danger">Record Deleted Successfully.</strong>
				<br/><br/>
				<h4 class="text-info">Please wait... <i class="fa fa-spin fa-spinner"></i></h4>
			<script>
					setTimeout(function(){
						window.location.assign('client_list.php');
					},2000);
			</script>	
			<?php 
			}
			else{				
			?>
				<strong class="text-danger">Something went wrong! Please try again</strong>
			<?php
			}
			?>
		<br>
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