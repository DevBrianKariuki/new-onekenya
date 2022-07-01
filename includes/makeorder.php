<?php

session_start();

include 'db.php';


if (isset($_POST['makeorder'])) {
	$firstName = $_SESSION['first_name'];
	$lastName = $_SESSION['last_name'];
	$email = $_SESSION['email'];
	$phone = $_SESSION['phone'];
	$address = mysqli_escape_string($db, $_POST['address']);
	$postCode = mysqli_escape_string($db, $_POST['postcode']);
	$county = mysqli_escape_string($db, $_POST['county']);
	$zone = mysqli_escape_string($db, $_POST['town']);
	$orderNotes = mysqli_escape_string($db, $_POST['ordernotes']);

	$totalAmount = $_SESSION['grand-total'];
	$ref_code = ('O'. $firstName[0] . $lastName[0] .  date("YmdHis"));
	echo($ref_code);
	$status = "Pending";
	$date = date("Y/m/d H:i");

	//insert into the admin database

	$insert = "INSERT INTO `orders`( `ref_code`, `first_name`, `last_name`, `email`, `phone`, `county`, `town`, `postcode`, `address`, `date_ordered`, `amount`, `status`) VALUES ('$ref_code','$firstName','$lastName','$email','$phone','$county','$zone','$postCode','$address','$date','$totalAmount','$status')";

	if (mysqli_query($db, $insert) === true) {
		echo("Success");
		unset($_SESSION['cart']);
		header("Location: ../orders.php?success=Your order has been placed successfully");

		//Insert into farmers database
		$ref_code_2 = $ref_code = ('O'. strtoupper($firstName[(strlen($firstName) - 1)]) . strtoupper($lastName[(strlen($lastName) - 1)]) .  date("YmdHis"));
		echo($ref_code_2);
		$customer = strtoupper($firstName) . " " . strtoupper($lastName);
		echo($customer);

		$product = "Cabbages";


	}else{
		echo("Failed Massively Look for the cause");
	}

}

if (isset($_POST['paynow'])) {
	$customer_phone= $_POST['phone_number'];
	echo "YOUR MPESA NUMBER IS " . $customer_phone;


	///////////////////////////////////////////////////////////////MPESA TRANSACTION/////////////////////////////////////////////////
	// SETTINGS
	define('CONSUMER_KEY', ''); // Consumer key
	define('CONSUMER_SECRET', ''); // Consumer secret
	define('B2C_SHORTCODE', ''); //Paybill number
	define('B2C_INITIATOR', ''); // Initiator name

	define('SECURITY_CREDENTIAL', '');

	function get_accesstoken()
	{

	    $credentials = base64_encode(CONSUMER_KEY . ':' . CONSUMER_SECRET);
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials, 'Content-Type: application/json'));
	    $response = curl_exec($ch);
	    curl_close($ch);
	    $response = json_decode($response);

	    $access_token = $response->access_token;

	    // The above $access_token expires after an hour, find a way to cache it to minimize requests to the server
	    if (!$access_token) {
	        throw new Exception("Invalid access token generated");
	        return false;
	    }
	    return $access_token;
	}

	function submit_request($endpoint_url, $json_body)
	{ // Returns cURL response
	    $access_token = get_accesstoken();

	    if ($access_token != '' || $access_token !== false) {
	        $curl = curl_init();
	        curl_setopt($curl, CURLOPT_URL, $endpoint_url);
	        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token));

	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($curl, CURLOPT_POST, true);
	        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_body);

	        $response = curl_exec($curl);
	        curl_close($curl);
	        return $response;
	    } else {
	        throw new Exception("Access token is invalid");
	        return false;
	    }
	}

	function b2c_request($amount = 10, $msisdn = $customer_phone, $remarks = 'payforgroceries')
	{

	    $data = array(

	        'InitiatorName' => B2C_INITIATOR,
	        'SecurityCredential' => SECURITY_CREDENTIAL,
	        'CommandID' => 'SalaryPayment',
	        'Amount' => $amount,
	        'PartyA' => B2C_SHORTCODE,
	        'PartyB' => $msisdn,
	        'Remarks' => $remarks, // mandatory
	        'QueueTimeOutURL' => 'https://example.com/callback1',
	        'ResultURL' => 'https://example.com/callback2',
	        'Occasion' => '', //optional
	    );

	    $data = json_encode($data);
	    $url = 'https://api.safaricom.co.ke/mpesa/b2c/v1/paymentrequest';
	    $response = submit_request($url, $data);
	    return $response;
	}

	$response = b2c_request(10, $customer_phone, 'payemployees');
	print_r($response);



}

?>