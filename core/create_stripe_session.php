<?php
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51TuClavePrivadaDeStripe');

$data = json_decode(file_get_contents('php://input'), true);

try {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $data['movie'] . ' - ' . $data['cinema'],
                    'description' => 'Formato: ' . $data['format'] . ' | ' . $data['date']
                ],
                'unit_amount' => $data['total'],
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://tudominio.com/success.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => 'https://tudominio.com/cancel.php',
    ]);

    header('Content-Type: application/json');
    echo json_encode(['id' => $session->id]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}