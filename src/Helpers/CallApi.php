<?php

namespace O4l3x4ndr3\SdkSicredi\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkSicredi\Configuration;

class CallApi
{
    /**
     * @var Configuration
     */
    private Configuration $config;
    /**
     * @var array|string[]|null
     */
    private ?array $header;
    /**
     * @var array|null
     */
    private ?array $credential;
    /**
     * @var array
     */
    private array $options;
    private string $cooperativa = '6789';
    private string $posto = '03';
    private string $codigoBeneficiario = '12345';
    private string $authorization = 'Bearer ';

    /**
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config ?? new Configuration();
        $this->credential = $this->config->getCredentials();
        $this->header = array_merge([
            'User-Agent' => 'SDKSicredi/1.0',
            'Content-Type' => 'application/json'
        ], $this->config->getHttpHeader());
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * @param Configuration $config
     * @return void
     */
    public function setConfig(Configuration $config): void
    {
        $this->config = $config;
    }

    public function getHeader(): ?array
    {
        return $this->header;
    }

    public function setHeader(?array $header): CallApi
    {
        $this->header = $header;
        return $this;
    }

    public function getCredential(): ?array
    {
        return $this->credential;
    }

    public function setCredential(?array $credential): CallApi
    {
        $this->credential = $credential;
        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setOptions(array $options): CallApi
    {
        $this->options = $options;
        return $this;
    }

    public function getCooperativa(): string
    {
        return $this->cooperativa;
    }

    public function setCooperativa(string $cooperativa): CallApi
    {
        $this->cooperativa = $cooperativa;
        return $this;
    }

    public function getPosto(): string
    {
        return $this->posto;
    }

    public function setPosto(string $posto): CallApi
    {
        $this->posto = $posto;
        return $this;
    }

    public function getCodigoBeneficiario(): string
    {
        return $this->codigoBeneficiario;
    }

    public function setCodigoBeneficiario(string $codigoBeneficiario): CallApi
    {
        $this->codigoBeneficiario = $codigoBeneficiario;
        return $this;
    }

    public function getAuthorization(): string
    {
        return $this->authorization;
    }

    public function setAuthorization(string $authorization): CallApi
    {
        $auth = $this->getAuthorization() . $authorization;
        $this->authorization = $auth;
        return $this;
    }

    /**
     * @param string $endpoint
     * @param array|null $body
     * @param string|null $method
     * @return array|object
     * @throws GuzzleException
     */
    public function call(string $endpoint, ?array $header = NULL, ?array $body = NULL, ?string $method = 'POST'): array|object
    {
        $x_api_key = $this->credential['x-api-key'];

        $client = new Client();
        $options = [
            'headers' => array_filter([
                'http_errors' => false,
                'Content-Type' => 'application-json',
                'x-api-key' => $x_api_key,
                'Authorization' => $this->getAuthorization(),
                $header
            ], function ($v) {
                return !empty($v);
            }),
            'form_params' => array_filter([$body], function ($v) {
                return !empty($v);
            })
        ];

        $this->options = $options;
        $res = $client->request($method, "{$this->config->getUrl()}{$endpoint}", $options);
        $data = $res->getBody()->getContents();

        return json_decode($data);
    }

    /**
     * @return void
     * @throws GuzzleException
     */
    public function authentication(): void
    {
        $header = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'context' => 'COBRANCA'
        ];
        $body = [
            'username' => $this->credential['username'],
            'password' => $this->credential['password'],
            'scope' => 'cobranca',
            'grant_type' => 'password',
            'cooperativa' => $this->getCooperativa(),
            'posto' => $this->getPosto(),
            'codigoBeneficiario' => $this->getCodigoBeneficiario(),
        ];
        $call = $this->call("/sb/auth/openapi/#token", $header, $body);

        $this->setAuthorization($call->id_token);
    }
}