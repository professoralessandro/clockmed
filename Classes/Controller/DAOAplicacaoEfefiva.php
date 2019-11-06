<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/AplicacaoEfefiva.php"); ?>
<?php

class DAOAplicacaoEfefiva {

    //Propriedades
    private $conexao;

    //Construtor
    public function __construct($conexao) {
        $this->conexao = $conexao;
        //$this->conexao = new Conexao();
    }

    //METODOS GET E SET
    //METODOS
    public function inserirAplicacaoEfefiva(AplicacaoEfefiva $aplicacaoEfefiva) {
        $sqlComand = "insert into AplicacoesEfetivas(dataHoraAplicacaoEfetiva, quantidade, observacoes, dataCadastro, aplicado, idMedico, idTecnico, idPaciente, idMedicamento, idPrescricaoMedica) values('";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getDataHoraAplicacaoEfetiva() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getQuantidade() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getObservacoes() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getDataCadastro() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getAplicado() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getIdMedico() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getIdTecnico() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getIdPaciente() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getIdMedicamento() . "','";
        $sqlComand = $sqlComand . $aplicacaoEfefiva->getIdPrescricaoMedica() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }
    
    public function alterarAplicacaoEfefiva(AplicacaoEfefiva $aplicacaoEfefiva) {
        $sqlComand = "UPDATE AplicacoesEfetivas
		SET dataHoraAplicacaoEfetiva = '" . $aplicacaoEfefiva->getDataHoraAplicacaoEfetiva() . "',
		quantidade = '" . $aplicacaoEfefiva->getQuantidade() . "',
		observacoes = '" . $aplicacaoEfefiva->getObservacoes() . "',
                dataCadastro = '" . $aplicacaoEfefiva->getDataCadastro() . "',
                aplicado = '" . $aplicacaoEfefiva->getAplicado() . "',
                idMedico = '" . $aplicacaoEfefiva->getIdMedico() . "',
		idTecnico = '" . $aplicacaoEfefiva->getIdTecnico() . "',
                idPaciente = '" . $aplicacaoEfefiva->getIdPaciente() . "',
                idMedicamento = '" . $aplicacaoEfefiva->getIdMedicamento() . "',
		idPrescricaoMedica = '" . $aplicacaoEfefiva->getIdPrescricaoMedica() . "'
		
		WHERE idAplicacaoEfetiva = '" . $aplicacaoEfefiva->getIdAplicacaoEfetiva() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirAplicacaoEfefiva($id) {
        $sqlComand = "delete from AplicacoesEfetivas where idAplicacaoEfetiva = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarAplicacaoEfefiva($id) {
        $sqlComand = "select * from AplicacoesEfetivas where idAplicacaoEfetiva = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarAplicacoesEfefivas() {
        $sqlComand = " select * from AplicacoesEfetivas ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }
}//class
?>