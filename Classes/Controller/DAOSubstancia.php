<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/Substancia.php"); ?>
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
    public function inserirSubstancia(Substancia $substancia) {
        $sqlComand = "insert into substancias(nome, dataCadastro, observacoes, idMedicamento, ativo) values('";
        $sqlComand = $sqlComand . $substancia->getNome() . "','";
        $sqlComand = $sqlComand . $substancia->getDataCadastro() . "','";
        $sqlComand = $sqlComand . $substancia->getObservacoes() . "','";
        $sqlComand = $sqlComand . $substancia->getIdMedicamento() . "','";
        $sqlComand = $sqlComand . $substancia->getAtivo() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }
    
    public function alterarSubstancia(Substancia $substancia) {
        $sqlComand = "UPDATE substancias
		SET nome = '" . $substancia->getNome() . "',
		dataCadastro = '" . $substancia->getDataCadastro() . "',
		observacoes = '" . $substancia->getObservacoes() . "',
		idMedicamento = '" . $substancia->getIdMedicamento() . "',
		ativo = '" . $substancia->getAtivo() . "'
		
		WHERE idSubstancia = '" . $substancia->getIdSubstancia() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirSubstancia($id) {
        $sqlComand = "delete from substancias where idSubstancia = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarSubstancia($id) {
        $sqlComand = "select * from substancias where idSubstancia = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarSubstancias() {
        $sqlComand = " select * from substancias ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }
}//class
?>