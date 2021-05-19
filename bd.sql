create database psoftware;
use psoftware;

create table usuario (
    usuario_id int not null primary key auto_increment,
    usuario_nome VARCHAR(200) not null,
    usuario_email VARCHAR(200) not null,
    usuario_senha VARCHAR(200) not null,
    data_cadastro datetime
);