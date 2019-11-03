<?php

class PrescricaoMedica
{
    //ATRIBUTOS
    private $idReceitaMedica;
    private $observacoes;
    private $dataCadastro;
    private $ativo;
    private $idMedicamento;
    private $idUsuario;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idReceitaMedica = "", $observacoes = "", $dataCadastro = "", $ativo = "", $idMedicamento = "", $idUsuario = "") {
        $this->idReceitaMedica = $idReceitaMedica;
        $this->observacoes = $observacoes;
        $this->dataCadastro = $dataCadastro;
        $this->ativo = $ativo;
        $this->idMedicamento = $idMedicamento;
        $this->idUsuario = $idUsuario;
    }

    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdReceitaMedica() {
        return $this->idReceitaMedica;
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

    public function getIdMedicamento() {
        return $this->idMedicamento;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdReceitaMedica($idReceitaMedica) {
        $this->idReceitaMedica = $idReceitaMedica;
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

    public function setIdMedicamento($idMedicamento) {
        $this->idMedicamento = $idMedicamento;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
    //PROPRIEDADES
}
?>