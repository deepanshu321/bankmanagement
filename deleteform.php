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
 	<title>delete</title>
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
    <form action="deletion.php" method="post">
    <table id="table">
    	<tr>
    		<th>cust_id</th>
	    	<th>cust_name</th>
	    	<th>conatact_no</th>
	    	<th>balance</th>
            <th>select to delete</th>
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
            <td><input type="checkbox" name="<?php echo "checkbox".$i ?>" value="<?php echo $n['cust_id']  ?>"></td>
    	</tr>
    	<?php
    	}
    	 ?>
    	<tr ><td colspan=5><input  type="submit" value="delete"></td></tr>
    	
    </table>
</form>
 </body>
 </html>