CREATE TABLE Genero (
    gen_id INT AUTO_INCREMENT PRIMARY KEY,
    gen_nome VARCHAR(10)
);

INSERT INTO Genero (gen_nome) 
VALUES 
('masculino'),
('feminino'),
('outros');

CREATE TABLE Tipo (
    tip_id INT AUTO_INCREMENT PRIMARY KEY,
    tip_nome VARCHAR(30)
);

INSERT INTO Tipo (tip_nome) 
VALUES 
('Tecnologia'),
('Negocios'),
('Alimenticio'),
('Saude'),
('Contrucao'),
('Financeiro'),
('Consultoria'),
('Industria'),
('Energia'),
('Turismo'),
('Outros');

CREATE TABLE Status (
    sta_id INT AUTO_INCREMENT PRIMARY KEY,
    sta_nome VARCHAR(20)
);

INSERT INTO Status (sta_nome) 
VALUES 
('Ativo'),
('inativo');

CREATE TABLE Risco (
    ris_id INT AUTO_INCREMENT PRIMARY KEY,
    ris_nome VARCHAR(15)
);

INSERT INTO Risco (ris_nome) 
VALUES 
('Baixo'),
('Baixo-Medio'),
('Medio'),
('Alto-Medio'),
('Alto');

CREATE TABLE Fase (
    fas_id INT AUTO_INCREMENT PRIMARY KEY,
    fas_nome VARCHAR(20)
);

INSERT INTO Fase (fas_nome) 
VALUES 
('Planejamento'),
('Desenvolvimento'),
('Execucao'),
('Andamento');

CREATE TABLE Cargo (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    car_nome VARCHAR(15)
);

INSERT INTO Cargo (car_nome) 
VALUES 
('Investidor'),
('Empresario'),
('Assessor');

CREATE TABLE Usuario (
    usu_id INT AUTO_INCREMENT PRIMARY KEY,
    usu_nome VARCHAR(100),
    usu_email VARCHAR(50),
    usu_senha VARCHAR(255),
    usu_telefone VARCHAR(15),
    usu_dataNascimento DATE,
    usu_cpf CHAR(11),
    usu_genero INT,
    usu_cargo INT,
    usu_dataInicio DATETIME,
    FOREIGN KEY (usu_genero) REFERENCES Genero(gen_id),
    FOREIGN KEY (usu_cargo) REFERENCES Cargo(car_id)
);

CREATE TABLE Ideia (
    ide_id INT AUTO_INCREMENT PRIMARY KEY,
    ide_nome VARCHAR(100),
    ide_descricao VARCHAR(500),
    ide_empresario INT,
    ide_risco INT,
    ide_tipo INT,
    ide_cnpj CHAR(14),
    ide_fase INT,
    ide_dataIncio DATETIME,
    ide_status INT,
    ide_valorInicio FLOAT,
    ide_valorAtual FLOAT,
    ide_participacaoDisp INT,
    FOREIGN KEY (ide_empresario) REFERENCES Usuario(usu_id),
    FOREIGN KEY (ide_risco) REFERENCES Risco(ris_id),
    FOREIGN KEY (ide_tipo) REFERENCES Tipo(tip_id),
    FOREIGN KEY (ide_fase) REFERENCES Fase(fas_id),
    FOREIGN KEY (ide_status) REFERENCES Status(sta_id)
);


CREATE TABLE Carteira (
	crt_id int AUTO_INCREMENT PRIMARY KEY,
	crt_ideia int,
	crt_investidor int,
	crt_valorInvestido float,
	crt_dataInicio datetime,
	crt_participacao int,
	crt_receita float,
	foreign key (crt_ideia) references Ideia(ide_id),
	foreign key (crt_investidor) references Usuario(usu_id)
)
