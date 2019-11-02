<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/Usuario.php"); ?>
<?php

class DALUsuario {

    //Propriedades
    private $conexao;

    //Construtor
    public function __construct($conexao) {
        $this->conexao = $conexao;
        //$this->conexao = new Conexao();
    }

    //METODOS GET E SET
    //METODOS
    public function inserirUsuario(Usuario $usuario) {
        $sqlComand = "insert into usuarios(nome, rg, cpf, dataNascimento, dataCadastro, email, senha, idNivelAcesso, ddd, telefone, sexo, imagem, observacoes, ativo) values('";
        $sqlComand = $sqlComand . $usuario->getNome() . "','";
        $sqlComand = $sqlComand . $usuario->getRg() . "','";
        $sqlComand = $sqlComand . $usuario->getCpf() . "','";
        $sqlComand = $sqlComand . $usuario->getDataNascimento() . "','";
        $sqlComand = $sqlComand . $usuario->getDataCadastro() . "','";
        $sqlComand = $sqlComand . $usuario->getEmail() . "','";
        $sqlComand = $sqlComand . $usuario->getSenha() . "','";
        $sqlComand = $sqlComand . $usuario->getIdNivelAcesso() . "','";
        $sqlComand = $sqlComand . $usuario->getDdd() . "','";
        $sqlComand = $sqlComand . $usuario->getTelefone() . "','";
        $sqlComand = $sqlComand . $usuario->getSexo() . "','";
        $sqlComand = $sqlComand . $usuario->getImagem() . "','";
        $sqlComand = $sqlComand . $usuario->getObservacoes() . "','";
        $sqlComand = $sqlComand . $usuario->getAtivo() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }
    
    public function alterarUsuario(Usuario $usuario) {
        $sqlComand = "UPDATE usuarios
		SET nome = '" . $usuario->getNome() . "',
		rg = '" . $usuario->getRg() . "',
		cpf = '" . $usuario->getCpf() . "',
		dataNascimento = '" . $usuario->getDataNascimento() . "',
                dataCadastro = '" . $usuario->getDataCadastro() . "',
                email = '" . $usuario->getEmail() . "',
                senha = '" . $usuario->getSenha() . "',
                idNivelAcesso = '" . $usuario->getIdNivelAcesso() . "',
                ddd = '" . $usuario->getDdd() . "',
                telefone = '" . $usuario->getTelefone() . "',
                sexo = '" . $usuario->getSexo() . "',
                imagem = '" . $usuario->getAtivo() . "',
                observacoes = '" . $usuario->getObservacoes() . "',
		ativo = '" . $usuario->getAtivo() . "'
		
		WHERE idUsuario = '" . $usuario->getIdUsuario() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirUsuario($id) {
        $sqlComand = "delete from usuarios where idUsuario = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarUsuario($id) {
        $sqlComand = "select * from usuarios where idUsuario = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarUsuarios() {
        $sqlComand = " select * from usuarios ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }
}//class
?>