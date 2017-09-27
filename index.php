<!DOCTYPE HTML>
<html>
<head>
<title>Cart</title>
<meta name="" content="">
</head>
<body>
<h2>Your Shopping Cart Page</h2>
<p>To get your API credentials please create an account with <a target="_blank" href="http://pap.co.ke">Pap Payment Gateway</a></p>
<p>Hide these fields on a real cart system</p>
<form method="post" action="http://payments.pap.co.ke/v1/initPaymentDemo.php">
	<label>Acess Key</label>
	<input type="text" name="accessKey" value="00nucbvk7y3ts63kop7axqdw5ytygphefkno4u6r6"/><br>
	<label>Username</label>
	<input type="text" name="userName" value="ecobiz"/><br>
	<label>Transaction ID</label>
	<input type="text" name="TransactionID" value=""/><br>
	<label>Phone No.</label>
	<input type="text" name="PhoneNo" value=""/><br>
	<label>Order No.</label>
	<input type="text" name="orderNo" value=""/><br>
	<label>Order Amount</label>
	<input type="text" name="orderAmt" value=""/><br>
	<label>Param 1 (Optional)</label>
	<input type="text" name="param1" value=""/><br>
	<label>Param 2 (Optional)</label>
	<input type="text" name="param2" value=""/><br>
	<label>Param 3 (Optional)</label>
	<input type="text" name="param3" value=""/><br>
	<label>Param 4 (Optional)</label>
	<input type="text" name="param4" value=""/><br>
	<label>Param 5 (Optional)</label>
	<input type="text" name="param5" value=""/><br>
	<label>Callback URL</label>
	<input type="text" name="callbackURL" value="http://localhost/pap_sample/checkout.php"/><br>
	<input type="submit" name="" value="Proceed to Checkout"/>
</form>
</body>
</html>