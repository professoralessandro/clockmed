<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/AplicacaoPrescrita.php"); ?>
<?php
class DAOAplicacaoPrescrita {

    //Propriedades
    private $conexao;

    //Construtor
    public function __construct($conexao) {
        $this->conexao = $conexao;
        //$this->conexao = new Conexao();
    }

    //METODOS GET E SET
    //METODOS
    public function inserirAplicacaoPrescrita(AplicacaoPrescrita $aplicacaoPrescrita) {
        $sqlComand = "insert into AplicacoesPrescritas(dataHoraAplicacao, quantidade, observacoes, dataCadastro, idMedico, idPaciente, idMedicamento, idPrescricaoMedica) values('";
        $sqlComand = $sqlComand . $aplicacaoPrescrita->getDataHoraAplicacao() . "','";
        $sqlComand = $sqlComand . $aplicacaoPrescrita->getQuantidade() . "','";
        $sqlComand = $sqlComand . $aplicacaoPrescrita->getObservacoes() . "','";
        $sqlComand = $sqlComand . $aplicacaoPrescrita->getDataCadastro() . "','";
        $sqlComand = $sqlComand . $aplicacaoPrescrita->getIdMedico() . "','";
        $sqlComand = $sqlComand . $aplicacaoPrescrita->getIdPaciente() . "','";
        $sqlComand = $sqlComand . $aplicacaoPrescrita->getIdMedicamento() . "','";
        $sqlComand = $sqlComand . $aplicacaoPrescrita->getIdPrescricaoMedica() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }
    
    public function alterarAplicacaoPrescrita(AplicacaoPrescrita $aplicacaoPrescrita) {
        $sqlComand = "UPDATE AplicacoesPrescritas
		SET dataHoraAplicacao = '" . $aplicacaoPrescrita->getDataHoraAplicacao() . "',
		quantidade = '" . $aplicacaoPrescrita->getQuantidade() . "',
		observacoes = '" . $aplicacaoPrescrita->getObservacoes() . "',
                dataCadastro = '" . $aplicacaoPrescrita->getDataCadastro() . "',
		idMedico = '" . $aplicacaoPrescrita->getIdMedico() . "',
                idPaciente = '" . $aplicacaoPrescrita->getIdPaciente() . "',
                idMedicamento = '" . $aplicacaoPrescrita->getIdMedicamento() . "',
		idPrescricaoMedica = '" . $aplicacaoPrescrita->getIdPrescricaoMedica() . "'
		
		WHERE idAplicacaoPrescrita = '" . $aplicacaoPrescrita->getIdAplicacaoPrescrita() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirAplicacaoPrescrita($id) {
        $sqlComand = "delete from AplicacoesPrescritas where idAplicacaoPrescrita = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarAplicacaoPrescrita($id) {
        $sqlComand = "select * from AplicacoesPrescritas where idAplicacaoPrescrita = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarAplicacaoPrescrita() {
        $sqlComand = " select * from AplicacoesPrescritas ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }
}//class
?>