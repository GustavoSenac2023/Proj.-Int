CREATE TABLE Livro(
    id INTEGER PRIMARY KEY,
    titulo VARCHAR(20),
    autor VARCHAR(20),
    quant INTEGER
); 
CREATE TABLE Exemplar_Retirada(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    STATUS VARCHAR(1),
	DATA DATE,
    fk_Pessoa_id varchar(14),
    fk_Livro_id INTEGER
);
CREATE TABLE Pessoa(
    cpf varchar(14) PRIMARY KEY,
    nome VARCHAR(20),
    genero VARCHAR(20)
); 
ALTER TABLE
    Exemplar_Retirada ADD CONSTRAINT FK_Exemplar_Retirada_2 FOREIGN KEY(fk_Pessoa_id) REFERENCES Pessoa(cpf);
ALTER TABLE
    Exemplar_Retirada ADD CONSTRAINT FK_Exemplar_Retirada_3 FOREIGN KEY(fk_Livro_id) REFERENCES Livro(id) ON DELETE RESTRICT;