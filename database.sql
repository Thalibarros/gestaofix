CREATE DATABASE IF NOT EXISTS gestaofix;
USE gestaofix;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL
);

INSERT INTO categoria (descricao) VALUES ('Manutenção'), ('Segurança'), ('Limpeza');

CREATE TABLE ocorrencia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_hora DATETIME NOT NULL,
    local VARCHAR(100) NOT NULL,
    id_categoria INT,
    id_usuario INT,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);