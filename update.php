<?php 
$size=sizeof($_POST);
$num=$size/4;


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bank_');
for($i=1;$i<=$num;$i++)
{
$j1="cust_id".$i;
	$cust_id[$i]=$_POST[$j1];
	
	$j2="customername".$i;
	$customername[$i]=$_POST[$j2];
	$j3="phoneno".$i;
	$phoneno[$i]=$_POST[$j3];
	$j4="balance".$i;
	$balance[$i]=$_POST[$j4];
$q="UPDATE bank_table SET customername='$customername[$i]',phoneno=$phoneno[$i],balance=$balance[$i] 
WHERE cust_id=$cust_id[$i]";

mysqli_query($con,$q);


}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
 <h1>Update Results</h1>
 <p>Record updated successfully</p>
 <p>Back To HOME PAGE <a href="home.php"> Clickhere</a></p>
</body>
</html>