<?php

namespace O4l3x4ndr3\SdkSicredi\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkSicredi\Configuration;

class CallApi
{
    private Configuration $config;
    private ?array $header;
    private ?array $keys;
    private array $options;

    public function __construct(?Configuration $config = NULL)
    {
        $this->config = $config ?? new Configuration();
        $this->keys = $this->config->getKeys();
    }

    /**
     * @throws GuzzleException
     */
    public function accessToken(): object
    {
        $client = new Client();
        $options = [
            'headers' => [
                'x-api-key' => $this->keys['x-api-key'],
                'context' => 'COBRANCA',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => $this->config->getCredentials()
        ];
        $res = $client->request('POST', $this->config->getUrl() . '/sb/auth/openapi/token', $options);
        return json_decode($res->getBody()->getContents());
    }

    /**
     * @param string $endpoint
     * @param array|null $body
     * @param string|null $method
     * @throws GuzzleException
     */
    public function call(string $endpoint, ?array $body = NULL, ?string $method = 'POST')
    {
        $token = $this->accessToken();

        $client = new Client();
        if (isset($body)) {
            $options = array_filter([
                'headers' => [
                    'x-api-key' => '65a3ad4e-f73a-4a25-87db-55d3e04b1516',
                    'Authorization' => "{$token->token_type} {$token->access_token}",
                    'Content-Type' => 'application/json',
                    'cooperativa' => '6789',
                    'posto' => '03',
                ],
                'json' => $body
            ]);
        } else {
            $options = array_filter([
                'headers' => [
                    'x-api-key' => '65a3ad4e-f73a-4a25-87db-55d3e04b1516',
                    'Authorization' => "{$token->token_type} {$token->access_token}",
                ]
            ]);
        }
        $res = $client->request($method, "{$this->config->getUrl()}{$endpoint}", $options);
        $res = json_decode($res->getBody()->getContents());

        return $res;
    }
}