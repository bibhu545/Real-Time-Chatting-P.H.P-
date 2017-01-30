<?php

	session_start();
	$con = mysql_connect('localhost','root','');
	if(!$con)
	{
		echo "error in connection .";
	}
	else
	{
		mysql_select_db('chatbox',$con);
	}

?>