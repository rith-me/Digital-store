<?php
// បញ្ជាក់ថា response ជា JSON
// echo "Method: " . $_SERVER['REQUEST_METHOD'];
header('Content-Type: application/json');

// Read JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Token ត្រូវរក្សាជាសម្ងាត់ក្នុង .env នៅ production
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjp7ImlkIjoiNzRhM2ZjOGRhYzRlNDBiYSJ9LCJpYXQiOjE3NDUzMzAwMjgsImV4cCI6MTc1MzEwNjAyOH0.Tpi2_a2t9nKy9rHbgwRKKXhR-JS9FfpU5uLaNSt8XRg';

// Validate md5 input
if (!isset($input['md5']) || empty($input['md5'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing md5 input']);
    exit;
}

// cURL call to Bakong API
$ch = curl_init('https://api-bakong.nbc.gov.kh/vi/check-transaction-by-md5');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: ' . 'Bearer ' . $token
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['md5' => $input['md5']]));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // ⚠️ Not recommended in production

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    // Handle network-level error
    http_response_code(500);
    echo json_encode(['error' => 'cURL error: ' . curl_error($ch)]);
} elseif (empty($response)) {
    // Handle empty response
    http_response_code(502);
    echo json_encode(['error' => 'Empty response from Bakong API']);
} else {
    // Normal JSON response
    http_response_code($httpCode);
    echo $response;
}
curl_close($ch);



// $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjp7ImlkIjoiNzRhM2ZjOGRhYzRlNDBiYSJ9LCJpYXQiOjE3NDUzMzAwMjgsImV4cCI6MTc1MzEwNjAyOH0.Tpi2_a2t9nKy9rHbgwRKKXhR-JS9FfpU5uLaNSt8XRg';
