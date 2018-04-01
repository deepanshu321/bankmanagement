<?php 
$cust_id=$_POST['cust_id'];
//echo $cust_id;
$amount=$_POST['amount'];
//echo $amount;
$particulars=$_POST['particulars'];
//echo $particulars;
$deposit_or_withdraw=$_POST['deposit_or_withdraw'];
//echo $deposit_or_withdraw;
$date_of_trans=$_POST['date_of_trans'];
//echo $date_of_trans;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bank_');
$msg="balance has updated";
if($deposit_or_withdraw=='D')
{
	$h="SELECT *FROM bank_table WHERE cust_id=$cust_id";
	$b=mysqli_query($con,$h);
	$r=mysqli_num_rows($b);
	for($i=1;$i<=$r;$i++)
	{
		$row=mysqli_fetch_array($b);
		$balance=$row['balance'];
	}
	
	

	if($r>0)
	{
$w="UPDATE  bank_table
	SET balance=balance+$amount
	WHERE cust_id=$cust_id";
	mysqli_query($con,$w);
}

}
else{
	$h="SELECT *FROM bank_table WHERE cust_id=$cust_id";
	$b=mysqli_query($con,$h);
	$r=mysqli_num_rows($b);
	for($i=1;$i<=$r;$i++)
	{
		$row=mysqli_fetch_array($b);
		$balance=$row['balance'];
	}
	
	

	if($r>0&&$balance<$amount)
	{
		$msg="no sufficiant balance to withdraw";
		echo $msg;
	}
	else
	{
	$w="UPDATE  bank_table
	SET balance=balance-$amount
	WHERE cust_id=$cust_id";
	mysqli_query($con,$w);
    }
}
if($r>0&&$msg=="balance has updated")
{
$q="INSERT INTO transaction(particulars,deposit_or_withdraw,date_of_trans,cust_id,amount) VALUES('$particulars','$deposit_or_withdraw','$date_of_trans',$cust_id,$amount)";
$status=mysqli_query($con,$q);
}





 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
    <p> <?php 
     if($r>0&&$msg=="balance has updated"&&$status==1){
     	echo "transaction occurs successfully ";

     } 
     else {
     	echo "transaction failed";
     }?></p><br>
     <P>BACK TO HOME PAGE <a href="home.php"> clickhere</a></P>

 </body>
 </html>