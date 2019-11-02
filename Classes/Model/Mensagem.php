<?php
class Mensagem
{
    //ATRIBUTOS
    private $idMensagem;
    private $contexto;
    private $dataEmissao;
    private $prioridade;
    private $idDestinatario;
    private $idRemetente;
    private $ativo;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idMensagem ="", $contexto ="", $dataEmissao ="", $prioridade ="", $idDestinatario ="", $idRemetente ="", $ativo ="") {
        $this->idMensagem = $idMensagem;
        $this->contexto = $contexto;
        $this->dataEmissao = $dataEmissao;
        $this->prioridade = $prioridade;
        $this->idDestinatario = $idDestinatario;
        $this->idRemetente = $idRemetente;
        $this->ativo = $ativo;
    }

    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdMensagem() {
        return $this->idMensagem;
    }

    public function getContexto() {
        return $this->contexto;
    }

    public function getDataEmissao() {
        return $this->dataEmissao;
    }

    public function getPrioridade() {
        return $this->prioridade;
    }

    public function getIdDestinatario() {
        return $this->idDestinatario;
    }

    public function getIdRemetente() {
        return $this->idRemetente;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setIdMensagem($idMensagem) {
        $this->idMensagem = $idMensagem;
    }

    public function setContexto($contexto) {
        $this->contexto = $contexto;
    }

    public function setDataEmissao($dataEmissao) {
        $this->dataEmissao = $dataEmissao;
    }

    public function setPrioridade($prioridade) {
        $this->prioridade = $prioridade;
    }

    public function setIdDestinatario($idDestinatario) {
        $this->idDestinatario = $idDestinatario;
    }

    public function setIdRemetente($idRemetente) {
        $this->idRemetente = $idRemetente;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
    //PROPRIEDADES
}
?>