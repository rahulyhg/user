<?php
	$con=mysql_connect("localhost","varun","varun12");
	if(!$con)
	{
		die("connection failed".mysql_error());
	}
	mysql_select_db("squareone",$con);
	mysql_query("insert into table_register values('$_POST[first_name]','$_POST[last_name]',$_POST[rollno],'$_POST[email]','$_POST[pass]')");
	echo "record inserted";
	header('location:login.php');
?>