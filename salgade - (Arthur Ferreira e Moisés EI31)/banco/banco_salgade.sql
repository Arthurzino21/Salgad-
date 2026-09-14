CREATE DATABASE IF NOT EXISTS salgade;
USE salgade;

CREATE DATABASE IF NOT EXISTS salgade;
USE salgade;

CREATE TABLE IF NOT EXISTS usuarios (
    cpf VARCHAR(20) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(150),
    bairro VARCHAR(80),
    cidade VARCHAR(80),
    estado VARCHAR(2),
    cep VARCHAR(10)
);


CREATE TABLE IF NOT EXISTS logins (
    login VARCHAR(50) PRIMARY KEY,
    senha VARCHAR(32) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    FOREIGN KEY (cpf) REFERENCES usuarios(cpf)
);


CREATE TABLE IF NOT EXISTS vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    num INT NOT NULL,
    cliente VARCHAR(100),
    pagamento VARCHAR(30),
    data_venda DATETIME,
    nome_cartao VARCHAR(100),
    total DECIMAL(10,2)
);

CREATE TABLE IF NOT EXISTS vendas_itens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    venda_id INT NOT NULL,
    produto VARCHAR(100),
    quantidade INT,
    valor DECIMAL(10,2),
    subtotal DECIMAL(10,2),
    FOREIGN KEY (venda_id) REFERENCES vendas(id)
);
