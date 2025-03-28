CREATE DATABASE estagio_vagas;
CREATE TABLE `estagio_vagas`.`vagas` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `titulo` VARCHAR(255) NOT NULL ,
    `descricao` TEXT NOT NULL ,
    `ativo` ENUM('s','n') NOT NULL ,
    `data` TIMESTAMP NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;