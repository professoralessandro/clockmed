<?php

class Medicamento{

    //ATRIBUTOS
    private $idMedicamento;
    private $nome;
    private $codigoBarras;
    private $dataCadastro;
    private $imagem;
    private $observacoes;
    private $ativo;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idMedicamento ="", $nome ="", $codigoBarras ="", $dataCadastro ="", $imagem ="", $observacoes ="", $ativo ="")
    {
        $this->idMedicamento = $idMedicamento;
        $this->nome = $nome;
        $this->codigoBarras = $codigoBarras;
        $this->dataCadastro = $dataCadastro;
        $this->imagem = $imagem;
        $this->observacoes = $observacoes;
        $this->ativo = $ativo;
    }
    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdMedicamento() {
        return $this->idMedicamento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigoBarras() {
        return $this->codigoBarras;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setIdMedicamento($idMedicamento) {
        $this->idMedicamento = $idMedicamento;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCodigoBarras($codigoBarras) {
        $this->codigoBarras = $codigoBarras;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

        //PROPRIEDADES
}
?>