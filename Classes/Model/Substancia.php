<?php

class Substancia{

//ATRIBUTOS
    private $id;
    private $nome;
    private $email;
    private $senha;

//ATRIBUTOS
//CONSTRUTORES
    public function __construct($id = "", $nome = "", $email = "", $senha = "") {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

//CONSTRUTORES
//PROPRIEDADES

    public function setId($valor) {
        $this->id = $valor;
    }

    public function getId() {
        return $this->id;
    }

    public function setNome($valor) {
        $this->nome = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setEmail($valor) {
        $this->email = $valor;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSenha($valor) {
        $this->senha = $valor;
    }

    public function getSenha() {
        return $this->senha;
    }

//PROPRIEDADES
}

//CLASS=
?>