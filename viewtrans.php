<?php 
$cust_id=$_POST['cust_id'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bank_');
$q="select *from transaction where cust_id=$cust_id";
$results=mysqli_query($con,$q);
$size=mysqli_num_rows($results);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>view transaction</title>
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
 	<h1>TRANSACTION RECORDS</h1>
    <table id="table">
    	<tr>
    		<th>trans_id</th>
	    	<th>particulars</th>
	    	<th>amount</th>
	    	<th>deposit_or_withdraw</th>
            <th>date_of_trans</th>
            <th>cust_id</th>
    	</tr>
    	<?php 
    	for($i=1;$i<=$size;$i++)
    	{
    		$n=mysqli_fetch_array($results);
    	?>
    	<tr>
    		<td><?php echo $n['trans_id'] ?></td>
    		<td><?php echo $n['particulars'] ?></td>
    		<td><?php echo $n['amount'] ?></td>
    		<td><?php echo $n['deposit_or_withdraw'] ?></td>
            <td><?php echo $n['date_of_trans'] ?></td>
            <td><?php echo $n['cust_id'] ?></td>
    	</tr>
    	<?php
    	}
    	 ?>
    	
    	
    </table><br>
    <P>BACK TO HOME PAGE <a href="home.php"> clickhere</a></P>
 </body>
 </html>