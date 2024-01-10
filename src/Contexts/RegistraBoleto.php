<?php

namespace O4l3x4ndr3\SdkSicredi\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkSicredi\Configuration;
use O4l3x4ndr3\SdkSicredi\Helpers\CallApi;
use O4l3x4ndr3\SdkSicredi\Types\BeneficiarioFinal;
use O4l3x4ndr3\SdkSicredi\Types\Pagador;

class RegistraBoleto  extends CallApi
{
    private ?Configuration $config;
    private ?array $keys;
    private ?string $tipoCobranca;
    private ?string $codigoBeneficiario;
    private ?Pagador $pagador;
    private ?BeneficiarioFinal $beneficiarioFinal;
    private ?string $especieDocumento;
    private ?string $nossoNumero;
    private ?string $seuNumero;
    private ?string $dataVencimento;
    private ?int $diasProtestoAuto;
    private ?int $diasNegativacaoAuto;
    private ?int $validadeAposVencimento;
    private ?float $valor;
    private ?string $tipoDesconto;
    private ?float $valorDesconto1;
    private ?string $dataDesconto1;
    private ?float $valorDesconto2;
    private ?string $dataDesconto2;
    private ?float $valorDesconto3;
    private ?string $dataDesconto3;
    private ?float $descontoAntecipado;
    private ?string $tipoJuros;
    private ?float $juros;
    private ?float $multa;
    private ?array $informativo;
    private ?array $mensagem;

    /**
     * @param Configuration|null $configuration
     * @param string|null $tipoCobranca
     * @param int|null $codigoBeneficiario
     * @param object|null $pagador
     * @param object|null $beneficiarioFinal
     * @param string|null $especieDocumento
     * @param string|null $nossoNumero
     * @param string|null $seuNumero
     * @param string|null $dataVencimento
     * @param int|null $diasProtestoAuto
     * @param int|null $diasNegativacaoAuto
     * @param int|null $validadeAposVencimento
     * @param float|null $valor
     * @param string|null $tipoDesconto
     * @param float|null $valorDesconto1
     * @param string|null $dataDesconto1
     * @param float|null $valorDesconto2
     * @param string|null $dataDesconto2
     * @param float|null $valorDesconto3
     * @param string|null $dataDesconto3
     * @param float|null $descontoAntecipado
     * @param string|null $tipoJuros
     * @param float|null $juros
     * @param float|null $multa
     * @param array|null $informativo
     * @param array|null $mensagem
     */
    public function __construct
    (
        ?Configuration $configuration = null,
        ?string $tipoCobranca = null,
        ?int    $codigoBeneficiario = null,
        ?object $pagador = null,
        ?object $beneficiarioFinal = null,
        ?string $especieDocumento = null,
        ?string $nossoNumero = null,
        ?string $seuNumero = null,
        ?string $dataVencimento = null,
        ?int    $diasProtestoAuto = null,
        ?int    $diasNegativacaoAuto = null,
        ?int    $validadeAposVencimento = null,
        ?float  $valor = null,
        ?string $tipoDesconto = null,
        ?float  $valorDesconto1 = null,
        ?string $dataDesconto1 = null,
        ?float  $valorDesconto2 = null,
        ?string $dataDesconto2 = null,
        ?float  $valorDesconto3 = null,
        ?string $dataDesconto3 = null,
        ?float  $descontoAntecipado = null,
        ?string $tipoJuros = null,
        ?float  $juros = null,
        ?float  $multa = null,
        ?array  $informativo = null,
        ?array  $mensagem = null
    )
    {
        parent::__construct($configuration);
        $this->config = $configuration ?? new Configuration();
        $this->keys = $this->config->getKeys();
        $this->tipoCobranca = $tipoCobranca;
        $this->codigoBeneficiario = $codigoBeneficiario;
        $this->pagador = $pagador;
        $this->beneficiarioFinal = $beneficiarioFinal;
        $this->especieDocumento = $especieDocumento;
        $this->nossoNumero = $nossoNumero;
        $this->seuNumero = $seuNumero;
        $this->dataVencimento = $dataVencimento;
        $this->diasProtestoAuto = $diasProtestoAuto;
        $this->diasNegativacaoAuto = $diasNegativacaoAuto;
        $this->validadeAposVencimento = $validadeAposVencimento;
        $this->valor = $valor;
        $this->tipoDesconto = $tipoDesconto;
        $this->valorDesconto1 = $valorDesconto1;
        $this->dataDesconto1 = $dataDesconto1;
        $this->valorDesconto2 = $valorDesconto2;
        $this->dataDesconto2 = $dataDesconto2;
        $this->valorDesconto3 = $valorDesconto3;
        $this->dataDesconto3 = $dataDesconto3;
        $this->descontoAntecipado = $descontoAntecipado;
        $this->tipoJuros = $tipoJuros;
        $this->juros = $juros;
        $this->multa = $multa;
        $this->informativo = $informativo;
        $this->mensagem = $mensagem;
    }

