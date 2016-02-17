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
				$rom=$_REQUEST['rom'];
				$shw=$_REQUEST['shw'];
				$fillerpowder=$_REQUEST['fillerpowder'];
				$awf=$_REQUEST['awf'];
				//echo "Batch No: ".$batch_no." rom: ".$rom." shw: ".$shw." FP: ". $fillerpowder. " awf: ".$awf." hdpebags: ".$hdpebags;
				$prodQry="INSERT INTO `production_profile_master`(`profile_ROM`, `profile_SHW`, `profile_filler`, `profile_AWF`) VALUES ('".$rom."','".$shw."','".$fillerpowder."','".$awf."')";
				$resQry=mysql_query($prodQry);
				if($resQry){
					echo "<strong class='text-success'>Production profile created successfully</strong>";
				?>
				<br/><br/>
				<h4 class="text-info">Please wait... <i class="fa fa-spin fa-spinner"></i></h4>
					<script>
						setTimeout(function(){
							window.location.assign('production_profile.php');
						},1500);
					</script>
				<?php
				}
				else{
					echo "<h3 class='text-danger'>Production profile failed</h3>";
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