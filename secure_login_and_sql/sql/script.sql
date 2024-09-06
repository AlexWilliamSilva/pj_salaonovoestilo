CREATE DATABASE `dbsalaonovo`;

CREATE TABLE `dbsalaonovo`.`produtos` (
    `id_prod` INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_fornecedor` INT(12),
    FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedores`(`id_fornecedor`),
    `nome_prod` VARCHAR(50) NOT NULL,
    `desc_prod` VARCHAR(255),
    `quant_prod` INT NOT NULL,
    `marca` VARCHAR(100),
    `validade_prod` DATE,
    `data_entrada` DATE NOT NULL,
    `data_saida` DATE,
    `preco_prod` DECIMAL(10, 2) NOT NULL,
);

CREATE TABLE `dbsalaonovo`.`servicos` (
    `id_serv` INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome_serv` VARCHAR(50) NOT NULL,
    `desc_serv` VARCHAR(255),
    `preco_serv` DECIMAL(10, 2) NOT NULL
);

CREATE TABLE `dbsalaonovo`.`fornecedores` (
    `id_fornecedor` INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome_fornecedor` VARCHAR(60) NOT NULL,
    `razao_social` VARCHAR(60) NOT NULL,
    `email` VARCHAR(50) UNIQUE,
    `tel_fornecedor` VARCHAR(20),
    `CNPJ` VARCHAR(14) UNIQUE NOT NULL,
    `prazo_entrega` DATE NOT NULL
);

CREATE TABLE `dbsalaonovo`.`clientes` (
    `id_cli` INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome_cli` VARCHAR(50) NOT NULL,
    `tel_cli` VARCHAR(20),
    `data_nasc` DATE,
    `endereco` varchar(150)
);

/* Parte de usuarios logo abaixo */

CREATE USER 'sec_user'@'localhost' IDENTIFIED BY 'eKcGZr59zAa2BEWU';
GRANT SELECT, INSERT, UPDATE ON `dbsalaonovo`.* TO 'sec_user'@'localhost';

CREATE TABLE `dbsalaonovo`.`usuarios` (
    `id_user` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome_user` VARCHAR(50) NOT NULL,
    `email_user` VARCHAR(50) UNIQUE NOT NULL,
    `senha_user` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL
) ENGINE =  InnoDB;

/* CREATE TABLE `dbsalaonovo`.`login_attempts` (
    `user_id` int(11) not null,                                   PODE SER USADO PARA ACRESCENTAR O MONITORAMENTTO DE TENTATIVAS DE LOGIN
    `time` varchar(30) not null                                                 SENDO ELA UMA NOVA TABELA
) ENGINE = InnoDB; */

INSERT INTO `dbsalaonovo`.`usuarios` VALUES(1,'test_user','test@example.com', 
''); /* local onde ficara a senha criptografada atraves do hashed com o sha512 */