
<?php

	$uname=$_REQUEST['uname'];
	$msg =$_REQUEST['msg'];
	include 'db.php';
	
	//mysql_query("INSERT INTO chat ('username','msg') VALUES ('$uname','$msg')");
	mysql_query("insert into chat values('".$uname."','".$msg."')");
	$result = mysql_query("SELECT * FROM chat ");
	while($extract = mysql_fetch_array($result))
	{
		echo "<span class='names'>".$extract['username'] . " : " .$extract['msg'] . "<br>";
	}

?>