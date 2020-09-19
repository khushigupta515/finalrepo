<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phonenumber'];
	$amount=$_POST['amount'];	
	include 'instamojo/Instamojo.php';
	$api = new Instamojo\Instamojo('test_d7d3a2c861ba314d1eec10e5c1c', 'test_7e2498308598144acdcd3312447','https://test.instamojo.com/api/1.1/');

	try {
	    $response = $api->paymentRequestCreate(array(
	        "purpose" => "Donation",
	        "amount" => $amount,
	        "send_email" => true,
	        "email" => $email,
	        "buyer_name"=>$name,
	        "phone"=>$phone,
	        "allow_repeated_payments"=>false,
	        "redirect_url" => "http://localhost/hackathon/thankyou.php"
	        ));
	    $pay_url=$response['longurl'];
	    header("location:$pay_url");
		}
		catch (Exception $e) {
		    print('Error: ' . $e->getMessage());
		}
?>