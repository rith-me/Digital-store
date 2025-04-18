<?php
session_start();
ob_start();
// class database
// {
//     private $database;
//     private $host;
//     private $user;
//     private $pass;
//     protected function connect()
//     {
//         $this->database = "digi";
//         $this->host = "localhost";
//         $this->user = "root";
//         $this->pass = "";
//         $db = "mysql:host={$this->host};dbname={$this->database}";
//         $con = new PDO($db, $this->user, $this->pass);
//         if (!$con) {
//             die('database connection error');
//         } else {
//             return $con;
//         }
//     }
// }

// session_start();
// ob_start();

class APIClient
{
    private $api_url;

    public function __construct()
    {
        $this->api_url = "http://178.128.123.241/api"; // Replace with your actual API URL
    }

    public function callAPI($endpoint, $method = "GET", $data = [],$token = null)
    {
        $url = $this->api_url . $endpoint;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [ $token ? "Authorization: Bearer " . trim($token) : null,'Content-Type: application/json']);

        if ($method === "POST") {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}

// // Example Usage:
// $api = new APIClient();
// $response = $api->callAPI("/get-data"); // Example GET request
// print_r($response);
// ?>

