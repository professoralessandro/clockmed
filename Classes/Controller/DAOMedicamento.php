<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/Medicamento.php"); ?>
<?php

class DAOMedicamento {

    //Propriedades
    private $conexao;

    //Construtor
    public function __construct($conexao) {
        $this->conexao = $conexao;
        //$this->conexao = new Conexao();
    }

    //METODOS GET E SET
    //METODOS
    public function inserirMedicamento(Medicamento $medicamento) {
        $sqlComand = "insert into medicamentos(nome, codigoBarras, dataCadastro, imagem,observacoes, ativo) values('";
        $sqlComand = $sqlComand . $medicamento->getNome() . "','";
        $sqlComand = $sqlComand . $medicamento->getCodigoBarras() . "','";
        $sqlComand = $sqlComand . $medicamento->getDataCadastro() . "','";
        $sqlComand = $sqlComand . $medicamento->getImagem() . "','";
        $sqlComand = $sqlComand . $medicamento->getObservacoes() . "','";
        $sqlComand = $sqlComand . $medicamento->getAtivo() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function alterarMedicamento(Medicamento $medicamento) {
        $sqlComand = "UPDATE Medicamentos
		SET nome = '" . $medicamento->getNome() . "',
                codigoBarras = '" . $medicamento->getCodigoBarras() . "',
		dataCadastro = '" . $medicamento->getDataCadastro() . "',
		imagem = '" . $medicamento->getImagem() . "',
		observacoes = '" . $medicamento->getObservacoes() . "',
		ativo = '" . $medicamento->getAtivo() . "'
		
		WHERE idMedicamento = '" . $medicamento->getIdMedicamento() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirMedicamento($id) {
        $sqlComand = "delete from medicamentos where idMedicamento = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarMedicamento($id) {
        $sqlComand = "select * from medicamentos where idMedicamento = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarMedicamentos() {
        $sqlComand = " select * from medicamentos ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

}

//class
?>