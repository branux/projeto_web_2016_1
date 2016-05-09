-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2016 às 04:27
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `turno` char(1) NOT NULL,
  `classificacao` char(1) NOT NULL,
  `certidao_de_nascimento` varchar(200) NOT NULL,
  `matricula_prefeitura` varchar(30) DEFAULT NULL,
  `religiao` varchar(20) DEFAULT NULL,
  `batizado` tinyint(1) DEFAULT NULL,
  `url_foto` varchar(255) DEFAULT NULL,
  `ano_do_aluno` varchar(20) DEFAULT NULL,
  `grupo_familiar_id` int(11) NOT NULL,
  `genitor_id` int(11) DEFAULT NULL,
  `responsavel_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aluno_pessoa1_idx` (`id_pessoa`),
  KEY `fk_aluno_grupo_familiar1_idx` (`grupo_familiar_id`),
  KEY `fk_aluno_genitor1_idx` (`genitor_id`),
  KEY `fk_aluno_responsavel1_idx` (`responsavel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `beneficio_social`
--

CREATE TABLE IF NOT EXISTS `beneficio_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo_familiar` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_beneficio_social_familia1_idx` (`id_grupo_familiar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cidade_estado1_idx` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `condicao_de_saude`
--

CREATE TABLE IF NOT EXISTS `condicao_de_saude` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `id_saude_do_familiar` int(11) NOT NULL,
  `id_tipo_de_doenca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_condicao_de_saude_saude_do_familiar1_idx` (`id_saude_do_familiar`),
  KEY `fk_condicao_de_saude_tipo_de_doenca1_idx` (`id_tipo_de_doenca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `condicao_saude`
--

CREATE TABLE IF NOT EXISTS `condicao_saude` (
  `idcondicao_saude` int(11) NOT NULL,
  PRIMARY KEY (`idcondicao_saude`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `data_consulta` varchar(45) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `evolucao_medica` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_consulta_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contato_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

CREATE TABLE IF NOT EXISTS `despesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo_familiar` int(11) NOT NULL,
  `id_tipo_despesa` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_despesa_familia1_idx` (`id_grupo_familiar`),
  KEY `fk_despesa_tipo_despesa1_idx` (`id_tipo_despesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lograduro` varchar(60) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `CEP` varchar(8) DEFAULT NULL,
  `ponto_de_referencia` varchar(30) DEFAULT NULL,
  `id_cidade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_endereco_cidade1_idx` (`id_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `familiar`
--

CREATE TABLE IF NOT EXISTS `familiar` (
  `id` int(11) NOT NULL,
  `id_grupo_familiar` int(11) NOT NULL,
  `parentesco` varchar(20) DEFAULT NULL,
  `idoso` tinyint(1) DEFAULT NULL,
  `id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_familiar_familia1_idx` (`id_grupo_familiar`),
  KEY `fk_familiar_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genitor`
--

CREATE TABLE IF NOT EXISTS `genitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `local_de_trabaho` varchar(60) NOT NULL,
  `cargo_funcao` varchar(50) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_progenitor_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_familiar`
--

CREATE TABLE IF NOT EXISTS `grupo_familiar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_residencia` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grupo_familiar_residencia1_idx` (`id_residencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel_alugado`
--

CREATE TABLE IF NOT EXISTS `imovel_alugado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(30) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `id_grupo_familiar` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imovel_alugado_familia1_idx` (`id_grupo_familiar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `naoaluno`
--

CREATE TABLE IF NOT EXISTS `naoaluno` (
  `idNaoAluno` int(11) NOT NULL,
  `Consulta_idConsulta` int(11) NOT NULL,
  `UnificaTipos_idUnificaTipos` int(11) NOT NULL,
  PRIMARY KEY (`idNaoAluno`),
  KEY `fk_NaoAluno_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `estado_civil` varchar(15) NOT NULL,
  `sexo` char(1) NOT NULL,
  `cpf` char(11) DEFAULT NULL,
  `rg` varchar(12) DEFAULT NULL,
  `renda` decimal(8,2) DEFAULT NULL,
  `pessoacol` varchar(45) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pessoa_endereco1_idx` (`endereco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pre_matricula`
--

CREATE TABLE IF NOT EXISTS `pre_matricula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `data_prematricula` date DEFAULT NULL,
  `observacao` text,
  `ano_letivo` varchar(10) DEFAULT NULL,
  `qnt_filhos_mae` int(11) DEFAULT NULL,
  `qnt_filhos_creche` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pre_matricula_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario_socio_economico`
--

CREATE TABLE IF NOT EXISTS `questionario_socio_economico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `ano_letivo` varchar(10) DEFAULT NULL,
  `motivo_da_solicitacao` varchar(40) NOT NULL,
  `registro_educacenso` varchar(20) DEFAULT NULL,
  `data_questionario` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_questionario_socio_economico_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requerimento`
--

CREATE TABLE IF NOT EXISTS `requerimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `motivo_solicitacao` text,
  `data_solicitacao` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_requerimento_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `residencia`
--

CREATE TABLE IF NOT EXISTS `residencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `valor_prestacao` decimal(8,2) DEFAULT NULL,
  `proprietario` varchar(45) DEFAULT NULL,
  `parentesco_proprietario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE IF NOT EXISTS `responsavel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_documento_comprobatorio` varchar(20) NOT NULL,
  `orgao_expedidor` varchar(15) NOT NULL,
  `vigencia` varchar(12) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_responsavel_pessoa1_idx` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saude_do_familiar`
--

CREATE TABLE IF NOT EXISTS `saude_do_familiar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_familiar` int(11) NOT NULL,
  `usa_medicamento_continuo` tinyint(1) NOT NULL,
  `despesa_mensal` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_saude_do_familiar_familiar1_idx` (`id_familiar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_despesa`
--

CREATE TABLE IF NOT EXISTS `tipo_despesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_de_doenca`
--

CREATE TABLE IF NOT EXISTS `tipo_de_doenca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_doenca`
--

CREATE TABLE IF NOT EXISTS `tipo_doenca` (
  `idtipo_doenca` int(11) NOT NULL,
  `condicao_saude_idcondicao_saude` int(11) NOT NULL,
  PRIMARY KEY (`idtipo_doenca`),
  KEY `fk_tipo_doenca_condicao_saude1_idx` (`condicao_saude_idcondicao_saude`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratamentomedico`
--

CREATE TABLE IF NOT EXISTS `tratamentomedico` (
  `idTratamentoMedico` int(11) NOT NULL,
  `Familia_idFamilia` int(11) NOT NULL,
  PRIMARY KEY (`idTratamentoMedico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unificatipos`
--

CREATE TABLE IF NOT EXISTS `unificatipos` (
  `idUnificaTipos` int(11) NOT NULL,
  PRIMARY KEY (`idUnificaTipos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unificatiposxcontato`
--

CREATE TABLE IF NOT EXISTS `unificatiposxcontato` (
  `Contato_idContato` int(11) NOT NULL,
  `UnificaTipos_idUnificaTipos` int(11) NOT NULL,
  KEY `fk_UnificaContatoXContato_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unificatiposxendereco`
--

CREATE TABLE IF NOT EXISTS `unificatiposxendereco` (
  `UnificaTipos_idUnificaTipos` int(11) NOT NULL,
  `Endereco_idEndereco` int(11) NOT NULL,
  KEY `fk_UnificaTiposXEndereco_UnificaTipos1_idx` (`UnificaTipos_idUnificaTipos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE IF NOT EXISTS `veiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo_familiar` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `marca_modelo` varchar(50) NOT NULL,
  `ano_fabricacao` int(11) NOT NULL,
  `utilizacao` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_veiculo_familia1_idx` (`id_grupo_familiar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_aluno_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aluno_grupo_familiar1` FOREIGN KEY (`grupo_familiar_id`) REFERENCES `grupo_familiar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aluno_genitor1` FOREIGN KEY (`genitor_id`) REFERENCES `genitor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aluno_responsavel1` FOREIGN KEY (`responsavel_id`) REFERENCES `responsavel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `beneficio_social`
--
ALTER TABLE `beneficio_social`
  ADD CONSTRAINT `fk_beneficio_social_familia1` FOREIGN KEY (`id_grupo_familiar`) REFERENCES `grupo_familiar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_cidade_estado1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `condicao_de_saude`
--
ALTER TABLE `condicao_de_saude`
  ADD CONSTRAINT `fk_condicao_de_saude_saude_do_familiar1` FOREIGN KEY (`id_saude_do_familiar`) REFERENCES `saude_do_familiar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_condicao_de_saude_tipo_de_doenca1` FOREIGN KEY (`id_tipo_de_doenca`) REFERENCES `tipo_de_doenca` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_consulta_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `fk_contato_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `despesa`
--
ALTER TABLE `despesa`
  ADD CONSTRAINT `fk_despesa_familia1` FOREIGN KEY (`id_grupo_familiar`) REFERENCES `grupo_familiar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_despesa_tipo_despesa1` FOREIGN KEY (`id_tipo_despesa`) REFERENCES `tipo_despesa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_cidade1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `familiar`
--
ALTER TABLE `familiar`
  ADD CONSTRAINT `fk_familiar_familia1` FOREIGN KEY (`id_grupo_familiar`) REFERENCES `grupo_familiar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_familiar_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `genitor`
--
ALTER TABLE `genitor`
  ADD CONSTRAINT `fk_progenitor_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
  ADD CONSTRAINT `fk_grupo_familiar_residencia1` FOREIGN KEY (`id_residencia`) REFERENCES `residencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `imovel_alugado`
--
ALTER TABLE `imovel_alugado`
  ADD CONSTRAINT `fk_imovel_alugado_familia1` FOREIGN KEY (`id_grupo_familiar`) REFERENCES `grupo_familiar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `naoaluno`
--
ALTER TABLE `naoaluno`
  ADD CONSTRAINT `fk_NaoAluno_UnificaTipos1` FOREIGN KEY (`UnificaTipos_idUnificaTipos`) REFERENCES `unificatipos` (`idUnificaTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_pessoa_endereco1` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pre_matricula`
--
ALTER TABLE `pre_matricula`
  ADD CONSTRAINT `fk_pre_matricula_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `questionario_socio_economico`
--
ALTER TABLE `questionario_socio_economico`
  ADD CONSTRAINT `fk_questionario_socio_economico_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `requerimento`
--
ALTER TABLE `requerimento`
  ADD CONSTRAINT `fk_requerimento_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `fk_responsavel_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `saude_do_familiar`
--
ALTER TABLE `saude_do_familiar`
  ADD CONSTRAINT `fk_saude_do_familiar_familiar1` FOREIGN KEY (`id_familiar`) REFERENCES `familiar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tipo_doenca`
--
ALTER TABLE `tipo_doenca`
  ADD CONSTRAINT `fk_tipo_doenca_condicao_saude1` FOREIGN KEY (`condicao_saude_idcondicao_saude`) REFERENCES `condicao_saude` (`idcondicao_saude`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `unificatiposxcontato`
--
ALTER TABLE `unificatiposxcontato`
  ADD CONSTRAINT `fk_UnificaContatoXContato_UnificaTipos1` FOREIGN KEY (`UnificaTipos_idUnificaTipos`) REFERENCES `unificatipos` (`idUnificaTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `unificatiposxendereco`
--
ALTER TABLE `unificatiposxendereco`
  ADD CONSTRAINT `fk_UnificaTiposXEndereco_UnificaTipos1` FOREIGN KEY (`UnificaTipos_idUnificaTipos`) REFERENCES `unificatipos` (`idUnificaTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_veiculo_familia1` FOREIGN KEY (`id_grupo_familiar`) REFERENCES `grupo_familiar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
