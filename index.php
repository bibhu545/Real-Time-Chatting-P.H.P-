<!DOCTYPE html>
<html>
<head>
	<title>Chat Box</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="chat.css"> -->
	<script type="text/javascript">
		function submitChat()
		{
			//alert('hello');
			if(form1.uname.value == ''  || form1.msg.value == '')
			{
				alert("Can't leave blanck");
				return;
			}
			var uname = form1.uname.value;
			var msg = form1.msg.value;
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function()
			{
				//alert("hello");
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					//alert("hello");
					document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
					//document.getElementById("dis").innerHTML=obj.responseText;
				}
			}
			xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
			xmlhttp.send();
		}

		$(document).ready(function(e)
		{
			//alert('kkaka');
			$.ajaxSetup({cache : false});
			setInterval(function(){$('#chatlogs').load('logs.php');},2000);
		})

	</script>


</head>
<body>
<form name="form1">
	Enter ur chat name : <input type="text" name="uname"><br>
	Your Message : <textarea name="msg"></textarea><br>
	<a href="#" onclick="submitChat()">send</a>
</form>

<div id="chatlogs" style="color: red;">
	Loading .....please wait...!!!
</div>
</body>
</html>