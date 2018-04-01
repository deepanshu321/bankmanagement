<?php 
 $customername=$_POST['customername'];
 $phno=$_POST['phoneno'];
 $balance=$_POST['balance'];
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'bank_');
$q="INSERT INTO bank_table(customername,phoneno,balance) values('$customername',$phno,$balance)";
$status=mysqli_query($con,$q);

mysqli_close($con);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>insert process</title>
 </head>
 <body>
 	<h1>Insert Results</h1>
 		<?php 
 		if($status==1)
 			echo "insertion sussesfull";
 		else
 			echo "failed";
 		
 		
          
 		 ?>
 		 <br>
 		 you want to insert more consumer <a href="insertform.php"> click here</a><br>
 		 <P>BACK TO HOME PAGE <a href="home.php"> clickhere</a></P>
 		
 </body>
 </html>