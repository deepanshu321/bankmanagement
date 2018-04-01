<?php 
$num=sizeof($_POST);
$j=1;

for($i=1;$i<=$num;$i++,$j++)
{
	$k="checkbox".$j;
	if(isset($_POST[$k]))
		$r[$i]=$_POST[$k];
    else
    	$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bank_');
for($i=1;$i<=$num;$i++)
{
	$cust_id=$r[$i];
$q="DELETE FROM bank_table where cust_id=$cust_id";
mysqli_query($con,$q);
$j="DELETE FROM transaction where cust_id=$cust_id";
mysqli_query($con,$j);
}
mysqli_close($con);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>deletion</title>
 </head>
 <body>
 	<h1>Delete Result</h1>
 	<p><?php echo $num; ?> records deleted</p>
 	<p>Back to home page <a href="home.php"> clickhere</a></p>
 </body>
 </html>