<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/NivelAcesso.php"); ?>
<?php

class DAONivelAcesso {

    //Propriedades
    private $conexao;

    //Construtor
    public function __construct($conexao) {
        $this->conexao = $conexao;
        //$this->conexao = new Conexao();
    }

    //METODOS GET E SET
    //METODOS
    public function inserirNivelAcesso(NivelAcesso $nivelAcesso) {
        $sqlComand = "insert into niveisAcesso(nivelAcesso, dataCadastro, idUsuario, ativo) values('";
        $sqlComand = $sqlComand . $nivelAcesso->getNivelAcesso() . "','";
        $sqlComand = $sqlComand . $nivelAcesso->getDataCadastro() . "','";
        $sqlComand = $sqlComand . $nivelAcesso->getIdUsuario() . "','";
        $sqlComand = $sqlComand . $nivelAcesso->getAtivo() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function alterarNivelAcessos(nivelAcesso $nivelAcesso) {
        $sqlComand = "UPDATE niveisAcesso
		SET nivelAcesso = '" . $nivelAcesso->getNivelAcesso() . "',
		dataCadastro = '" . $nivelAcesso->getDataCadastro() . "',
		idUsuario = '" . $nivelAcesso->getIdUsuario() . "',
		ativo = '" . $nivelAcesso->getAtivo() . "'
		
		WHERE idNivelAcesso = '" . $nivelAcesso->getIdNivelAcesso() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirNivelAcessos($id) {
        $sqlComand = "delete from niveisAcesso where idNivelAcesso = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarNivelAcessos($id) {
        $sqlComand = "select * from niveisAcesso where idNivelAcesso = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarNiveisAcessos() {
        $sqlComand = " select * from niveisAcesso ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

}

//class
?>