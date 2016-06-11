
-- -----------------------------------------------------
-- Table `UnificaTipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `UnificaTipos` (
  `idUnificaTipos` INT NOT NULL,
  PRIMARY KEY (`idUnificaTipos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `UnificaTiposXContato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `UnificaTiposXContato` (
  `Contato_idContato` INT NOT NULL,
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  INDEX `fk_UnificaContatoXContato_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  CONSTRAINT `fk_UnificaContatoXContato_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `UnificaTiposXEndereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `UnificaTiposXEndereco` (
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  `Endereco_idEndereco` INT NOT NULL,
  INDEX `fk_UnificaTiposXEndereco_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  CONSTRAINT `fk_UnificaTiposXEndereco_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TratamentoMedico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TratamentoMedico` (
  `idTratamentoMedico` INT NOT NULL,
  `Familia_idFamilia` INT NOT NULL,
  PRIMARY KEY (`idTratamentoMedico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NaoAluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NaoAluno` (
  `idNaoAluno` INT NOT NULL,
  `Consulta_idConsulta` INT NOT NULL,
  `UnificaTipos_idUnificaTipos` INT NOT NULL,
  PRIMARY KEY (`idNaoAluno`),
  INDEX `fk_NaoAluno_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos` ASC),
  CONSTRAINT `fk_NaoAluno_UnificaTipos1`
    FOREIGN KEY (`UnificaTipos_idUnificaTipos`)
    REFERENCES `UnificaTipos` (`idUnificaTipos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `condicao_saude`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `condicao_saude` (
  `idcondicao_saude` INT NOT NULL,
  PRIMARY KEY (`idcondicao_saude`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tipo_doenca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipo_doenca` (
  `idtipo_doenca` INT NOT NULL,
  `condicao_saude_idcondicao_saude` INT NOT NULL,
  PRIMARY KEY (`idtipo_doenca`),
  INDEX `fk_tipo_doenca_condicao_saude1_idx` (`condicao_saude_idcondicao_saude` ASC),
  CONSTRAINT `fk_tipo_doenca_condicao_saude1`
    FOREIGN KEY (`condicao_saude_idcondicao_saude`)
    REFERENCES `condicao_saude` (`idcondicao_saude`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `residencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `residencia` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NULL,
  `valor_prestacao` DECIMAL(8,2) NULL,
  `proprietario` VARCHAR(45) NULL,
  `parentesco_proprietario` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `grupo_familiar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `grupo_familiar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_residencia` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_grupo_familiar_residencia1_idx` (`id_residencia` ASC),
  CONSTRAINT `fk_grupo_familiar_residencia1`
    FOREIGN KEY (`id_residencia`)
    REFERENCES `residencia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estado` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `id_estado` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cidade_estado1_idx` (`id_estado` ASC),
  CONSTRAINT `fk_cidade_estado1`
    FOREIGN KEY (`id_estado`)
    REFERENCES `estado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `endereco` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lograduro` VARCHAR(60) NULL,
  `numero` VARCHAR(10) NULL,
  `bairro` VARCHAR(30) NULL,
  `CEP` VARCHAR(8) NULL,
  `ponto_de_referencia` VARCHAR(30) NULL,
  `id_cidade` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_endereco_cidade1_idx` (`id_cidade` ASC),
  CONSTRAINT `fk_endereco_cidade1`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `cidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `estado_civil` VARCHAR(15) NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  `cpf` CHAR(11) NULL,
  `rg` VARCHAR(12) NULL,
  `renda` DECIMAL(8,2) NULL,
  `pessoacol` VARCHAR(45) NOT NULL,
  `endereco_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pessoa_endereco1_idx` (`endereco_id` ASC),
  CONSTRAINT `fk_pessoa_endereco1`
    FOREIGN KEY (`endereco_id`)
    REFERENCES `endereco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `familiar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `familiar` (
  `id` INT NOT NULL,
  `id_grupo_familiar` INT NOT NULL,
  `parentesco` VARCHAR(20) NULL,
  `idoso` TINYINT(1) NULL,
  `id_pessoa` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_familiar_familia1_idx` (`id_grupo_familiar` ASC),
  INDEX `fk_familiar_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_familiar_familia1`
    FOREIGN KEY (`id_grupo_familiar`)
    REFERENCES `grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_familiar_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `saude_do_familiar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saude_do_familiar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_familiar` INT NOT NULL,
  `usa_medicamento_continuo` TINYINT(1) NOT NULL,
  `despesa_mensal` DECIMAL(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_saude_do_familiar_familiar1_idx` (`id_familiar` ASC),
  CONSTRAINT `fk_saude_do_familiar_familiar1`
    FOREIGN KEY (`id_familiar`)
    REFERENCES `familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tipo_de_doenca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipo_de_doenca` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cid` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `condicao_de_saude`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `condicao_de_saude` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  `id_saude_do_familiar` INT NOT NULL,
  `id_tipo_de_doenca` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_condicao_de_saude_saude_do_familiar1_idx` (`id_saude_do_familiar` ASC),
  INDEX `fk_condicao_de_saude_tipo_de_doenca1_idx` (`id_tipo_de_doenca` ASC),
  CONSTRAINT `fk_condicao_de_saude_saude_do_familiar1`
    FOREIGN KEY (`id_saude_do_familiar`)
    REFERENCES `saude_do_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_condicao_de_saude_tipo_de_doenca1`
    FOREIGN KEY (`id_tipo_de_doenca`)
    REFERENCES `tipo_de_doenca` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imovel_alugado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imovel_alugado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(30) NOT NULL,
  `quantidade` INT NOT NULL,
  `valor` DECIMAL(8,2) NOT NULL,
  `id_grupo_familiar` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_imovel_alugado_familia1_idx` (`id_grupo_familiar` ASC),
  CONSTRAINT `fk_imovel_alugado_familia1`
    FOREIGN KEY (`id_grupo_familiar`)
    REFERENCES `grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veiculo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_grupo_familiar` INT NOT NULL,
  `tipo` VARCHAR(30) NOT NULL,
  `marca_modelo` VARCHAR(50) NOT NULL,
  `ano_fabricacao` INT NOT NULL,
  `utilizacao` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_veiculo_familia1_idx` (`id_grupo_familiar` ASC),
  CONSTRAINT `fk_veiculo_familia1`
    FOREIGN KEY (`id_grupo_familiar`)
    REFERENCES `grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tipo_despesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipo_despesa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `despesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `despesa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_grupo_familiar` INT NOT NULL,
  `id_tipo_despesa` INT NOT NULL,
  `valor` DECIMAL(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_despesa_familia1_idx` (`id_grupo_familiar` ASC),
  INDEX `fk_despesa_tipo_despesa1_idx` (`id_tipo_despesa` ASC),
  CONSTRAINT `fk_despesa_familia1`
    FOREIGN KEY (`id_grupo_familiar`)
    REFERENCES `grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_despesa_tipo_despesa1`
    FOREIGN KEY (`id_tipo_despesa`)
    REFERENCES `tipo_despesa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `beneficio_social`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `beneficio_social` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_grupo_familiar` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `valor` DECIMAL(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_beneficio_social_familia1_idx` (`id_grupo_familiar` ASC),
  CONSTRAINT `fk_beneficio_social_familia1`
    FOREIGN KEY (`id_grupo_familiar`)
    REFERENCES `grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `genitor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `genitor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `local_de_trabaho` VARCHAR(60) NOT NULL,
  `cargo_funcao` VARCHAR(50) NOT NULL,
  `profissao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_progenitor_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_progenitor_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `responsavel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `responsavel` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `url_documento_comprobatorio` VARCHAR(20) NOT NULL,
  `orgao_expedidor` VARCHAR(15) NOT NULL,
  `vigencia` VARCHAR(12) NOT NULL,
  `id_pessoa` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_responsavel_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_responsavel_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `turno` CHAR(1) NOT NULL,
  `classificacao` CHAR(1) NOT NULL,
  `certidao_de_nascimento` VARCHAR(200) NOT NULL,
  `matricula_prefeitura` VARCHAR(30) NULL,
  `religiao` VARCHAR(20) NULL,
  `batizado` TINYINT(1) NULL,
  `url_foto` VARCHAR(255) NULL,
  `ano_do_aluno` VARCHAR(20) NULL,
  `grupo_familiar_id` INT NOT NULL,
  `genitor_id` INT NULL,
  `responsavel_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_aluno_pessoa1_idx` (`id_pessoa` ASC),
  INDEX `fk_aluno_grupo_familiar1_idx` (`grupo_familiar_id` ASC),
  INDEX `fk_aluno_genitor1_idx` (`genitor_id` ASC),
  INDEX `fk_aluno_responsavel1_idx` (`responsavel_id` ASC),
  CONSTRAINT `fk_aluno_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_grupo_familiar1`
    FOREIGN KEY (`grupo_familiar_id`)
    REFERENCES `grupo_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_genitor1`
    FOREIGN KEY (`genitor_id`)
    REFERENCES `genitor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_responsavel1`
    FOREIGN KEY (`responsavel_id`)
    REFERENCES `responsavel` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `contato` (
  `id` INT NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  `tipo` VARCHAR(15) NOT NULL,
  `id_pessoa` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_contato_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_contato_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `requerimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `requerimento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_pessoa` INT NOT NULL,
  `motivo_solicitacao` TEXT NULL,
  `data_solicitacao` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_requerimento_pessoa1_idx` (`id_pessoa` ASC),
  CONSTRAINT `fk_requerimento_pessoa1`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `questionario_socio_economico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `questionario_socio_economico` (
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
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `consulta` (
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
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pre_matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pre_matricula` (
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
    REFERENCES `pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
