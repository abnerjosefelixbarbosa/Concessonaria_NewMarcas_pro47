create database concessionaria;

use concessionaria;

create table if not exists carro (
Idcarro int primary key auto_increment,
Nome_marca varchar (25) not null,
Nome_modelo varchar (25) not null,
Cor varchar (25) not null,
Ano int not null,
Valor double not null,
KM int not null,
Combustivel varchar (10) not null,
Potencia double not null,
Cambio varchar (15) not null
)default charset = utf8;
