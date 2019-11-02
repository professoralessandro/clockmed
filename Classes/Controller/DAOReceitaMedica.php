<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/ReceitaMedica.php"); ?>
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
    public function inserirReceitasMedica(ReceitaMedica $receitasMedica) {
        $sqlComand = "insert into receitasMedica(dataHoraAplicacao, dataHoraAplicacaoEfetiva, observacoes, dataCadastro, idUsuario, idMedicamento, ativo) values('";
        $sqlComand = $sqlComand . $receitasMedica->getDataHoraAplicacao() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getDataHoraAplicacaoEfetiva() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getObservacoes() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getDataCadastro() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getIdUsuario() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getIdMedicamento() . "','";
        $sqlComand = $sqlComand . $receitasMedica->getAtivo() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }
    
    public function alterarReceitasMedica(ReceitaMedica $receitasMedica) {
        $sqlComand = "UPDATE receitasMedica
		SET dataHoraAplicacao = '" . $receitasMedica->getDataHoraAplicacao() . "',
		dataHoraAplicacaoEfetiva = '" . $receitasMedica->getDataHoraAplicacaoEfetiva() . "',
		observacoes = '" . $receitasMedica->getObservacoes() . "',
		dataCadastro = '" . $receitasMedica->getDataCadastro() . "',
                idUsuario = '" . $receitasMedica->getIdUsuario() . "',
                idMedicamento = '" . $receitasMedica->getIdMedicamento() . "', 
		ativo = '" . $receitasMedica->getAtivo() . "'
		
		WHERE idReceitaMedica = '" . $receitasMedica->getIdReceitaMedica() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirReceitasMedica($id) {
        $sqlComand = "delete from receitasMedicas where idReceitaMedica = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarReceitasMedica($id) {
        $sqlComand = "select * from receitasMedicas where idReceitaMedica = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarReceitasMedicas() {
        $sqlComand = " select * from receitasMedicas ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }
}//class
?>