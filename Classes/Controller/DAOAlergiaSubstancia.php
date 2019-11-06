<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/AlergiaSubstancia.php"); ?>
<?php

class DAOAlergiaAlergiaSubstancia {

    //Propriedades
    private $conexao;

    //Construtor
    public function __construct($conexao) {
        $this->conexao = $conexao;
        //$this->conexao = new Conexao();
    }

    //METODOS GET E SET
    //METODOS
    public function inserirAlergiaSubstancia(AlergiaSubstancia $alergiaSubstancia) {
        $sqlComand = "insert into AlergiaSubstancias(observacoes, idSubstancia, idUsuario, ativo) values('";
        $sqlComand = $sqlComand . $alergiaSubstancia->getObservacoes() . "','";
        $sqlComand = $sqlComand . $alergiaSubstancia->getIdSubstancia() . "','";
        $sqlComand = $sqlComand . $alergiaSubstancia->getIdUsuario() . "','";
        $sqlComand = $sqlComand . $alergiaSubstancia->getAtivo() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }
    
    public function alterarAlergiaSubstancia(AlergiaSubstancia $alergiaSubstancia) {
        $sqlComand = "UPDATE AlergiaSubstancias
		SET observacoes = '" . $alergiaSubstancia->getNome() . "',
		idSubstancia = '" . $alergiaSubstancia->getIdSubstancia() . "',
		idUsuario = '" . $alergiaSubstancia->getIdUsuario() . "',
		ativo = '" . $alergiaSubstancia->getAtivo() . "'
		
		WHERE idAlergiaSubstancia = '" . $alergiaSubstancia->getIdAlergiaSubstancia() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirAlergiaSubstancia($id) {
        $sqlComand = "delete from AlergiaSubstancias where idAlergiaSubstancia = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarAlergiaSubstancia($id) {
        $sqlComand = "select * from AlergiaSubstancias where idAlergiaSubstancia = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarAlergiaSubstancias() {
        $sqlComand = " select * from AlergiaSubstancias ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }
}//class
?>