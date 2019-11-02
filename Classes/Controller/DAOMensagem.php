<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/Mensagem.php"); ?>
<?php

class DAOMensagem {

    //Propriedades
    private $conexao;

    //Construtor
    public function __construct($conexao) {
        $this->conexao = $conexao;
        //$this->conexao = new Conexao();
    }

    //METODOS GET E SET
    //METODOS
    public function inserirMensagem(Mensagem $mensagem) {
        $sqlComand = "insert into mensagens(contexto, dataEmissao, prioridade, idDestinatario, idRemetente, ativo) values('";
        $sqlComand = $sqlComand . $mensagem->getContexto() . "','";
        $sqlComand = $sqlComand . $mensagem->getDataEmissao() . "','";
        $sqlComand = $sqlComand . $mensagem->getPrioridade() . "','";
        $sqlComand = $sqlComand . $mensagem->getIdDestinatario() . "','";
        $sqlComand = $sqlComand . $mensagem->getIdRemetente() . "','";
        $sqlComand = $sqlComand . $mensagem->getAtivo() . "')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }
    
    public function alterarMensagem(Mensagem $mensagem) {
        $sqlComand = "UPDATE mensagens
		SET contexto = '" . $mensagem->getContexto() . "',
		dataEmissao = '" . $mensagem->getDataEmissao(). "',
		prioridade = '" . $mensagem->getPrioridade() . "',
		idDestinatario = '" . $mensagem->getIdDestinatario() . "',
                idRemetente = '" . $mensagem->getIdRemetente() . "',
		ativo = '" . $mensagem->getAtivo() . "'
		
		WHERE idMensagem = '" . $mensagem->getIdMensagem() . "'
		";

        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function excluirMensagem($id) {
        $sqlComand = "delete from mensagens where idMensagem = " . $id;
        $banco = $this->conexao->GetBanco();
        $banco->query($sqlComand);
        $this->conexao->Desconectar();
    }

    public function localizarMensagem($id) {
        $sqlComand = "select * from mensagens where idMensagem = " . $id;

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }

    public function listarMensagens() {
        $sqlComand = " select * from mensagens ";

        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sqlComand);
        $this->conexao->Desconectar();
        return $retorno;
    }
}//class
?>