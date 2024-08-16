create database livrariaTI18N;
drop database livrariaTI18N;
use livrariaTI18N;

create table Usuario(
	cpf varchar(13) not null primary key,
    nome varchar(100) not null,
    endereco varchar(100) not null,
    telefone varchar(13) not null,
    dtNascimento date not null,
    login varchar(100) not null,
    senha varchar(100) not null
)engine =InnoDB;

create table Livro(
	codigo int not null primary key auto_increment,
    nome varchar(100) not null,
    autor varchar(100) not null,
    quantidade int not null,
    valor decimal(5, 2) not null
)engine = InnoDB;

create table Compra(
	codigo int not null primary key auto_increment,
    cartaoCredito int not null,
    cpf varchar(13) not null,
    dataCompra date not null,
    codigoLivro int not null
)engine = InnoDB;

select * from compra;
select * from livro;
truncate table livro;
create table Reserva(
	codigo int not null primary key auto_increment,
    cpf varchar(13) not null,
    codigoLivro int not null,
	dataReserva date not null
)engine = InnoDB;

alter table Compra add constraint usuarioCompra foreign key(cpf) references Usuario(cpf);
alter table Reserva add constraint usuarioReserva foreign key(cpf) references Usuario(cpf);
alter table Compra add constraint livroCompra foreign key(codigoLivro) references Livro(codigo);
alter table Reserva add constraint livroReserva foreign key(codigoLivro) references Livro(codigo);

insert into Livro values
	(1, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 2, 50.00);

select * from compra;