    public function getTipoCobranca(): ?string
    {
        return $this->tipoCobranca;
    }

    public function setTipoCobranca(?string $tipoCobranca): RegistraBoleto
    {
        $this->tipoCobranca = $tipoCobranca;
        return $this;
    }

    public function getCodigoBeneficiario(): ?int
    {
        return $this->codigoBeneficiario;
    }

    public function setCodigoBeneficiario(?int $codigoBeneficiario): RegistraBoleto
    {
        $this->codigoBeneficiario = $codigoBeneficiario;
        return $this;
    }

    public function getPagador(): ?Pagador
    {
        return $this->pagador;
    }

    public function setPagador(?Pagador $pagador): RegistraBoleto
    {
        $this->pagador = $pagador;
        return $this;
    }

    public function getBeneficiarioFinal(): ?BeneficiarioFinal
    {
        return $this->beneficiarioFinal;
    }

    public function setBeneficiarioFinal(?BeneficiarioFinal $beneficiarioFinal): RegistraBoleto
    {
        $this->beneficiarioFinal = $beneficiarioFinal;
        return $this;
    }

    public function getEspecieDocumento(): ?string
    {
        return $this->especieDocumento;
    }

    public function setEspecieDocumento(?string $especieDocumento): RegistraBoleto
    {
        $this->especieDocumento = $especieDocumento;
        return $this;
    }

    public function getNossoNumero(): ?string
    {
        return $this->nossoNumero;
    }

    public function setNossoNumero(?string $nossoNumero): RegistraBoleto
    {
        $this->nossoNumero = $nossoNumero;
        return $this;
    }

    public function getSeuNumero(): ?string
    {
        return $this->seuNumero;
    }

    public function setSeuNumero(?string $seuNumero): RegistraBoleto
    {
        $this->seuNumero = $seuNumero;
        return $this;
    }

    public function getDataVencimento(): ?string
    {
        return $this->dataVencimento;
    }

    public function setDataVencimento(?string $dataVencimento): RegistraBoleto
    {
        $this->dataVencimento = $dataVencimento;
        return $this;
    }

    public function getDiasProtestoAuto(): ?int
    {
        return $this->diasProtestoAuto;
    }

    public function setDiasProtestoAuto(?int $diasProtestoAuto): RegistraBoleto
    {
        $this->diasProtestoAuto = $diasProtestoAuto;
        return $this;
    }

    public function getDiasNegativacaoAuto(): ?int
    {
        return $this->diasNegativacaoAuto;
    }

    public function setDiasNegativacaoAuto(?int $diasNegativacaoAuto): RegistraBoleto
    {
        $this->diasNegativacaoAuto = $diasNegativacaoAuto;
        return $this;
    }

    public function getValidadeAposVencimento(): ?int
    {
        return $this->validadeAposVencimento;
    }

