-- MySQL Script generated by MySQL Workbench
-- Sáb 07 Mai 2016 12:59:23 BRT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table1` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`UnificaTipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`UnificaTipos` (
  `idUnificaTipos` INT NOT NULL,
  PRIMARY KEY (`idUnificaTipos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PaiMae`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PaiMae` (
  `idPaiMae` INT NOT NULL,
  `Situacao` VARCHAR(45) NULL,
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  `Tipo` VARCHAR(45) NULL,
  PRIMARY KEY (`idPaiMae`),
  INDEX `fk_Pai_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  CONSTRAINT `fk_Pai_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `mydb`.`UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Responsavel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Responsavel` (
  `idResponsavel` INT NOT NULL,
  `Parentesco` VARCHAR(45) NULL,
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  PRIMARY KEY (`idResponsavel`),
  INDEX `fk_Responsavel_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  CONSTRAINT `fk_Responsavel_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `mydb`.`UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Familia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Familia` (
  `idFamilia` INT NOT NULL,
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  `SituacaoConjugal` VARCHAR(45) NULL,
  `AlunoResideCom` VARCHAR(45) NULL,
  PRIMARY KEY (`idFamilia`),
  INDEX `fk_Familia_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  CONSTRAINT `fk_Familia_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `mydb`.`UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Consulta` (
  `idConsulta` INT NOT NULL,
  PRIMARY KEY (`idConsulta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Aluno` (
  `idAluno` INT NOT NULL,
  `Nome` VARCHAR(45) NULL,
  `Matrícula` VARCHAR(45) NULL,
  `PaiMae_idPaiMae` INT NOT NULL,
  `Responsavel_idResponsavel` INT NOT NULL,
  `Familia_idFamilia` INT NOT NULL,
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  `Consulta_idConsulta` INT NOT NULL,
  `Mae_idPaiMae` INT NOT NULL,
  PRIMARY KEY (`idAluno`),
  INDEX `fk_Aluno_Pai1_idx` (`PaiMae_idPaiMae` ASC),
  INDEX `fk_Aluno_Responsavel1_idx` (`Responsavel_idResponsavel` ASC),
  INDEX `fk_Aluno_Familia1_idx` (`Familia_idFamilia` ASC),
  INDEX `fk_Aluno_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  INDEX `fk_Aluno_Consulta1_idx` (`Consulta_idConsulta` ASC),
  INDEX `fk_Aluno_PaiMae1_idx` (`Mae_idPaiMae` ASC),
  CONSTRAINT `fk_Aluno_Pai1`
    FOREIGN KEY (`PaiMae_idPaiMae`)
    REFERENCES `mydb`.`PaiMae` (`idPaiMae`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_Responsavel1`
    FOREIGN KEY (`Responsavel_idResponsavel`)
    REFERENCES `mydb`.`Responsavel` (`idResponsavel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_Familia1`
    FOREIGN KEY (`Familia_idFamilia`)
    REFERENCES `mydb`.`Familia` (`idFamilia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `mydb`.`UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_Consulta1`
    FOREIGN KEY (`Consulta_idConsulta`)
    REFERENCES `mydb`.`Consulta` (`idConsulta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_PaiMae1`
    FOREIGN KEY (`Mae_idPaiMae`)
    REFERENCES `mydb`.`PaiMae` (`idPaiMae`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Morador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Morador` (
  `idMorador` INT NOT NULL,
  `Familia_idFamilia` INT NOT NULL,
  PRIMARY KEY (`idMorador`),
  INDEX `fk_Morador_Familia1_idx` (`Familia_idFamilia` ASC),
  CONSTRAINT `fk_Morador_Familia1`
    FOREIGN KEY (`Familia_idFamilia`)
    REFERENCES `mydb`.`Familia` (`idFamilia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Contato` (
  `idContato` INT NOT NULL,
  PRIMARY KEY (`idContato`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`UnificaTiposXContato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`UnificaTiposXContato` (
  `Contato_idContato` INT NOT NULL,
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  INDEX `fk_UnificaContatoXContato_Contato1_idx` (`Contato_idContato` ASC),
  INDEX `fk_UnificaContatoXContato_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  CONSTRAINT `fk_UnificaContatoXContato_Contato1`
    FOREIGN KEY (`Contato_idContato`)
    REFERENCES `mydb`.`Contato` (`idContato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_UnificaContatoXContato_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `mydb`.`UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Endereco` (
  `idEndereco` INT NOT NULL,
  PRIMARY KEY (`idEndereco`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`UnificaTiposXEndereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`UnificaTiposXEndereco` (
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  `Endereco_idEndereco` INT NOT NULL,
  INDEX `fk_UnificaTiposXEndereco_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  INDEX `fk_UnificaTiposXEndereco_Endereco1_idx` (`Endereco_idEndereco` ASC),
  CONSTRAINT `fk_UnificaTiposXEndereco_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `mydb`.`UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_UnificaTiposXEndereco_Endereco1`
    FOREIGN KEY (`Endereco_idEndereco`)
    REFERENCES `mydb`.`Endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Despesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Despesa` (
  `idDespesa` INT NOT NULL,
  `TipoDespesa` VARCHAR(45) NULL,
  `Valor` VARCHAR(45) NULL,
  `Familia_idFamilia` INT NOT NULL,
  PRIMARY KEY (`idDespesa`),
  INDEX `fk_Despesa_Familia1_idx` (`Familia_idFamilia` ASC),
  CONSTRAINT `fk_Despesa_Familia1`
    FOREIGN KEY (`Familia_idFamilia`)
    REFERENCES `mydb`.`Familia` (`idFamilia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Veiculo` (
  `idVeiculo` INT NOT NULL,
  `Familia_idFamilia` INT NOT NULL,
  PRIMARY KEY (`idVeiculo`),
  INDEX `fk_Veiculo_Familia1_idx` (`Familia_idFamilia` ASC),
  CONSTRAINT `fk_Veiculo_Familia1`
    FOREIGN KEY (`Familia_idFamilia`)
    REFERENCES `mydb`.`Familia` (`idFamilia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TratamentoMedico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TratamentoMedico` (
  `idTratamentoMedico` INT NOT NULL,
  `Familia_idFamilia` INT NOT NULL,
  PRIMARY KEY (`idTratamentoMedico`),
  INDEX `fk_TratamentoMedico_Familia1_idx` (`Familia_idFamilia` ASC),
  CONSTRAINT `fk_TratamentoMedico_Familia1`
    FOREIGN KEY (`Familia_idFamilia`)
    REFERENCES `mydb`.`Familia` (`idFamilia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Imovel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Imovel` (
  `idImovel` INT NOT NULL,
  `Familia_idFamilia` INT NOT NULL,
  PRIMARY KEY (`idImovel`),
  INDEX `fk_Imovel_Familia1_idx` (`Familia_idFamilia` ASC),
  CONSTRAINT `fk_Imovel_Familia1`
    FOREIGN KEY (`Familia_idFamilia`)
    REFERENCES `mydb`.`Familia` (`idFamilia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`NaoAluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`NaoAluno` (
  `idNaoAluno` INT NOT NULL,
  `Consulta_idConsulta` INT NOT NULL,
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  PRIMARY KEY (`idNaoAluno`),
  INDEX `fk_NaoAluno_Consulta1_idx` (`Consulta_idConsulta` ASC),
  INDEX `fk_NaoAluno_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  CONSTRAINT `fk_NaoAluno_Consulta1`
    FOREIGN KEY (`Consulta_idConsulta`)
    REFERENCES `mydb`.`Consulta` (`idConsulta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_NaoAluno_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `mydb`.`UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`condicao_saude`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`condicao_saude` (
  `idcondicao_saude` INT NOT NULL,
  PRIMARY KEY (`idcondicao_saude`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipo_doenca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipo_doenca` (
  `idtipo_doenca` INT NOT NULL,
  `condicao_saude_idcondicao_saude` INT NOT NULL,
  PRIMARY KEY (`idtipo_doenca`),
  INDEX `fk_tipo_doenca_condicao_saude1_idx` (`condicao_saude_idcondicao_saude` ASC),
  CONSTRAINT `fk_tipo_doenca_condicao_saude1`
    FOREIGN KEY (`condicao_saude_idcondicao_saude`)
    REFERENCES `mydb`.`condicao_saude` (`idcondicao_saude`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`residencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`residencia` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NULL,
  `valor_prestacao` DECIMAL(8,2) NULL,
  `proprietario` VARCHAR(45) NULL,
  `parentesco_proprietario` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`grupo_familiar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`grupo_familiar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_residencia` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_grupo_familiar_residencia1_idx` (`id_residencia` ASC),
  CONSTRAINT `fk_grupo_familiar_residencia1`
    FOREIGN KEY (`id_residencia`)
    REFERENCES `mydb`.`residencia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estado` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `id_estado` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cidade_estado1_idx` (`id_estado` ASC),
  CONSTRAINT `fk_cidade_estado1`
    FOREIGN KEY (`id_estado`)
    REFERENCES `mydb`.`estado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`endereco` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lograduro` VARCHAR(60) NOT NULL,
  `numero` VARCHAR(10) NULL,
  `bairro` VARCHAR(30) NULL,
  `CEP` VARCHAR(8) NULL,
  `ponto_de_referencia` VARCHAR(30) NULL,
  `id_cidade` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_endereco_cidade1_idx` (`id_cidade` ASC),
  CONSTRAINT `fk_endereco_cidade1`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `mydb`.`cidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`responsavel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`responsavel` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `url_documento_comprobatorio` VARCHAR(20) NOT NULL,
  `orgao_expedidor` VARCHAR(15) NOT NULL,
  `vigencia` VARCHAR(12) NOT NULL,
  `id_pessoa` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_responsavel_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_responsavel_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pessoa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `estado_civil` VARCHAR(15) NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  `id_endereco` INT NOT NULL,
  `cpf` CHAR(11) NULL,
  `rg` VARCHAR(12) NULL,
  `renda` DECIMAL(8,2) NULL,
  `id_responsavel` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pessoa_endereco1_idx` (`id_endereco` ASC),
  INDEX `fk_pessoa_responsavel1_idx` (`id_responsavel` ASC),
  CONSTRAINT `fk_pessoa_endereco1`
    FOREIGN KEY (`id_endereco`)
    REFERENCES `mydb`.`endereco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pessoa_responsavel1`
    FOREIGN KEY (`id_responsavel`)
    REFERENCES `mydb`.`responsavel` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`familiar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`familiar` (
  `id` INT NOT NULL,
  `id_familia` INT NOT NULL,
  `parentesco` VARCHAR(20) NULL,
  `idoso` TINYINT(1) NULL,
  `id_pessoa` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_familiar_familia1_idx` (`id_familia` ASC),
  INDEX `fk_familiar_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_familiar_familia1`
    FOREIGN KEY (`id_familia`)
    REFERENCES `mydb`.`grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_familiar_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`saude_do_familiar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`saude_do_familiar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_familiar` INT NOT NULL,
  `usa_medicamento_continuo` TINYINT(1) NOT NULL,
  `despesa_mensal` DECIMAL(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_saude_do_familiar_familiar1_idx` (`id_familiar` ASC),
  CONSTRAINT `fk_saude_do_familiar_familiar1`
    FOREIGN KEY (`id_familiar`)
    REFERENCES `mydb`.`familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipo_de_doenca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipo_de_doenca` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cid` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`condicao_de_saude`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`condicao_de_saude` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  `id_saude_do_familiar` INT NOT NULL,
  `id_tipo_de_doenca` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_condicao_de_saude_saude_do_familiar1_idx` (`id_saude_do_familiar` ASC),
  INDEX `fk_condicao_de_saude_tipo_de_doenca1_idx` (`id_tipo_de_doenca` ASC),
  CONSTRAINT `fk_condicao_de_saude_saude_do_familiar1`
    FOREIGN KEY (`id_saude_do_familiar`)
    REFERENCES `mydb`.`saude_do_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_condicao_de_saude_tipo_de_doenca1`
    FOREIGN KEY (`id_tipo_de_doenca`)
    REFERENCES `mydb`.`tipo_de_doenca` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`imovel_alugado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`imovel_alugado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(30) NOT NULL,
  `quantidade` INT NOT NULL,
  `valor` DECIMAL(8,2) NOT NULL,
  `id_familia` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_imovel_alugado_familia1_idx` (`id_familia` ASC),
  CONSTRAINT `fk_imovel_alugado_familia1`
    FOREIGN KEY (`id_familia`)
    REFERENCES `mydb`.`grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`veiculo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_familia` INT NOT NULL,
  `tipo` VARCHAR(30) NOT NULL,
  `marca_modelo` VARCHAR(50) NOT NULL,
  `ano_fabricacao` INT NOT NULL,
  `utilizacao` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_veiculo_familia1_idx` (`id_familia` ASC),
  CONSTRAINT `fk_veiculo_familia1`
    FOREIGN KEY (`id_familia`)
    REFERENCES `mydb`.`grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipo_despesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipo_despesa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`despesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`despesa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_familia` INT NOT NULL,
  `id_tipo_despesa` INT NOT NULL,
  `valor` DECIMAL(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_despesa_familia1_idx` (`id_familia` ASC),
  INDEX `fk_despesa_tipo_despesa1_idx` (`id_tipo_despesa` ASC),
  CONSTRAINT `fk_despesa_familia1`
    FOREIGN KEY (`id_familia`)
    REFERENCES `mydb`.`grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_despesa_tipo_despesa1`
    FOREIGN KEY (`id_tipo_despesa`)
    REFERENCES `mydb`.`tipo_despesa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`beneficio_social`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`beneficio_social` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_familia` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `valor` DECIMAL(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_beneficio_social_familia1_idx` (`id_familia` ASC),
  CONSTRAINT `fk_beneficio_social_familia1`
    FOREIGN KEY (`id_familia`)
    REFERENCES `mydb`.`grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`genitor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`genitor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `local_de_trabaho` VARCHAR(60) NOT NULL,
  `cargo_funcao` VARCHAR(50) NOT NULL,
  `profissao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_progenitor_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_progenitor_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`aluno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `id_familia` INT NOT NULL,
  `turno` CHAR(1) NOT NULL,
  `classificacao` CHAR(1) NOT NULL,
  `certidao_de_nascimento` VARCHAR(200) NOT NULL,
  `matricula_prefeitura` VARCHAR(30) NULL,
  `religiao` VARCHAR(20) NULL,
  `batizado` TINYINT(1) NULL,
  `id_pai` INT NULL,
  `id_mae` INT NULL,
  `url_foto` VARCHAR(255) NULL,
  `ano_do_aluno` VARCHAR(20) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_aluno_pessoa1_idx` (`id_pessoa` ASC),
  INDEX `fk_aluno_familia1_idx` (`id_familia` ASC),
  INDEX `fk_aluno_progenitor1_idx` (`id_pai` ASC),
  INDEX `fk_aluno_progenitor2_idx` (`id_mae` ASC),
  CONSTRAINT `fk_aluno_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_familia1`
    FOREIGN KEY (`id_familia`)
    REFERENCES `mydb`.`grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_progenitor1`
    FOREIGN KEY (`id_pai`)
    REFERENCES `mydb`.`genitor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_progenitor2`
    FOREIGN KEY (`id_mae`)
    REFERENCES `mydb`.`genitor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`contato` (
  `id` INT NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  `tipo` VARCHAR(15) NOT NULL,
  `id_pessoa` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_contato_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_contato_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`requerimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`requerimento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `motivo_solicitacao` TEXT NULL,
  `data_solicitacao` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_requerimento_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_requerimento_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`questionario_socio_economico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`questionario_socio_economico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `ano_letivo` VARCHAR(10) NULL,
  `motivo_da_solicitacao` VARCHAR(40) NOT NULL,
  `registro_educacenso` VARCHAR(20) NULL,
  `data_questionario` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_questionario_socio_economico_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_questionario_socio_economico_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`consulta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `data_consulta` VARCHAR(45) NULL,
  `peso` DOUBLE NULL,
  `altura` VARCHAR(45) NULL,
  `evolucao_medica` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_consulta_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_consulta_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pre_matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pre_matricula` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `data_prematricula` DATE NULL,
  `observacao` TEXT NULL,
  `ano_letivo` VARCHAR(10) NULL,
  `qnt_filhos_mae` INT NULL,
  `qnt_filhos_creche` INT NULL,
  INDEX `fk_pre_matricula_pessoa1_idx` (`id_pessoa` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_pre_matricula_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `mydb`.`pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
