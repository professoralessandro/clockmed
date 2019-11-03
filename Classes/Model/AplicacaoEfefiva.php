<?php
class AplicacaoEfefiva
{
    //ATRIBUTOS
    private $idAplicacaoEfetiva;
    private $DataHoraAplicacaoEfetiva;
    private $quantidade;
    private $observacoes;
    private $idTecnico;
    private $idPaciente;
    private $idMedicamento;
    private $idPrescricaoMedica;
    //ATRIBUTOS
    
    //CONSTRUTORES
    function __construct($idAplicacaoEfetiva = "", $DataHoraAplicacaoEfetiva = "", $quantidade = "", $observacoes = "", $idTecnico = "", $idPaciente = "", $idMedicamento = "", $idPrescricaoMedica = "") {
        $this->idAplicacaoEfetiva = $idAplicacaoEfetiva;
        $this->DataHoraAplicacaoEfetiva = $DataHoraAplicacaoEfetiva;
        $this->quantidade = $quantidade;
        $this->observacoes = $observacoes;
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
        return $this->DataHoraAplicacaoEfetiva;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getObservacoes() {
        return $this->observacoes;
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

    public function setDataHoraAplicacaoEfetiva($DataHoraAplicacaoEfetiva) {
        $this->DataHoraAplicacaoEfetiva = $DataHoraAplicacaoEfetiva;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
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