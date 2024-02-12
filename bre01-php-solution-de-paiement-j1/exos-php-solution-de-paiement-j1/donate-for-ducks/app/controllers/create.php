<?php

require_once '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../config/.env');
$dotenv->load();
$api_key = $_ENV['API_KEY'];

$stripe = new \Stripe\StripeClient('sk_test_51IR2zxGbXgDCCUMp8z7InlF9RPWYv3jj2OjjlL5fx0I8cuIg0taLc9wfwURkixPxM7G1LtISC80Lzf71NVInb7g5005OZgmN9H');
$customer = $stripe->customers->create([
    'description' => 'example customer',
    'email' => 'email@example.com',
    'payment_method' => 'pm_card_visa',
]);
echo $customer;

function calculateOrderAmount(int $amount): int {
    // Replace this constant with a calculation of the order's amount
    // Calculate the order total on the server to prevent
    // people from directly manipulating the amount on the client
    return 1400;
}

header('Content-Type: application/json');

try {
    // retrieve JSON from POST body
    $jsonStr = file_get_contents('php://input');
    var_dump($jsonStr);
    $jsonObj = json_decode($jsonStr);

    // TODO : Create a PaymentIntent with amount and currency in '$paymentIntent'

    $output = [
        'clientSecret' => $paymentIntent->client_secret,
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}

