<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bank_');
$q="select *from bank_table";
$results=mysqli_query($con,$q);
$size=mysqli_num_rows($results);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>view</title>
 	<style>
 	#table{
 		border:solid maroon 2px;
 		width:500px;
 	}
 	#table tr{
 		background-color: #c2e261;
 	}
 	</style>
 </head>
 <body>
 	<h1>BANK RECORDS</h1>
    <table id="table">
    	<tr>
    		<th>cust_id</th>
	    	<th>cust_name</th>
	    	<th>conatact_no</th>
	    	<th>balance</th>
    	</tr>
    	<?php 
    	for($i=1;$i<=$size;$i++)
    	{
    		$n=mysqli_fetch_array($results);
    	?>
    	<tr>
    		<td><?php echo $n['cust_id'] ?></td>
    		<td><?php echo $n['customername'] ?></td>
    		<td><?php echo $n['phoneno'] ?></td>
    		<td><?php echo $n['balance'] ?></td>
    	</tr>
    	<?php
    	}
    	 ?>
    	
    	
    </table>
    <br>
    <P>BACK TO HOME PAGE <a href="home.php"> clickhere</a></P>
 </body>
 </html>