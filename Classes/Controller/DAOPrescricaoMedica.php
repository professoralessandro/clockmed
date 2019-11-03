<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/ReceitaMedica.php"); ?>
<?php

class DAOPrescricaoMedica {

    //Propriedades
    private $conexao;

    //Construtor
    public function __construct($conexao) {
        $this->conexao = $conexao;
        //$this->conexao = new Conexao();
    }

    //METODOS GET E SET
    //METODOS
    public function inserirPrescricaoMedica(ReceitaMedica $receitasMedica) {
        $sqlComand = "insert into PrescricoesMedica(observacoes, dataCadastro, idUsuario, idMedicamento, ativo) values('";
        $sqlComand = $sqlComand . $receitasMedica->getObservacoes() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getDataCadastro() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getIdUsuario() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getIdMedicamento() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getAtivo() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }
    
    public function alterarPrescricaoMedica(ReceitaMedica $receitasMedica) {
        $sqlComand = "UPDATE PrescricoesMedica
		SET observacoes = '" . $receitasMedica->getObservacoes() . "',
		dataCadastro = '" . $receitasMedica->getDataCadastro() . "',
                idUsuario = '" . $receitasMedica->getIdUsuario() . "',
                idMedicamento = '" . $receitasMedica->getIdMedicamento() . "', 
		ativo = '" . $receitasMedica->getAtivo() . "'
		
		WHERE idPrescricaoMedica = '" . $receitasMedica->getIdReceitaMedica() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirPrescricaoMedica($id) {
        $sqlComand = "delete from PrescricoesMedica where idReceitaMedica = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarPrescricaoMedica($id) {
        $sqlComand = "select * from PrescricoesMedica where idPrescricaoMedica = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarPrescricoesMedica() {
        $sqlComand = " select * from PrescricoesMedica ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }
}//class
?>