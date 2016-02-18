<?php
$con= mysql_connect('localhost','root','')
        or die('can not connect');
$db=  mysql_select_db('gto_iams',$con)
       or die('can not connect to database'. mysql_error());
	   
	$unm=$_GET['usernm'];
	$pwd=$_GET['passwd'];
	$qry="select * from  user_master  where username='".$unm."' and password='".$pwd."'";
	$result =  mysql_query($qry);
	$count =  mysql_num_rows($result);	
	if($count>0){
		echo "Login Successful";
		header('location:../startbootstrap-sb-admin-2-1.0.8/logindash.php');
	}
	else{
		echo "Login Unsuccessful";
	}
?>