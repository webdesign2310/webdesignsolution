<?php
session_start();
require_once('test-stripe/Stripe/lib/Stripe.php');
require 'PHPMailer-master/PHPMailerAutoload.php';

if($_POST):
echo '<pre>';
print_r($_POST);
$_SESSION['payment']['success'] = $_SESSION['payment']['error'] = '';
$emailregex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/';
$phoneregex = '/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/';
$numberregex= '/^[0-9]*$/';
if(!isset($_POST['email']) || empty($_POST['email'])){
	$_SESSION['payment']['error'] = "Please enter your email.";
}
elseif(!preg_match($emailregex, $_POST['email'])){
	$_SESSION['payment']['error'] = "Please enter valid email address.";
}
elseif(!isset($_POST['firstname']) || empty($_POST['firstname'])){
	$_SESSION['payment']['error'] = "Please enter your name.";
}
elseif(!isset($_POST['address']) || empty($_POST['address'])){
	$_SESSION['payment']['error'] = "Please enter shipping address.";
}
elseif(!isset($_POST['city']) || empty($_POST['city'])){
	$_SESSION['payment']['error'] = "Please enter shipping city.";
}
elseif(!isset($_POST['state']) || empty($_POST['state'])){
	$_SESSION['payment']['error'] = "Please enter shipping state.";
}
elseif(!isset($_POST['postal']) || empty($_POST['postal'])){
	$_SESSION['payment']['error'] = "Please enter shipping zip/postal code.";
}
elseif(!isset($_POST['country']) || empty($_POST['country'])){
	$_SESSION['payment']['error'] = "Please select shipping country.";
}
elseif(!isset($_POST['phone']) || empty($_POST['phone'])){
	$_SESSION['payment']['error'] = "Please enter your phone number.";
}
elseif(!preg_match($phoneregex,$_POST['phone'])){
	$_SESSION['payment']['error'] = "Please enter valid phone number.";
}
elseif(isset($_POST['bill_add']) && (!isset($_POST['bill_address']) || empty($_POST['bill_address'])))
{
	$_SESSION['payment']['error'] = "Please enter billing address.";
}
elseif(isset($_POST['bill_add']) && (!isset($_POST['bill_city']) || empty($_POST['bill_city'])))
{
	$_SESSION['payment']['error'] = "Please enter billing city.";
}
elseif(isset($_POST['bill_add']) && (!isset($_POST['bill_state']) || empty($_POST['bill_state'])))
{
	$_SESSION['payment']['error'] = "Please enter billing state.";
}
elseif(isset($_POST['bill_add']) && (!isset($_POST['bill_postal']) || empty($_POST['bill_postal'])))
{
	$_SESSION['payment']['error'] = "Please enter billing zip/postal code.";
}
elseif(isset($_POST['bill_add']) && (!isset($_POST['bill_country']) || empty($_POST['bill_country'])))
{
	$_SESSION['payment']['error'] = "Please select billing country.";
}
elseif(!isset($_POST['card_type']) || empty($_POST['card_type']))
{
	$_SESSION['payment']['error'] = "Please select card type.";
}
elseif(!isset($_POST['card_number']) || empty($_POST['card_number']) || strlen($_POST['card_number']) != 16 || !is_numeric($_POST['card_number']))
{
	$_SESSION['payment']['error'] = "Please enter valid card number.";
}
elseif(!isset($_POST['card_month']) || empty($_POST['card_month']))
{
	$_SESSION['payment']['error'] = "Please select card expiration month.";
}
elseif(!is_numeric($_POST['card_month']) || intval($_POST['card_month']) <1 || intval($_POST['card_month']) > 12)
{
	$_SESSION['payment']['error'] = "Please select expiration month.";
}
elseif(!isset($_POST['card_year']) || empty($_POST['card_year']))
{
	$_SESSION['payment']['error'] = "Please select card expiration year.";
}
elseif(!is_numeric($_POST['card_year']) || $_POST['card_year'] < intval(date('Y')))
{
	$_SESSION['payment']['error'] = "Please select expiration year.";
}
elseif($_POST['card_year']== intval(date('Y')) && $_POST['card_month'] < intval(date('m')))
{
	$_SESSION['payment']['error'] = "Please select valid expiration date.";
}
elseif(!isset($_POST['card_cvv']) || empty($_POST['card_cvv']))
{
	$_SESSION['payment']['error'] = "Please enter card CVV no.";
}
elseif(!is_numeric($_POST['card_cvv'])|| strlen($_POST['card_cvv']) <3 || strlen($_POST['card_cvv']) >4)
{
	$_SESSION['payment']['error'] = "Please enter valid CVV.";
}
elseif(!isset($_POST['quantity']) || empty($_POST['quantity']) || intval($_POST['quantity']) == 0)
{
	$_SESSION['payment']['error'] = "Please enter card quantity.";
}
elseif(!is_numeric($_POST['quantity']))
{
	$_SESSION['payment']['error'] = "Please enter card quantity in number.";
}
elseif(!preg_match($numberregex, $_POST['quantity']))
{
	$_SESSION['payment']['error'] = "Please enter card quantity in number only.";
}
elseif(!isset($_POST['card_value']) || empty($_POST['card_value']))
{
	$_SESSION['payment']['error'] = "Please enter card value.";
}
elseif(!is_numeric($_POST['card_value']))
{
	$_SESSION['payment']['error'] = "Please enter card value in number.";
}
elseif(intval($_POST['card_value']) < 10)
{
	$_SESSION['payment']['error'] = "Cards must be a minimum of $10.";
}
elseif(!isset($_SESSION['payment']['error']) || empty($_SESSION['payment']['error'])){
	try{
		$total_price = round(floatval($_POST['quantity'])*floatval($_POST['card_value']),2);
		$_SESSION['total_price'] = $total_price;
		$_SESSION['payment']['error']	= 'Oops! Your card did not process successfully. This can happen for many different reasons. Perhaps try another card or re-enter the card number again.';
		
		echo '<pre>';print_r($_SESSION);echo '</pre>';
		
		Stripe::setApiKey("sk_test_7qW8qqNsVSFRS4lTb2yNMMox"); //Replace with your Secret Key

		$cardDetails = 	array(
							"number"			=>	trim($_POST['card_number']),
							"exp_month"			=>	trim($_POST['card_month']),
							"exp_year"			=>	trim($_POST['card_year']),
							"cvc"				=>	trim($_POST['card_cvv']),
							"name"				=>	trim($_POST['firstname']),
							"address_line1"		=>	trim($_POST['address']),
							"address_zip"		=>	trim($_POST['postal']),
							"address_city"		=>	trim($_POST['city']),
							"address_state"		=>	trim($_POST['state']),
							"address_country"	=>	trim($_POST['country'])
						);
		if(isset($_POST['bill_add'])){
			$cardDetails['address_line1']	= trim($_POST['bill_address']);
			$cardDetails['address_zip']		= trim($_POST['bill_postal']);
			$cardDetails['address_city']	= trim($_POST['bill_city']);
			$cardDetails['address_state']	= trim($_POST['bill_state']);
			$cardDetails['address_country'] = trim($_POST['bill_country']);
			$cardDetails['metadata']		= array(
												"shipping_line1"	=>	trim($_POST['address']),
												"shipping_zip"		=>	trim($_POST['postal']),
												"shipping_city"		=>	trim($_POST['city']),
												"shipping_state"	=>	trim($_POST['state']),
												"shipping_country"	=>	trim($_POST['country'])
											);
		}
		
		//generate token id
		print_r($cardDetails);
		$tokenObj = Stripe_Token::create(array("card" =>$cardDetails));
		print_r($tokenObj);
		// create customer
		$customer = Stripe_Customer::create(array(
			'email' => trim($_POST['email']),
			'card'  => $tokenObj->id,
		));

		$charge = Stripe_Charge::create(array(
		  'customer' => $customer->id,
		  'amount'   => $_SESSION['total_price'],
		  'currency' => 'cad'
		));
		
		if($charge->paid==1){
			$_SESSION['payment']['error'] = '';
			unset($_SESSION['payment']['error']);
			$_SESSION['payment']['success'] = 'You card payment submitted successfully.';
			header('Location: gift_card.php');
			exit();
		}
		
		/*$_POST['feedback_comment'] = (empty($_POST['feedback']))?'No comment/feedback provided.':nl2br($_POST['feedback']);
		$_POST['subscribe_text'] = (isset($_POST['sign_me_up']))?'I\'d like to receive The Metropolitan Grill e-memo':'';
		if(intval($_POST['rate_us'])<1 || intval($_POST['rate_us']) >5 )
			$_POST['rate_us'] = 0;
		$_POST['rating'] = '<img src="http://maverick.dev.cm/metropolitan_grill/images/rating_'.intval($_POST['rate_us']).'.png" alt="rating" title="rating"/>';
		
		$body = file_get_contents('mail-template/order.tpl');
		foreach($_POST as $key=>$value)
			$body = str_replace('%%'.$key.'%%',$value,$body);
		
		$mail = new PHPMailer;
		$mail->From = $_POST['email'];
		$mail->FromName = $_POST['first_name'];
		//$mail->addAddress('support@maverick.dev.cm');
		$mail->addAddress('sunilkumar.developers@gmail.com');
		$mail->WordWrap = 50; 
		$mail->Subject = "User comment/feedback";
		$mail->msgHTML($body);
		if(!$mail->Send())
		{
			$_SESSION['payment']['error'] = 'Comment/Feedback not submitted';
		}else{
			$_SESSION['payment']['success'] = 'Thanks for your Comment/Feedback';
			$_POST = array(); unset($_POST);
		}
		*/
	}
	catch(Stripe_CardError $e) {
		print_r($e);
		if(isset($e->jsonBody['error']['message']))
			$_SESSION['payment']['error'] = $e->jsonBody['error']['message'];
	}
	catch (Stripe_InvalidRequestError $e) {
		print_r($e);
		if(isset($e->jsonBody['error']['message']))
			$_SESSION['payment']['error'] = $e->jsonBody['error']['message'];
	} catch (Stripe_AuthenticationError $e) {
		print_r($e);
		if(isset($e->jsonBody['error']['message']))
			$_SESSION['payment']['error'] = $e->jsonBody['error']['message'];
	} catch (Stripe_ApiConnectionError $e) {
		print_r($e);
		if(isset($e->jsonBody['error']['message']))
			$_SESSION['payment']['error'] = $e->jsonBody['error']['message'];
	} catch (Stripe_Error $e) {
		print_r($e);
		if(isset($e->jsonBody['error']['message']))
			$_SESSION['payment']['error'] = $e->jsonBody['error']['message'];
	} catch (Exception $e) {
		print_r($e);
		if(isset($e->jsonBody['error']['message']))
			$_SESSION['payment']['error'] = $e->jsonBody['error']['message'];
	}
}
die();
endif;
?>