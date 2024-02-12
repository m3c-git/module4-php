<?php

require_once '../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../../config');
$dotenv->load();
$api_key = $_ENV['API_KEY'];

$stripe = new \Stripe\StripeClient($api_key);

function calculateOrderAmount(int $amount): int {
    // Replace this constant with a calculation of the order's amount
    // Calculate the order total on the server to prevent
    // people from directly manipulating the amount on the client
    $safeAmount = htmlspecialchars($amount);
    return $safeAmount * 100;
}

header('Content-Type: application/json');

try {
    // retrieve JSON from POST body
    $jsonStr = file_get_contents('php://input');
    $jsonObj = json_decode($jsonStr);
    
    // TODO : Create a PaymentIntent with amount and currency in '$paymentIntent'
   $paymentIntent = $stripe->paymentIntents->create([
  'amount' => calculateOrderAmount($jsonObj->amount),
  'currency' => 'eur',
  'automatic_payment_methods' => ['enabled' => true],
]);

    $output = [
        'clientSecret' => $paymentIntent->client_secret,
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}

