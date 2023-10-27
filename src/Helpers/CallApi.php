<?php

namespace O4l3x4ndr3\SdkSicred\Helpers;

use O4l3x4ndr3\SdkSicred\Configuration;

class CallApi
{
    private Configuration $config;
    private ?array $header;
    private ?array $credential;
    private array $options;

    /**
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config ?? new Configuration();
        $this->credential = $this->config->getCredentials();
        $this->header = array_merge([
            'User-Agent' => 'SDKSicred/1.0',
            'Content-Type' => 'application/json',
            'context' => 'COBRANCA'
        ], $this->config->getHttpHeader());
    }

    // TODO: chamar a Autenticação para armazenar o id_token
}