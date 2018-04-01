<!DOCTYPE html>
<html>
<head>
	<title>insertion</title>
	<style >
		#form{
			border-radius: 4px;
			border: maroon 2px solid;
			position: relative;
			width: 400px;
			background-color: pink;
		}
		#form label{
			padding:10px;
			font-color:#0b0c0c;
			font-size: 20px;
		}
		#form div{
			margin-left: 20px: 
			padding:10px;
		}
		input{
			height:30px;
			width:200px;
		}


	</style>
</head>
<body>
	<h1>BANK MANAGEMENT SYSTEM</h1>
	<form action="insert.php" method="post" id="form">
		
		<label>Customer name</label>
		<div><input type="text" name="customername"></div><br>
		<label>Contact no</label>
		<div><input type="text" name="phoneno"></div><br>
		<label>Balance</label>
		<div><input type="text" name="balance"></div><br>
		<input style="height: 40px;width:80px; font-size: 20px; " type="submit" value="Insert">

		
	</form>
	<P>BACK TO HOME PAGE <a href="home.php"> clickhere</a></P>
</body>
</html>