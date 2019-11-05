<?php
class AplicacaoEfefiva
{
    //ATRIBUTOS
    private $idAplicacaoEfetiva;
    private $dataHoraAplicacaoEfetiva;
    private $quantidade;
    private $observacoes;
    private $dataCadastro;
    private $aplicado;
    private $idMedico;
    private $idTecnico;
    private $idPaciente;
    private $idMedicamento;
    private $idPrescricaoMedica;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idAplicacaoEfetiva = "", $dataHoraAplicacaoEfetiva = "", $quantidade = "", $observacoes = "", $dataCadastro = "", $aplicado = "", $idMedico = "", $idTecnico = "", $idPaciente = "", $idMedicamento = "", $idPrescricaoMedica = "") {
        $this->idAplicacaoEfetiva = $idAplicacaoEfetiva;
        $this->dataHoraAplicacaoEfetiva = $dataHoraAplicacaoEfetiva;
        $this->quantidade = $quantidade;
        $this->observacoes = $observacoes;
        $this->dataCadastro = $dataCadastro;
        $this->aplicado = $aplicado;
        $this->idMedico = $idMedico;
        $this->idTecnico = $idTecnico;
        $this->idPaciente = $idPaciente;
        $this->idMedicamento = $idMedicamento;
        $this->idPrescricaoMedica = $idPrescricaoMedica;
    }
    //CONSTRUTORES
    
    //PROPRIEDADES
    public function getIdAplicacaoEfetiva() {
        return $this->idAplicacaoEfetiva;
    }

    public function getDataHoraAplicacaoEfetiva() {
        return $this->dataHoraAplicacaoEfetiva;
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

    public function getAplicado() {
        return $this->aplicado;
    }

    public function getIdMedico() {
        return $this->idMedico;
    }

    public function getIdTecnico() {
        return $this->idTecnico;
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

    public function setIdAplicacaoEfetiva($idAplicacaoEfetiva) {
        $this->idAplicacaoEfetiva = $idAplicacaoEfetiva;
    }

    public function setDataHoraAplicacaoEfetiva($dataHoraAplicacaoEfetiva) {
        $this->dataHoraAplicacaoEfetiva = $dataHoraAplicacaoEfetiva;
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

    public function setAplicado($aplicado) {
        $this->aplicado = $aplicado;
    }

    public function setIdMedico($idMedico) {
        $this->idMedico = $idMedico;
    }

    public function setIdTecnico($idTecnico) {
        $this->idTecnico = $idTecnico;
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