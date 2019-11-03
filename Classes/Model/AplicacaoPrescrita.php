<?php
class AplicacaoPrescrita
{
    //ATRIBUTOS
    private $idAplicacaoPrescrita;
    private $DataHoraAplicacao;
    private $quantidade;
    private $observacoes;
    private $dataCadastro;
    private $idMedico;
    private $idPaciente;
    private $idMedicamento;
    private $idPrescricaoMedica;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idAplicacaoPrescrita = "", $DataHoraAplicacao = "", $quantidade = "", $observacoes = "", $dataCadastro = "", $idMedico = "", $idPaciente = "", $idMedicamento = "", $idPrescricaoMedica = "") {
        $this->idAplicacaoPrescrita = $idAplicacaoPrescrita;
        $this->DataHoraAplicacao = $DataHoraAplicacao;
        $this->quantidade = $quantidade;
        $this->observacoes = $observacoes;
        $this->dataCadastro = $dataCadastro;
        $this->idMedico = $idMedico;
        $this->idPaciente = $idPaciente;
        $this->idMedicamento = $idMedicamento;
        $this->idPrescricaoMedica = $idPrescricaoMedica;
    }
    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdAplicacaoPrescrita() {
        return $this->idAplicacaoPrescrita;
    }

    public function getDataHoraAplicacao() {
        return $this->DataHoraAplicacao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getIdMedico() {
        return $this->idMedico;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function getIdMedicamento() {
        return $this->idMedicamento;
    }

    public function getIdPrescricaoMedica() {
        return $this->idPrescricaoMedica;
    }

    public function setIdAplicacaoPrescrita($idAplicacaoPrescrita) {
        $this->idAplicacaoPrescrita = $idAplicacaoPrescrita;
    }

    public function setDataHoraAplicacao($DataHoraAplicacao) {
        $this->DataHoraAplicacao = $DataHoraAplicacao;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setIdMedico($idMedico) {
        $this->idMedico = $idMedico;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }

    public function setIdMedicamento($idMedicamento) {
        $this->idMedicamento = $idMedicamento;
    }

    public function setIdPrescricaoMedica($idPrescricaoMedica) {
        $this->idPrescricaoMedica = $idPrescricaoMedica;
    }
    //PROPRIEDADES
}
?>