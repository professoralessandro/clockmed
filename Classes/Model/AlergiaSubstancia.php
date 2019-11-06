<?php
class AlergiaSubstancia {

    //ATRIBUTOS
    private $idAlergiaSubstancia;
    private $observacoes;
    private $idSubstancia;
    private $idUsuario;
    private $ativo;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idAlergiaSubstancia = "", $observacoes = "", $idSubstancia = "", $idUsuario = "", $ativo = "") {
        $this->idAlergiaSubstancia = $idAlergiaSubstancia;
        $this->observacoes = $observacoes;
        $this->idSubstancia = $idSubstancia;
        $this->idUsuario = $idUsuario;
        $this->ativo = $ativo;
    }

    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdAlergiaSubstancia() {
        return $this->idAlergiaSubstancia;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function getIdSubstancia() {
        return $this->idSubstancia;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setIdAlergiaSubstancia($idAlergiaSubstancia) {
        $this->idAlergiaSubstancia = $idAlergiaSubstancia;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function setIdSubstancia($idSubstancia) {
        $this->idSubstancia = $idSubstancia;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

        //PROPRIEDADES
}
?>