    public function setValidadeAposVencimento(?int $validadeAposVencimento): RegistraBoleto
    {
        $this->validadeAposVencimento = $validadeAposVencimento;
        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(?float $valor): RegistraBoleto
    {
        $this->valor = $valor;
        return $this;
    }

    public function getTipoDesconto(): ?string
    {
        return $this->tipoDesconto;
    }

    public function setTipoDesconto(?string $tipoDesconto): RegistraBoleto
    {
        $this->tipoDesconto = $tipoDesconto;
        return $this;
    }

    public function getValorDesconto1(): ?float
    {
        return $this->valorDesconto1;
    }

    public function setValorDesconto1(?float $valorDesconto1): RegistraBoleto
    {
        $this->valorDesconto1 = $valorDesconto1;
        return $this;
    }

    public function getDataDesconto1(): ?string
    {
        return $this->dataDesconto1;
    }

    public function setDataDesconto1(?string $dataDesconto1): RegistraBoleto
    {
        $this->dataDesconto1 = $dataDesconto1;
        return $this;
    }

    public function getValorDesconto2(): ?float
    {
        return $this->valorDesconto2;
    }

    public function setValorDesconto2(?float $valorDesconto2): RegistraBoleto
    {
        $this->valorDesconto2 = $valorDesconto2;
        return $this;
    }

    public function getDataDesconto2(): ?string
    {
        return $this->dataDesconto2;
    }

    public function setDataDesconto2(?string $dataDesconto2): RegistraBoleto
    {
        $this->dataDesconto2 = $dataDesconto2;
        return $this;
    }

    public function getValorDesconto3(): ?float
    {
        return $this->valorDesconto3;
    }

    public function setValorDesconto3(?float $valorDesconto3): RegistraBoleto
    {
        $this->valorDesconto3 = $valorDesconto3;
        return $this;
    }

    public function getDataDesconto3(): ?string
    {
        return $this->dataDesconto3;
    }

    public function setDataDesconto3(?string $dataDesconto3): RegistraBoleto
    {
        $this->dataDesconto3 = $dataDesconto3;
        return $this;
    }

    public function getDescontoAntecipado(): ?float
    {
        return $this->descontoAntecipado;
    }

    public function setDescontoAntecipado(?float $descontoAntecipado): RegistraBoleto
    {
        $this->descontoAntecipado = $descontoAntecipado;
        return $this;
    }

    public function getTipoJuros(): ?string
    {
        return $this->tipoJuros;
    }

    public function setTipoJuros(?string $tipoJuros): RegistraBoleto
    {
        $this->tipoJuros = $tipoJuros;
        return $this;
    }

    public function getJuros(): ?float
    {
        return $this->juros;
    }

    public function setJuros(?float $juros): RegistraBoleto
    {
        $this->juros = $juros;
        return $this;
    }

    public function getMulta(): ?float
    {
        return $this->multa;
    }

    public function setMulta(?float $multa): RegistraBoleto
    {
        $this->multa = $multa;
        return $this;
    }

    public function getInformativo(): ?array
    {
        return $this->informativo;
    }

    public function setInformativo(?array $informativo): RegistraBoleto
    {
        $this->informativo = $informativo;
        return $this;
    }

    public function getMensagem(): ?array
    {
        return $this->mensagem;
    }

    public function setMensagem(?array $mensagem): RegistraBoleto
    {
        $this->mensagem = $mensagem;
        return $this;
    }

    /**
     * @throws GuzzleException
     */
    public function registraBoleto()
    {
        return $this->call("/cobranca/boleto/v1/boletos", $this->to_array());
    }

    /**
     * @throws GuzzleException
     */
    public function imprimeBoleto(string $linhaDigitavel)
    {
        return $this->call("/cobranca/boleto/v1/boletos/pdf?linhaDigitavel={$linhaDigitavel}", null, 'GET');
    }

    /**
     * @throws GuzzleException
     */
    public function consultaBoletoNossoNumero(string $nossoNumero)
    {
        return $this->call("/cobranca/boleto/v1/boletos?codigoBeneficiario=".$this->keys['codigoBeneficiario']."&nossoNumero=$nossoNumero", null, 'GET');
    }

    public function to_array(): array
    {
        return array_filter([
            'tipoCobranca' => $this->tipoCobranca,
            'codigoBeneficiario' => $this->keys['codigoBeneficiario'],
            'pagador' => isset($this->pagador) ? $this->pagador->to_array() : null,
            'beneficiarioFinal' => isset($this->beneficiarioFinal) ? $this->beneficiarioFinal->to_array() : null,
            'especieDocumento' => $this->especieDocumento,
            'nossoNumero' => $this->nossoNumero,
            'seuNumero' => $this->seuNumero,
            'dataVencimento' => $this->dataVencimento,
            'diasProtestoAuto' => $this->diasProtestoAuto,
            'diasNegativacaoAuto' => $this->diasNegativacaoAuto,
            'validadeAposVencimento' => $this->validadeAposVencimento,
            'valor' => $this->valor,
            'tipoDesconto' => $this->tipoDesconto,
            'valorDesconto1' => $this->valorDesconto1,
            'dataDesconto1' => $this->dataDesconto1,
            'valorDesconto2' => $this->valorDesconto2,
            'dataDesconto2' => $this->dataDesconto2,
            'valorDesconto3' => $this->valorDesconto3,
            'dataDesconto3' => $this->dataDesconto3,
            'descontoAntecipado' => $this->descontoAntecipado,
            'tipoJuros' => $this->tipoJuros,
            'juros' => $this->juros,
            'multa' => $this->multa,
            'informativo' => $this->informativo,
            'mensagem' => $this->mensagem
        ], function ($v) {
            return !is_null($v);
        });
    }
}