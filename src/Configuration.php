<?php

namespace O4l3x4ndr3\SdkSicredi;

class Configuration
{

    /**
     *
     */
    const URL_PRODUCTION = "https://api-parceiro.sicredi.com.br";
    /**
     * @var array|null
     */
    private ?array $credentials;
    /**
     * @var array|null
     */
    private ?array $httpHeader;

    /**
     * @param string|null $apiKey
     * @param string|null $username
     * @param string|null $password
     */
    public function __construct(?string $apiKey = NULL, ?string $username = NULL, ?string $password = NULL)
    {
        $this->credentials = [
            'x-api-key' => $_SERVER['SICREDI_X_API_KEY'] ?? $apiKey,
            'username' => $_SERVER['SICREDI_USERNAME_HML'] ?? $username,
            'password' => $_SERVER['SICREDI_PASSWORD_HML'] ?? $password
        ];
        $this->httpHeader = [];
    }

    /**
     * @return array|null
     */
    public function getCredentials(): ?array
    {
        return $this->credentials;
    }

    /**
     * @param string|null $apiKey
     * @param string|null $username
     * @param string|null $password
     * @return void
     */
    public function setCredentials(?string $apiKey = NULL, ?string $username = NULL, ?string $password = NULL): void
    {
        $cur = $this->credentials;
        $new = [
            'x-api-key' => $apiKey,
            'username' => $username,
            'password' => $password
        ];
        $this->credentials = array_merge($cur, $new);
    }

    /**
     * @return array|null
     */
    public function getHttpHeader(): ?array
    {
        return $this->httpHeader;
    }

    /**
     * @param array $httpHeader
     * @return void
     */
    public function setHttpHeader(array $httpHeader): void
    {
        $this->httpHeader = $httpHeader;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URL_PRODUCTION;
    }
}