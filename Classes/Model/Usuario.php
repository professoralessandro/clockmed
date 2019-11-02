<?php

class Usuario {

    //ATRIBUTOS
    private $idUsuario;
    private $nome;
    private $rg;
    private $cpf;
    private $dataNascimento;
    private $dataCadastro;
    private $email;
    private $senha;
    private $idNivelAcesso;
    private $ddd;
    private $telefone;
    private $sexo;
    private $imagem;
    private $observacoes;
    private $ativo;

    //ATRIBUTOS
    //CONSTRUTORES
    function __construct($idUsuario = "", $nome = "", $rg = "", $cpf = "", $dataNascimento = "", $dataCadastro = "", $email = "", $senha = "", $idNivelAcesso = "", $ddd = "", $telefone = "", $sexo = "", $imagem = "", $observacoes = "", $ativo = "") {
        $this->idUsuario = $idUsuario;
        $this->nome = $nome;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->dataCadastro = $dataCadastro;
        $this->email = $email;
        $this->senha = $senha;
        $this->idNivelAcesso = $idNivelAcesso;
        $this->ddd = $ddd;
        $this->telefone = $telefone;
        $this->sexo = $sexo;
        $this->imagem = $imagem;
        $this->observacoes = $observacoes;
        $this->ativo = $ativo;
    }

    //CONSTRUTORES
    //PROPRIEDADES
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getIdNivelAcesso() {
        return $this->idNivelAcesso;
    }

    public function getDdd() {
        return $this->ddd;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getSexo() {
        return $this->sexo;
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

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setIdNivelAcesso($idNivelAcesso) {
        $this->idNivelAcesso = $idNivelAcesso;
    }

    public function setDdd($ddd) {
        $this->ddd = $ddd;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
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