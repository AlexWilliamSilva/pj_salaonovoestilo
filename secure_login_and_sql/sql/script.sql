-- SQLBook: Code
CREATE DATABASE dbSalaoNovoEstilo;

CREATE TABLE dbSalaoNovoEstilo.Clientes (
    id_cli INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_cli VARCHAR(50) NOT NULL,
    tel_cli VARCHAR(20) NOT NULL,
    data_nasc_cli DATE,
    numero VARCHAR(10),
    rua VARCHAR(100),
    bairro VARCHAR(50),
    cep VARCHAR(9) -- valor que suporta o hífen, Ex: XXXX-XXX
);

CREATE TABLE dbSalaoNovoEstilo.Servicos (
    id_serv INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_serv VARCHAR(50) NOT NULL,
    descricao_serv VARCHAR(255),
    preco_serv DECIMAL(10, 2) NOT NULL
);

/*CREATE TABLE Ordem_De_Servico (
    id_serv_ped INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_cli INT(12) NOT NULL,
    id_serv INT(12) NOT NULL,
    valor_serv DECIMAL(10, 2) NOT NULL,
    data_serv_ped DATE,
    CONSTRAINT fk_cliente FOREIGN KEY (id_cli) REFERENCES Clientes(id_cli), /* Constraint -- nomeando as cchaves estrangeiras para futuras alterações 
    CONSTRAINT fk_servico FOREIGN KEY (id_serv) REFERENCES Servicos(id_serv)
);*/

CREATE TABLE dbSalaoNovoEstilo.Produtos (
    id_prod INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_prod VARCHAR(50) NOT NULL,
    descricao_prod VARCHAR(255),
    quant_prod INT NOT NULL, 
    marca VARCHAR(50) NOT NULL,
    validade_prod DATE NOT NULL ,
    preco_prod DECIMAL(10, 2) NOT NULL,
    status_prod VARCHAR(10) NOT NULL
);  

/*CREATE TABLE Ped_Prod (
    id_ped_prod INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_cli INT(12) NOT NULL,
    id_prod INT(12) NOT NULL,
    quant_prod_ped INT NOT NULL, 
    data_ped_prod DATE,
    valor_prod DECIMAL(10, 2) NOT NULL,
    CONSTRAINT fk_cliente FOREIGN KEY (id_cli) REFERENCES Clientes(id_cli), 
    CONSTRAINT fk_produto FOREIGN KEY (id_prod) REFERENCES Produtos(id_prod)
);*/

CREATE TABLE dbSalaoNovoEstilo.Fornecedores (
    id_fornecedor INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_fornecedor VARCHAR(50) NOT NULL,
    razao_social VARCHAR(255) NOT NULL,
    email_forn VARCHAR(100) UNIQUE,
    tel_forn VARCHAR(20),
    cnpj VARCHAR(14) NOT NULL,
    numero VARCHAR(10),
    rua VARCHAR(100),
    bairro VARCHAR(50),
    cep VARCHAR(9),
    uf VARCHAR(2),
    pais VARCHAR(50),
    status_fornecedor VARCHAR(10) NOT NULL
);

/*CREATE TABLE Itens_Fornecidos (
    id_prod_fornecido INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_fornecedor INT(12) NOT NULL,
    id_prod INT(12) NOT NULL,
    quant_prod_fornecido INT NOT NULL, 
    valor_prod_fornecido DECIMAL(10, 2) NOT NULL,
    data_prod_fornecido DATE, 
    CONSTRAINT fk_fornecedor FOREIGN KEY (id_fornecedor) REFERENCES Fornecedores(id_fornecedor),
    CONSTRAINT fk_produto FOREIGN KEY (id_prod) REFERENCES Produtos(id_prod)
);*/

                                                        -- Outra opção 
/*

    CREATE TABLE Ped_Compra (
        id_prod_fornecido INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        id_fornecedor INT(12) NOT NULL,
        data_prod_fornecido DATE, 
        CONSTRAINT fk_fornecedor FOREIGN KEY (id_fornecedor) REFERENCES Fornecedores(id_fornecedor)
    );


    CREATE TABLE Itens_Fornecidos (
        id_prod_fornecido INT(12) NOT NULL,
        id_prod INT(12) NOT NULL,
        quant_prod_fornecido INT NOT NULL, 
        valor_prod_fornecido DECIMAL(10, 2) NOT NULL,

        CONSTRAINT fk_prod_fornecido FOREIGN KEY (id_prod_fornecido) REFERENCES Ped_Compra(id_prod_fornecido),
        CONSTRAINT fk_produto FOREIGN KEY (id_prod) REFERENCES Produtos(id_prod)
    );

*/

CREATE TABLE dbSalaoNovoEstilo.Usuarios (
    id_user INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_user VARCHAR(50) NOT NULL,
    email_user VARCHAR(100) NOT NULL UNIQUE, 
    senha_user VARCHAR(150) NOT NULL,
    cpf_user VARCHAR(14) NOT NULL UNIQUE
);

select * from dbSalaoNovoEstilo.Clientes;

select * from dbSalaoNovoEstilo.Produtos;

select * from dbSalaoNovoEstilo.Fornecedores;