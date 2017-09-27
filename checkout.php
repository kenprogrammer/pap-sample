<?php
	if(isset($_POST['submit'])){
		
		$accessKey=$_GET['apikey']; //sanitize as necessary
		$accessName=$_GET['accname']; //sanitize as necessary
		$t_id=$_GET['t-id']; //sanitize as necessary
		
		$data  = json_decode(file_get_contents('http://payments.pap.co.ke/v1/responseDemo.php?t-id='.$t_id.'&accname='.$accessName.'&apikey='.$accessKey), true);
		
		print_r($data);
		//extract($data);
		
		//echo $txn_status;
		///echo $data['amount_paid'];
	}
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Checkout</title>
<meta name="" content="">
</head>
<body>
<h2>Your Check Out Page</h2>
<p>Check and respond to the USSD push on your phone</p>
<p>Click the Check Out button to retrieve payment response</p>
<p>Do whatever you wish with the response</p>
<p>NOTE: Here you can save your Orders,Payments details and send a customer a confirmation email.</p>
<form method="post" action="">
	
	<input type="submit" name="submit" value="Check Out"/>
</form>
</body>
</html>