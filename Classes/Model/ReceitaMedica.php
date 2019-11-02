<?php

class ReceitaMedica
{
    //ATRIBUTOS
    private $idReceitaMedica;
    private $dataHoraAplicacao;
    private $dataHoraAplicacaoEfetiva;
    private $observacoes;
    private $dataCadastro;
    private $ativo;
    private $idUsuario;
    private $idMedicamento;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idReceitaMedica, $dataHoraAplicacao, $dataHoraAplicacaoEfetiva, $observacoes, $dataCadastro, $ativo, $idUsuario, $idMedicamento) {
        $this->idReceitaMedica = $idReceitaMedica;
        $this->dataHoraAplicacao = $dataHoraAplicacao;
        $this->dataHoraAplicacaoEfetiva = $dataHoraAplicacaoEfetiva;
        $this->observacoes = $observacoes;
        $this->dataCadastro = $dataCadastro;
        $this->ativo = $ativo;
        $this->idUsuario = $idUsuario;
        $this->idMedicamento = $idMedicamento;
    }
    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdReceitaMedica() {
        return $this->idReceitaMedica;
    }

    public function getDataHoraAplicacao() {
        return $this->dataHoraAplicacao;
    }

    public function getDataHoraAplicacaoEfetiva() {
        return $this->dataHoraAplicacaoEfetiva;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getIdMedicamento() {
        return $this->idMedicamento;
    }

    public function setIdReceitaMedica($idReceitaMedica) {
        $this->idReceitaMedica = $idReceitaMedica;
    }

    public function setDataHoraAplicacao($dataHoraAplicacao) {
        $this->dataHoraAplicacao = $dataHoraAplicacao;
    }

    public function setDataHoraAplicacaoEfetiva($dataHoraAplicacaoEfetiva) {
        $this->dataHoraAplicacaoEfetiva = $dataHoraAplicacaoEfetiva;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setIdMedicamento($idMedicamento) {
        $this->idMedicamento = $idMedicamento;
    }
    //PROPRIEDADES
}
?>