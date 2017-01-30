<?php

	
	include 'db.php';
	
	//mysql_query("INSERT INTO chat ('username','msg') VALUES ('$uname','$msg')");
	
	$result = mysql_query("SELECT * FROM chat ");
	while($extract = mysql_fetch_array($result))
	{
		echo $extract['username'] . " : " .$extract['msg'] . "<br>";
	}

?>