<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/Usuario.php"); ?>
<?php
class DAOUsuarioBack {

    //ATRIBUTOS
    private $idSubstancia;
    private $nome;
    private $dataCadastro;
    private $observacoes;
    private $idMedicamento;
    private $ativo;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idSubstancia = "", $nome = "", $dataCadastro = "", $observacoes = "", $idMedicamento = "", $ativo = "")
    {
        $this->idSubstancia = $idSubstancia;
        $this->nome = $nome;
        $this->dataCadastro = $dataCadastro;
        $this->observacoes = $observacoes;
        $this->idMedicamento = $idMedicamento;
        $this->ativo = $ativo;
    }
    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdSubstancia() {
        return $this->idSubstancia;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function getIdMedicamento() {
        return $this->idMedicamento;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setIdSubstancia($idSubstancia) {
        $this->idSubstancia = $idSubstancia;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function setIdMedicamento($idMedicamento) {
        $this->idMedicamento = $idMedicamento;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
    //PROPRIEDADES
}
?>