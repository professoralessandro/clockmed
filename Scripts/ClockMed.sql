-- MySQL Script generated by MySQL Workbench
-- Wed Nov  6 01:24:59 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ClockMed
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ClockMed
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ClockMed` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `ClockMed` ;

-- -----------------------------------------------------
-- Table `ClockMed`.`Medicamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ClockMed`.`Medicamentos` (
  `idMedicamento` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NULL,
  `codigoBarras` VARCHAR(60) NULL,
  `dataCadastro` DATE NULL,
  `imagem` VARCHAR(150) NULL,
  `observacoes` TEXT NULL,
  `ativo` TINYINT NULL,
  PRIMARY KEY (`idMedicamento`),
  UNIQUE INDEX `codigoBarras_UNIQUE` (`codigoBarras` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ClockMed`.`Substancias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ClockMed`.`Substancias` (
  `idSubstancia` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NULL,
  `dataCadastro` DATE NULL,
  `observacoes` TEXT NULL,
  `Ativo` TINYINT NULL COMMENT 'Não é necessario informar no cadastro a data de cadastro e nem se está ativo porque será inserido automaticamente sem receber os paramestros',
  `idMedicamento` INT NOT NULL,
  PRIMARY KEY (`idSubstancia`),
  INDEX `fk_Substancia_Medicamento_idx` (`idMedicamento` ASC) VISIBLE,
  CONSTRAINT `fk_Substancia_Medicamento`
    FOREIGN KEY (`idMedicamento`)
    REFERENCES `ClockMed`.`Medicamentos` (`idMedicamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ClockMed`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ClockMed`.`usuarios` (
  `idUsuario` INT NOT NULL,
  `nome` VARCHAR(60) NULL,
  `rg` VARCHAR(20) NULL,
  `cpf` VARCHAR(20) NULL,
  `dataNascimento` DATE NULL,
  `email` VARCHAR(60) NULL,
  `senha` VARCHAR(60) NULL,
  `nivelAcesso` VARCHAR(20) NULL,
  `ddd` VARCHAR(20) NULL,
  `telefone` VARCHAR(20) NULL,
  `sexo` VARCHAR(20) NULL,
  `imagem` VARCHAR(150) NULL,
  `observacoes` TEXT NULL,
  `ativo` TINYINT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ClockMed`.`PrescricoesMedica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ClockMed`.`PrescricoesMedica` (
  `idPrescricaoMedica` INT NOT NULL,
  `observacoes` TEXT NULL,
  `dataCadastro` DATE NULL,
  `ativo` TINYINT NULL,
  `idMedicamento` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  PRIMARY KEY (`idPrescricaoMedica`),
  INDEX `fk_ReceitaMedica_Medicamento1_idx` (`idMedicamento` ASC) VISIBLE,
  INDEX `fk_ReceitasMedica_usuarios1_idx` (`idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_ReceitaMedica_Medicamento1`
    FOREIGN KEY (`idMedicamento`)
    REFERENCES `ClockMed`.`Medicamentos` (`idMedicamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ReceitasMedica_usuarios1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `ClockMed`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ClockMed`.`niveisAcesso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ClockMed`.`niveisAcesso` (
  `idNivelAcesso` INT NOT NULL,
  `nivelAcesso` VARCHAR(60) NULL,
  `idUsuario` INT NOT NULL,
  `dataCadastro` DATE NULL,
  `ativo` TINYINT NULL,
  PRIMARY KEY (`idNivelAcesso`),
  INDEX `fk_niveisAcesso_usuarios1_idx` (`idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_niveisAcesso_usuarios1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `ClockMed`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ClockMed`.`mensagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ClockMed`.`mensagens` (
  `idMensagem` INT NOT NULL,
  `contexto` TEXT NULL,
  `dataEmissao` DATE NULL,
  `prioridade` TINYINT NULL,
  `ativo` TINYINT NULL,
  `idDestinatario` INT NULL,
  `idRemetente` INT NOT NULL,
  `dataCadastro` DATE NULL,
  PRIMARY KEY (`idMensagem`),
  INDEX `fk_mensagens_usuarios1_idx` (`idRemetente` ASC) VISIBLE,
  CONSTRAINT `fk_mensagens_usuarios1`
    FOREIGN KEY (`idRemetente`)
    REFERENCES `ClockMed`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ClockMed`.`AplicacoesEfetivas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ClockMed`.`AplicacoesEfetivas` (
  `idAplicacaoEfetiva` INT NOT NULL,
  `dataHoraAplicacaoEfetiva` DATE NULL,
  `quantidade` DECIMAL(10,2) NULL,
  `observacoes` TEXT NULL,
  `dataCadastro` DATE NULL,
  `aplicado` TINYINT NULL,
  `idMedico` INT NULL,
  `idTecnico` INT NULL,
  `idMedicamento` INT NOT NULL,
  `idPaciente` INT NOT NULL,
  `idPrescricaoMedica` INT NOT NULL,
  PRIMARY KEY (`idAplicacaoEfetiva`),
  INDEX `fk_Aplicacao_usuarios1_idx` (`idPaciente` ASC) VISIBLE,
  INDEX `fk_Aplicacao_Medicamentos1_idx` (`idMedicamento` ASC) VISIBLE,
  INDEX `fk_AplicacaoPrescrita_PrescricaoMedica1_idx` (`idPrescricaoMedica` ASC) VISIBLE,
  CONSTRAINT `fk_Aplicacao_usuarios100`
    FOREIGN KEY (`idPaciente`)
    REFERENCES `ClockMed`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aplicacao_Medicamentos100`
    FOREIGN KEY (`idMedicamento`)
    REFERENCES `ClockMed`.`Medicamentos` (`idMedicamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AplicacaoPrescrita_PrescricaoMedica10`
    FOREIGN KEY (`idPrescricaoMedica`)
    REFERENCES `ClockMed`.`PrescricoesMedica` (`idPrescricaoMedica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ClockMed`.`AlergiaSubstancias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ClockMed`.`AlergiaSubstancias` (
  `idAlergiaSubstancia` INT NOT NULL,
  `observacoes` TEXT NULL,
  `idSubstancia` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  `Ativo` TINYINT NULL,
  PRIMARY KEY (`idAlergiaSubstancia`),
  INDEX `fk_AlergiaSubstancias_Substancias1_idx` (`idSubstancia` ASC) VISIBLE,
  INDEX `fk_AlergiaSubstancias_usuarios1_idx` (`idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_AlergiaSubstancias_Substancias1`
    FOREIGN KEY (`idSubstancia`)
    REFERENCES `ClockMed`.`Substancias` (`idSubstancia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AlergiaSubstancias_usuarios1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `ClockMed`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
