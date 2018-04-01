<!DOCTYPE html>
<html>
<head>
	<title>money transaction</title>
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
	<h2>TRANSACTION FORM</h2>
	<form action="addmoney.php" method="post" id="form">
		<label> Customer ID</label>
		<div><input type="text" name="cust_id"></div><br>
		<label> Enter Amount</label>
		<div><input type="text" name="amount"></div><br>
		<label> Particulars</label>
		<div><input type="text" name="particulars"></div><br>
		<label> Date of transaction</label>
		<div><input type="text" name="date_of_trans"></div><br>
		<label> Deposit or withdraw</label>
		<div><input type="text" name="deposit_or_withdraw"></div><br>
		<input style="height: 40px;width:80px; font-size: 20px; " type="submit" value="Insert">

		
	</form>
	<P>BACK TO HOME PAGE <a href="home.php"> clickhere</a></P>
</body>
</html>