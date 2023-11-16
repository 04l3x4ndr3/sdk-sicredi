<?php

namespace O4l3x4ndr3\SdkSicredi\Types;

class Pagador
{
    private ?string $tipoPessoa;
    private ?string $documento;
    private ?string $nome;
    private ?string $endereco;
    private ?string $cidade;
    private ?string $uf;
    private ?string $cep;
    private ?string $telefone;
    private ?string $email;

    /**
     * @param string|null $tipoPessoa
     * @param string|null $documento
     * @param string|null $nome
     * @param string|null $endereco
     * @param string|null $cidade
     * @param string|null $uf
     * @param string|null $cep
     * @param string|null $telefone
     * @param string|null $email
     */
    public function __construct
    (
        ?string $tipoPessoa = null,
        ?string $documento = null,
        ?string $nome = null,
        ?string $endereco = null,
        ?string $cidade = null,
        ?string $uf = null,
        ?string $cep = null,
        ?string $telefone = null,
        ?string $email = null
    )
    {
        $this->tipoPessoa = $tipoPessoa;
        $this->documento = $documento;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getTipoPessoa(): ?string
    {
        return $this->tipoPessoa;
    }

    public function setTipoPessoa(?string $tipoPessoa): Pagador
    {
        $this->tipoPessoa = $tipoPessoa;
        return $this;
    }

    public function getDocumento(): ?string
    {
        return $this->documento;
    }

    public function setDocumento(?string $documento): Pagador
    {
        $this->documento = $documento;
        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): Pagador
    {
        $this->nome = $nome;
        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(?string $endereco): Pagador
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(?string $cidade): Pagador
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(?string $uf): Pagador
    {
        $this->uf = $uf;
        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): Pagador
    {
        $this->cep = $cep;
        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(?string $telefone): Pagador
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): Pagador
    {
        $this->email = $email;
        return $this;
    }

    public function to_array(): array
    {
        return array_filter([
            'tipoPessoa' => $this->tipoPessoa,
            'documento' => $this->documento,
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'cidade' => $this->cidade,
            'uf' => $this->uf,
            'cep' => $this->cep,
            'telefone' => $this->telefone,
            'email' => $this->email,
        ], function ($v) {
            return !is_null($v);
        });
    }
}