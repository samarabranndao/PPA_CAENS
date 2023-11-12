-- Active: 1686847308405@@127.0.0.1@3306@ppa

CREATE TABLE
    `professor_funcionario` (
        `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
        `nome` TEXT(100),
        `registro_ciap` TEXT(20),
        `email` TEXT(100),
        `cargo` TEXT(30),
        `senha` TEXT(20),
        PRIMARY KEY (`id`)
    );

CREATE TABLE
    `item` (
        `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
        `nome` TEXT(100),
        `quantidade` INT(11),
        `tipo` TEXT(100),
        PRIMARY KEY (`id`)
    )

CREATE TABLE
    `solicitacao_item` (
        `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
        `nome` TEXT(100),
        `tipo` TEXT(100),
        `quantidade` INT(11),
        `justificativa` TEXT(100),
        PRIMARY KEY (`id`)
    )