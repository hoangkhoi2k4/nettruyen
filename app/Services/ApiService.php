<?php

namespace App\Services;

use GuzzleHttp\Client;

class ApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'timeout' => 10, // Thêm timeout để tránh treo
        ]);
    }

    public function fetchData($endpoint)
    {
        // Kiểm tra nếu endpoint là chính endpoint hiện tại
        if ($endpoint === 'http://localhost:8000/api/home/data') {
            return ['message' => 'Avoiding infinite loop'];
        }

        $response = $this->client->get($endpoint);
        return json_decode($response->getBody(), true);
    }
}