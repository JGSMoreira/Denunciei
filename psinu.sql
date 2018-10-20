drop database if exists psinu;
create database psinu;
use psinu;

create table user(
cod_user int primary key auto_increment,
nome_user varchar (300) not null,
email_user varchar(300) not null,
pass_user varchar (300) not null
);
insert into user values (null,'Administrador','admin@localhost.com','root');

create table bo(
  cod_bo int primary key auto_increment,

  nomeVitima_bo varchar(100) not null,
  sobrenomeVitima_bo varchar(200) not null,
  idadeVitima_bo int not null,
  enderecoVitima_bo varchar(400) not null,
  telefoneVitima_bo varchar(50) not null,
  profissaoVitima_bo varchar(100) not null,

  nomeSuspeito_bo varchar(100),
  sobrenomeSuspeito_bo varchar(200),
  idadeSuspeito_bo int,
  enderecoSuspeito_bo varchar(400),
  telefoneSuspeito_bo varchar(50),

  dataOcorrido_bo date not null,
  descricaoOcorrido_bo varchar(3000) not null,
  descricaoOcorrido_bo varchar(8000) not null,
  assuntoOcorrido_bo varchar(200) not null,

  cod_user int not null,
  foreign key (cod_user) references User(cod_user)

  descricaoOcorrido_bo varchar(500000) not null,
  assuntoOcorrido_bo varchar(200) not null
);

create table denuncia(
  cod_den int primary key auto_increment,
  titulo_den varchar(300) not null,
  email_den varchar(300) not null,
  descricao_den varchar(3000) not null,
  assunto_den varchar(200) not null
);
