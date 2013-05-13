SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `fils-db` DEFAULT CHARACTER SET utf8 ;
USE `fils-db` ;

-- -----------------------------------------------------
-- Table `fils-db`.`professional-titles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`professional-titles` (
  `title-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `en-title-text` VARCHAR(45) NOT NULL ,
  `fr-title-text` VARCHAR(45) NOT NULL ,
  `de-title-text` VARCHAR(45) NOT NULL ,
  `ro-title-text` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`title-id`) ,
  UNIQUE INDEX `title-id_UNIQUE` (`title-id` ASC) ,
  UNIQUE INDEX `en-title-text_UNIQUE` (`en-title-text` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Professional titles table\n';


-- -----------------------------------------------------
-- Table `fils-db`.`filetypes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`filetypes` (
  `filetype-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `filetype-name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`filetype-id`) ,
  UNIQUE INDEX `filetype-id_UNIQUE` (`filetype-id` ASC) ,
  UNIQUE INDEX `filetype-name_UNIQUE` (`filetype-name` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Filetype table		';


-- -----------------------------------------------------
-- Table `fils-db`.`documents`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`documents` (
  `document-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `en-doc-url` VARCHAR(100) NULL DEFAULT NULL ,
  `fr-doc-url` VARCHAR(100) NULL DEFAULT NULL ,
  `de-doc-url` VARCHAR(100) NULL DEFAULT NULL ,
  `ro-doc-url` VARCHAR(100) NULL DEFAULT NULL ,
  `en-doc-title` VARCHAR(100) NULL DEFAULT NULL ,
  `fr-doc-title` VARCHAR(100) NULL DEFAULT NULL ,
  `de-doc-title` VARCHAR(100) NULL DEFAULT NULL ,
  `ro-doc-title` VARCHAR(100) NULL DEFAULT NULL ,
  `doc-importance` INT(11) NULL DEFAULT '1' ,
  `doc-filetype` INT(11) NOT NULL ,
  `date-posted` DATE NOT NULL ,
  `date-modified` DATE NULL DEFAULT NULL ,
  `date-deleted` DATE NULL DEFAULT NULL ,
  `expiration-interval` INT(11) NULL DEFAULT '30' ,
  `year-relevant` YEAR NOT NULL ,
  `doc-description` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`document-id`) ,
  UNIQUE INDEX `document-id_UNIQUE` (`document-id` ASC) ,
  UNIQUE INDEX `documents-index` (`en-doc-url` ASC, `fr-doc-url` ASC, `de-doc-url` ASC, `ro-doc-url` ASC) ,
  UNIQUE INDEX `doc-title-index` (`en-doc-title` ASC, `fr-doc-title` ASC, `de-doc-title` ASC, `ro-doc-title` ASC) ,
  INDEX `doc-filetype_idx` (`doc-filetype` ASC) ,
  CONSTRAINT `doc-filetype`
    FOREIGN KEY (`doc-filetype` )
    REFERENCES `fils-db`.`filetypes` (`filetype-id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Documents table\n		';


-- -----------------------------------------------------
-- Table `fils-db`.`images`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`images` (
  `image-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `image-size` INT(11) NOT NULL ,
  `image-url` VARCHAR(45) NOT NULL ,
  `preview-image-url` VARCHAR(45) NOT NULL ,
  `image-filetype` INT(11) NOT NULL ,
  `preview-image-filetype` INT(11) NOT NULL ,
  `image-timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
  `ro-description-text` TEXT NULL DEFAULT NULL ,
  `en-description-text` TEXT NULL DEFAULT NULL ,
  `de-description-text` TEXT NULL DEFAULT NULL ,
  `fr-description-text` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`image-id`) ,
  UNIQUE INDEX `image-id_UNIQUE` (`image-id` ASC) ,
  UNIQUE INDEX `image-url_UNIQUE` (`image-url` ASC) ,
  UNIQUE INDEX `preview-image-url_UNIQUE` (`preview-image-url` ASC) ,
  UNIQUE INDEX `img-preview-index` (`image-url` ASC, `preview-image-url` ASC) ,
  INDEX `img-filetype_idx` (`image-filetype` ASC) ,
  INDEX `preview-filteype_idx` (`preview-image-filetype` ASC) ,
  CONSTRAINT `img-filetype`
    FOREIGN KEY (`image-filetype` )
    REFERENCES `fils-db`.`filetypes` (`filetype-id` )
    ON UPDATE NO ACTION,
  CONSTRAINT `preview-filteype`
    FOREIGN KEY (`preview-image-filetype` )
    REFERENCES `fils-db`.`filetypes` (`filetype-id` )
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Images table	';


-- -----------------------------------------------------
-- Table `fils-db`.`persons`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`persons` (
  `person-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `fname` TEXT NOT NULL ,
  `lname` TEXT NOT NULL ,
  `email` VARCHAR(40) NOT NULL ,
  `password` TEXT NULL DEFAULT NULL ,
  `professional-title` INT(11) NULL DEFAULT NULL ,
  `picture-url` INT(11) NULL DEFAULT NULL ,
  `department` INT(11) NOT NULL ,
  `cv-url` INT(11) NULL DEFAULT NULL ,
  `phone-number` TEXT NULL DEFAULT NULL ,
  `personal-page-url` TEXT NOT NULL ,
  `is-head-dept` BINARY(1) NULL DEFAULT '0' ,
  `is-dean` BINARY(1) NULL DEFAULT '0' ,
  `is-prodean` BINARY(1) NULL DEFAULT '0' ,
  `is-secretary` BINARY(1) NULL DEFAULT '0' ,
  `is-admin` BINARY(1) NULL DEFAULT '0' ,
  PRIMARY KEY (`person-id`) ,
  UNIQUE INDEX `person-id_UNIQUE` (`person-id` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  INDEX `cv_idx` (`cv-url` ASC) ,
  INDEX `picture_idx` (`picture-url` ASC) ,
  INDEX `dept_idx` (`department` ASC) ,
  INDEX `prof-title_idx` (`professional-title` ASC) ,
  CONSTRAINT `prof-title`
    FOREIGN KEY (`professional-title` )
    REFERENCES `fils-db`.`professional-titles` (`title-id` )
    ON UPDATE NO ACTION,
  CONSTRAINT `cv`
    FOREIGN KEY (`cv-url` )
    REFERENCES `fils-db`.`documents` (`document-id` )
    ON UPDATE NO ACTION,
  CONSTRAINT `dept`
    FOREIGN KEY (`department` )
    REFERENCES `fils-db`.`department` (`department-id` )
    ON UPDATE NO ACTION,
  CONSTRAINT `picture`
    FOREIGN KEY (`picture-url` )
    REFERENCES `fils-db`.`images` (`image-id` )
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'People\'s table\n';


-- -----------------------------------------------------
-- Table `fils-db`.`department`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`department` (
  `department-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `dept-head` INT(11) NOT NULL ,
  `dept-name` VARCHAR(100) NOT NULL ,
  `dept-descr-text` VARCHAR(255) NULL DEFAULT NULL ,
  `dept-language` INT(11) NULL DEFAULT NULL ,
  `is-secretary-dept` BINARY(1) NULL DEFAULT '0' ,
  `contact-addr` VARCHAR(100) NOT NULL ,
  `dept-phone` VARCHAR(11) NOT NULL ,
  PRIMARY KEY (`department-id`) ,
  UNIQUE INDEX `department-id_UNIQUE` (`department-id` ASC) ,
  UNIQUE INDEX `dept-unique` (`dept-head` ASC, `department-id` ASC) ,
  INDEX `head_idx` (`dept-head` ASC) ,
  CONSTRAINT `head`
    FOREIGN KEY (`dept-head` )
    REFERENCES `fils-db`.`persons` (`person-id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Departments table\n';


-- -----------------------------------------------------
-- Table `fils-db`.`languages`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`languages` (
  `language-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `lang-name-ro` VARCHAR(45) NOT NULL ,
  `lang-name-en` VARCHAR(45) NOT NULL ,
  `lang-name-de` VARCHAR(45) NOT NULL ,
  `lang-name-fr` VARCHAR(45) NOT NULL ,
  `lang-acronym` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`language-id`) ,
  UNIQUE INDEX `language-id_UNIQUE` (`language-id` ASC) ,
  UNIQUE INDEX `unique-combo` (`lang-name-ro` ASC, `lang-name-en` ASC, `lang-name-de` ASC, `lang-name-fr` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Languages table';


-- -----------------------------------------------------
-- Table `fils-db`.`posts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`posts` (
  `post-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `importance` INT(11) NULL DEFAULT '1' ,
  `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
  `expiration-interval` INT(11) NULL DEFAULT '30' ,
  `post-text` LONGTEXT NOT NULL ,
  `lanugage` INT(11) NOT NULL ,
  `post-image-url1` VARCHAR(45) NULL DEFAULT NULL ,
  `post-image-url2` VARCHAR(45) NULL DEFAULT NULL ,
  `post-image-url3` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`post-id`) ,
  UNIQUE INDEX `post-id_UNIQUE` (`post-id` ASC) ,
  INDEX `lang_idx` (`lanugage` ASC) ,
  INDEX `img-url1_idx` (`post-image-url1` ASC) ,
  INDEX `img-url2_idx` (`post-image-url2` ASC) ,
  INDEX `img-url3_idx` (`post-image-url3` ASC) ,
  CONSTRAINT `lang`
    FOREIGN KEY (`lanugage` )
    REFERENCES `fils-db`.`languages` (`language-id` )
    ON UPDATE NO ACTION,
  CONSTRAINT `img-url1`
    FOREIGN KEY (`post-image-url1` )
    REFERENCES `fils-db`.`images` (`image-url` )
    ON UPDATE NO ACTION,
  CONSTRAINT `img-url2`
    FOREIGN KEY (`post-image-url2` )
    REFERENCES `fils-db`.`images` (`image-url` )
    ON UPDATE NO ACTION,
  CONSTRAINT `img-url3`
    FOREIGN KEY (`post-image-url3` )
    REFERENCES `fils-db`.`images` (`image-url` )
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Posts table';


-- -----------------------------------------------------
-- Table `fils-db`.`timetables`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fils-db`.`timetables` (
  `timetable-id` INT(11) NOT NULL AUTO_INCREMENT ,
  `document` INT(11) NOT NULL ,
  PRIMARY KEY (`timetable-id`) ,
  UNIQUE INDEX `timetable-id_UNIQUE` (`timetable-id` ASC) ,
  UNIQUE INDEX `document_UNIQUE` (`document` ASC) ,
  CONSTRAINT `doc`
    FOREIGN KEY (`document` )
    REFERENCES `fils-db`.`documents` (`document-id` )
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Timetables table\n';

USE `fils-db` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
