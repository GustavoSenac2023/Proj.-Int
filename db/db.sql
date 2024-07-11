CREATE TABLE Livro (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(20),
    autor VARCHAR(20)
);

CREATE TABLE Exemplar_Retirada (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    status VARCHAR(20),
    data DATE,
    fk_Pessoa_id INTEGER,
    fk_Livro_id INTEGER
);

CREATE TABLE Pessoa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(20),
    genero VARCHAR(20)
);
 
ALTER TABLE Exemplar_Retirada ADD CONSTRAINT FK_Exemplar_Retirada_2
    FOREIGN KEY (fk_Pessoa_id)
    REFERENCES Pessoa (id);
 
ALTER TABLE Exemplar_Retirada ADD CONSTRAINT FK_Exemplar_Retirada_3
    FOREIGN KEY (fk_Livro_id)
    REFERENCES Livro (id)
    ON DELETE RESTRICT;