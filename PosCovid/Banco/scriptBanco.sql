-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `poscovid` DEFAULT CHARACTER SET utf8 ;
USE `poscovid` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `poscovid`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(80) NOT NULL,
  `sobrenome_usuario` VARCHAR(80) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `celular` INT NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `data_cadastro` DATE NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `poscovid`.`ficha` (
  `id_ficha` INT NOT NULL AUTO_INCREMENT,
  `usuario_id_usuario` INT NOT NULL,
  `fadiga` TINYINT NULL,
  `falta_de_ar` TINYINT NULL,
  `dor_cabeca` TINYINT NULL,
  `dor_muscular` TINYINT NULL,
  `queda_cabelo` TINYINT NULL,
  `paladar_olfato` TINYINT NULL,
  `dor_peito` TINYINT NULL,
  `tontura` TINYINT NULL,
  `tromboses` TINYINT NULL,
  `palpitacao` TINYINT NULL,
  `depressao_ansiedade` TINYINT NULL,
  `outros` VARCHAR(255) NULL,
  `data_cadastro` DATE NOT NULL,
  PRIMARY KEY (`id_ficha`),
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `poscovid`.`usuario` (`id_usuario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
