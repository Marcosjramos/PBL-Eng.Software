/*Script de criacao do Homerdb*/

create database homerDB 
default character set utf8
default collate utf8_general_ci;

use homerdb;

CREATE TABLE adm (
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(40) UNIQUE,
    senha VARCHAR(16) UNIQUE,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

CREATE TABLE endereco (
    id INT NOT NULL AUTO_INCREMENT,
    estado VARCHAR(30),
    cidade VARCHAR(50),
    bairro VARCHAR(40),
    rua VARCHAR(40),
    numero VARCHAR(6),
    cLatitude float,
    cLongitude float,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

CREATE TABLE clientes (
    id INT NOT NULL AUTO_INCREMENT,
    idEndereco int not null,
    nome VARCHAR(60),
    email VARCHAR(40) UNIQUE,
    senha VARCHAR(16) UNIQUE,
    cpf VARCHAR(15) UNIQUE,
    sexo enum ('M', 'F'),
    telefone VARCHAR(15),
    dataCadastro timestamp default current_timestamp(),
    PRIMARY KEY (id),
    foreign key (idEndereco)
		references endereco(id)
)  ENGINE=INNODB;

CREATE TABLE prestadores (
    id INT NOT NULL AUTO_INCREMENT,
    idCliente INT NOT NULL,
    areaAtuacao VARCHAR(30),
    tipoConta ENUM('normal', 'profissional') DEFAULT 'normal',
    PRIMARY KEY (id),
    FOREIGN KEY (idCliente)
        REFERENCES clientes (id)
)  ENGINE=INNODB;

CREATE TABLE contratacao (
    id INT NOT NULL AUTO_INCREMENT,
    idCliente INT NOT NULL,
    idPrestador INT NOT NULL,
    idEndereco INT NOT NULL,
    dataInicio DATE,
    dataFim DATE,
    estadoServico BOOLEAN,
    valor DECIMAL(5 , 2 ),
    PRIMARY KEY (id),
    foreign key (idCliente) references  clientes (id),
    foreign key (idPrestador) references clientes (id),
    foreign key (idEndereco) references endereco(id)
)  ENGINE=INNODB;

CREATE TABLE denuncia (
    id INT NOT NULL AUTO_INCREMENT,
    idDenunciante INT NOT NULL,
    idDenunciado int not null,
    dataDenuncia DATE,
    descricao VARCHAR(140),
    resultado VARCHAR(140),
    PRIMARY KEY (id),
    FOREIGN KEY (idDenunciante)
        REFERENCES clientes (id),
	FOREIGN KEY (idDenunciado)
        REFERENCES clientes (id)
)  ENGINE=INNODB;

CREATE TABLE avaliacao (
    id INT NOT NULL AUTO_INCREMENT,
    idAvaliador INT NOT NULL,
    idAvaliado INT NOT NULL,
    stars smallint,
    comentario VARCHAR(140),
    PRIMARY KEY (id),
    FOREIGN KEY (idAvaliador)
        REFERENCES clientes (id),
	FOREIGN KEY (idAvaliado)
        REFERENCES clientes (id)
)  ENGINE=INNODB;

CREATE TABLE logUsuario (
    id INT NOT NULL AUTO_INCREMENT,
    idCliente INT NOT NULL,
    dataLog timestamp default current_timestamp(),
    operacao VARCHAR(50),
    PRIMARY KEY (id)
    
)  ENGINE=INNODB;

CREATE TABLE propaganda (
    id INT NOT NULL AUTO_INCREMENT,
    nomeEmpresa varchar(80),
    cnpj varchar(15),
    dataValidade date,
    tempoDuracao tinyint,
    qtdExibicao tinyint,
    qtdExibido tinyint,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

CREATE TABLE anuncios (
    id INT NOT NULL AUTO_INCREMENT,
    idCliente INT NOT NULL,
    titulo VARCHAR(60),
    descricao VARCHAR(140),
    valor decimal (5, 2),
    PRIMARY KEY (id),
    FOREIGN KEY (idCliente)
        REFERENCES clientes (id)
)  ENGINE=INNODB;

CREATE TABLE favoritos (
    id INT NOT NULL AUTO_INCREMENT,
    idCliente INT NOT NULL,
    idFavorito INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idCliente)
        REFERENCES clientes (id),
    FOREIGN KEY (idFavorito)
        REFERENCES clientes (id)
)  ENGINE=INNODB;

CREATE TABLE historico (
    id INT NOT NULL AUTO_INCREMENT,
    idCliente INT NOT NULL,
    idContratacao INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idCliente)
        REFERENCES clientes (id),
    FOREIGN KEY (idContratacao)
        REFERENCES contratacao (id)
)  ENGINE=INNODB;

