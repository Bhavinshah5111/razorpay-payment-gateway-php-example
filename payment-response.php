<?php

require_once 'razorpay/Razorpay.php';

use Razorpay\Api\Api;

$api_key = "your api key";
$api_secret = "your api key";


$api = new Api($api_key, $api_secret);

########################## get all payment options #####################################
//$params = array(
//    'count' => 2,
//    'skip' => 1,
//    'from' => 1400826740
//);
//$payment = $api->payment->all($params);
#############################################################


$id = "customert payment id";
$payment = $api->payment->fetch($id); // Returns a particular payment
$amount = $payment->amount;
//$api->payment->fetch($id)->capture(array('amount' => $amount));// capture on status //The status of payment. It can be created, authorized, captured, refunded, faile



echo "<PRE>";
print_r($payment);
echo "</PRE>";
exit;




//$api = new Api($api_key, $api_secret);
//$api->payment->all($options); // Returns array of payment objects
//$api->payment->fetch($id)->capture(array('amount' => $amount)); // Captures a payment
//$api->payment->fetch($id)->refund(); // Refunds a payment
//$api->payment->fetch($id)->refund(array('amount' => $refundAmount)); // Partially refunds a payment
// To get the payment details
//echo $payment->amount;
//echo $payment->currency;


