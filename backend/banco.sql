create table contato(
id int auto_increment primary key,
nome varchar(100),
email varchar(100),
telefone varchar(20),
servico varchar(100),
mensagem text
);

create table candidatura(
id int auto_increment primary key,
nome varchar(100),
email varchar(100),
telefone varchar(20),
cargo varchar(100),
experiencia text
);
