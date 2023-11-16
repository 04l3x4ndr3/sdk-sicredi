<?php

namespace O4l3x4ndr3\SdkSicredi\Types;

class BeneficiarioFinal
{
    private ?string $documento;
    private ?string $tipoPessoa;
    private ?string $nome;
    private ?string $logradouro;
    private ?string $complemento;
    private ?string $numeroEndereco;
    private ?string $cidade;
    private ?string $uf;
    private ?string $cep;
    private ?string $telefone;
    private ?string $email;

    /**
     * @param string|null $documento
     * @param string|null $tipoPessoa
     * @param string|null $nome
     * @param string|null $logradouro
     * @param string|null $complemento
     * @param string|null $numeroEndereco
     * @param string|null $cidade
     * @param string|null $uf
     * @param string|null $cep
     * @param string|null $telefone
     * @param string|null $email
     */
    public function __construct
    (
        ?string $documento = null,
        ?string $tipoPessoa = null,
        ?string $nome = null,
        ?string $logradouro = null,
        ?string $complemento = null,
        ?string $numeroEndereco = null,
        ?string $cidade = null,
        ?string $uf = null,
        ?string $cep = null,
        ?string $telefone = null,
        ?string $email = null
    )
    {
        $this->documento = $documento;
        $this->tipoPessoa = $tipoPessoa;
        $this->nome = $nome;
        $this->logradouro = $logradouro;
        $this->complemento = $complemento;
        $this->numeroEndereco = $numeroEndereco;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getDocumento(): ?string
    {
        return $this->documento;
    }

    public function setDocumento(?string $documento): BeneficiarioFinal
    {
        $this->documento = $documento;
        return $this;
    }

    public function getTipoPessoa(): ?string
    {
        return $this->tipoPessoa;
    }

    public function setTipoPessoa(?string $tipoPessoa): BeneficiarioFinal
    {
        $this->tipoPessoa = $tipoPessoa;
        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): BeneficiarioFinal
    {
        $this->nome = $nome;
        return $this;
    }

    public function getLogradouro(): ?string
    {
        return $this->logradouro;
    }

    public function setLogradouro(?string $logradouro): BeneficiarioFinal
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    public function setComplemento(?string $complemento): BeneficiarioFinal
    {
        $this->complemento = $complemento;
        return $this;
    }

    public function getNumeroEndereco(): ?string
    {
        return $this->numeroEndereco;
    }

    public function setNumeroEndereco(?string $numeroEndereco): BeneficiarioFinal
    {
        $this->numeroEndereco = $numeroEndereco;
        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(?string $cidade): BeneficiarioFinal
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(?string $uf): BeneficiarioFinal
    {
        $this->uf = $uf;
        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): BeneficiarioFinal
    {
        $this->cep = $cep;
        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(?string $telefone): BeneficiarioFinal
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): BeneficiarioFinal
    {
        $this->email = $email;
        return $this;
    }

    public function to_array(): array
    {
        return array_filter([
            'documento' => $this->documento,
            'tipoPessoa' => $this->tipoPessoa,
            'nome' => $this->nome,
            'logradouro' => $this->logradouro,
            'complemento' => $this->complemento,
            'numeroEndereco' => $this->numeroEndereco,
            'cidade' => $this->cidade,
            'uf' => $this->uf,
            'cep' => $this->cep,
            'telefone' => $this->telefone,
            'email' => $this->email
        ], function ($v) {
            return !is_null($v);
        });
    }
}