<?php
class NivelAcesso
{
    //ATRIBUTOS
    private $idNivelAcesso;
    private $nivelAcesso;
    private $dataCadastro;
    private $ativo;
    private $idUsuario;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idNivelAcesso ="", $nivelAcesso ="", $dataCadastro ="", $ativo ="", $idUsuario ="") {
        $this->idNivelAcesso = $idNivelAcesso;
        $this->nivelAcesso = $nivelAcesso;
        $this->dataCadastro = $dataCadastro;
        $this->ativo = $ativo;
        $this->idUsuario = $idUsuario;
    }
    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdNivelAcesso() {
        return $this->idNivelAcesso;
    }

    public function getNivelAcesso() {
        return $this->nivelAcesso;
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

    public function setIdNivelAcesso($idNivelAcesso) {
        $this->idNivelAcesso = $idNivelAcesso;
    }

    public function setNivelAcesso($nivelAcesso) {
        $this->nivelAcesso = $nivelAcesso;
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
    //PROPRIEDADES
}
?>