
<?php 
	$con = mysql_connect("localhost","practiceportal","code4music");
	if (!$con){
		die("Can't connect: " . mysql_error());
	}
	mysql_close($con);

	$button = isset($_POST('submit'));

	if($button)
	{
		$username = $_POST('username');
		$password = $_POST('psw');
		$get = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
		$get2 = mysql_fetch_assoc($get);
		$id = $get2['id'];
		$num = mysql_num_rows($get);

		if($num==1)
		{
			header("location:profile.php?id=$id");
		}
		else
		{
			echo "This username doesn't exist! Please sign up for an account."
		}
	}
	
?> 