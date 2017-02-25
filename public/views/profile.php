<?php 
	mysql_connect("local","root","");
	mysql_select_db("profiles");
	$id = $_REQUEST['id'];
	$get = mysql_query("SELECT * FROM users WHERE id='$id'");
	$get2 = mysql_fetch_assoc($get);
	$username = $get2['username'];
	
?>
