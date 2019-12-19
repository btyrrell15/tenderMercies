<?php
  require_once('vendor/autoload.php');

  // Set your secret key: remember to change this to your live secret key in production
  // See your keys here: https://dashboard.stripe.com/account/apikeys
  \Stripe\Stripe::setApiKey('sk_test_xvO3gimHV3cRpTydCAkENhPQ00IxPn7PLg');

  // Sanitize POST array
  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  $first_name = $POST['first_name'];
  $last_name = $POST['last_name'];
  $email = $POST['email'];
  $donation = $POST['donation'];
  $token = $POST['stripeToken'];

  //Create Cutomer in Stripe
  $customer = \Stripe\Customer::create(array(
    "name" => $first_name.' '.$last_name,
    "email" => $email,
    "source" => $token
));

// Charge customer
$charge = \Stripe\Charge::create(array(
  "amount" => $donation*100.00,
  "currency" => "usd",
  "description" => "Donation to Tender Mercies",
  "customer" => $customer->id
));

// Redirect to Success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);

?>
