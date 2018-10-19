drop database if exists psinu;
create database psinu;
use psinu;

create table user(
cod_user int primary key auto_increment,
nome_user varchar (200) not null,
pass_user varchar (300) not null,
);
insert into user values ('admin','root');

  
