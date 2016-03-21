<?php 
session_start();
require_once('test-stripe/Stripe/lib/Stripe.php');
$msg					= "";
$_SESSION['msg']	= "";
$_SESSION["address1"] 			= "";
$_SESSION["address2"] 			= "";
$_SESSION["city"] 					= "";
$_SESSION["postal"] 				= "";
$_SESSION["country"] 				= "";
$_SESSION["state"] 					= "";
if($_POST['isFormSubmitted']=="isFormSubmitted"){
	
	$cardNumber		= trim($_POST['cardNumber']);
	$cardHolderName	= trim($_POST['cardHolderName']);
	$exp_month		= trim($_POST['exp_month']);
	$exp_year		= trim($_POST['exp_year']);
	$card_cvv_no	= trim($_POST['card_cvv_no']);
	$address1		= trim($_POST['address1']);
	$address2		= trim($_POST['address2']);
	$city			= trim($_POST['city']);
	$postal			= trim($_POST['postal']);
	$country		= trim($_POST['country']);
	$state			= trim($_POST['state']);
	$terms_condition= trim($_POST['terms_condition']);
	
	$_SESSION["address1"]	= $address1;
	$_SESSION["address2"]	= $address2;
	$_SESSION["city"]		= $city;
	$_SESSION["postal"]		= $postal;
	$_SESSION["country"]	= $country;
	$_SESSION["state"]		= $state;
	
	if($cardNumber==""){
		$msg	= "Please enter credit card number.";
	}
	if(!is_numeric($cardNumber) && $cardNumber!=""){
		$msg	= "Only numeric values are allowed in card number.";
	}
	if(strlen($cardNumber)!="16" && $cardNumber!=""){
		$msg	= "Please enter 16-digit credit card number.";
	}
	if($cardHolderName==""){
		$msg	= "Please enter card holder name.";
	}
	if(!is_numeric($exp_month) && $exp_month!=""){
		$msg	= "Please enter expiration month.";
	}
	if(!is_numeric($exp_year) && $exp_year!=""){
		$msg	= "Please enter expiration year.";
	}
	if(date('Y') > $exp_year){
		$msg	= "Invalid expiration year.";
	}
	if(date('Y') == $exp_year && date('m') > $exp_month){
		$msg	= "Invalid expiration date.";
	}
	if($card_cvv_no==""){
		$msg	= "Please enter card cvv number.";
	}
	if(!is_numeric($card_cvv_no) && $card_cvv_no!=""){
		$msg	= "Only numeric values are allowed in cvv number.";
	}
	if(strlen($card_cvv_no)!="4" && $card_cvv_no!=""){
		$msg	= "Please enter 4-digit Card CVV Number.";
	}
	if($address1==""){
		$msg	= "Please enter Address1.";
	}
	if($city==""){
		$msg	= "Please enter city.";
	}
	if($postal==""){
		$msg	= "Please enter ZIP/ Postal Code.";
	}
	if($country==""){
		$msg	= "Please select country.";
	}
	if($state==""){
		$msg	= "Please select province.";
	}
}else{
	header('Location: pay.php');
	exit();
}

if($msg!=""){
	$_SESSION['msg']	= $msg;
	header('Location: pay.php');
	exit();
}
try {
	$_SESSION['msg']	= 'Oops! Your card did not process successfully. This can happen for many different reasons. Perhaps try another card or re-enter the card number again.';
	Stripe::setApiKey("sk_test_7qW8qqNsVSFRS4lTb2yNMMox"); //Replace with your Secret Key

	//generate token id
	$tokenObj = Stripe_Token::create(array(
		"card" => array(
			"number"			=>	$cardNumber,
			"exp_month"			=>	$exp_month,
			"exp_year"			=>	$exp_year,
			"cvc"				=>	$card_cvv_no,
			"name"				=>	$cardHolderName,
			"address_line1"		=>	$address1,
			"address_line2"		=>	$address2,
			"address_zip"		=>	$postal,
			"address_city"		=>	$city,
			"address_state"		=>	$state,
			"address_country"	=>	$country
		)
	));

	// create customer
	$customer = Stripe_Customer::create(array(
		'email' => $_SESSION['checkout_sess']['email'],
		'card'  => $tokenObj->id,
	));

	$charge = Stripe_Charge::create(array(
	  'customer' => $customer->id,
	  'amount'   => $_SESSION['checkout_sess']['total_price'],
	  'currency' => 'usd'
	));
	
	if($charge->paid==1){
		$_SESSION['msg'] = '';
		unset($_SESSION['msg']);
		$_SESSION['payment_done'] = 'yes';
		header('Location: thank_you.php');
		exit();
	}
}
catch(Stripe_CardError $e) {
	if(isset($e->jsonBody['error']['message']))
		$_SESSION['msg'] = $e->jsonBody['error']['message'];
}
catch (Stripe_InvalidRequestError $e) {
	if(isset($e->jsonBody['error']['message']))
		$_SESSION['msg'] = $e->jsonBody['error']['message'];
} catch (Stripe_AuthenticationError $e) {
	if(isset($e->jsonBody['error']['message']))
		$_SESSION['msg'] = $e->jsonBody['error']['message'];
} catch (Stripe_ApiConnectionError $e) {
	if(isset($e->jsonBody['error']['message']))
		$_SESSION['msg'] = $e->jsonBody['error']['message'];
} catch (Stripe_Error $e) {
	if(isset($e->jsonBody['error']['message']))
		$_SESSION['msg'] = $e->jsonBody['error']['message'];
} catch (Exception $e) {
	if(isset($e->jsonBody['error']['message']))
		$_SESSION['msg'] = $e->jsonBody['error']['message'];
}
header('Location: pay.php');
exit();
?>