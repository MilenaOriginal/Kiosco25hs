cd /xampp/mysql/bin

mysql -h localhost -u root -p 

drop database if exists kiosco;
Create database kiosco;

create table Producto(
	Codigo_Barra int(18),
    precio int(50),
    nombre varchar(50),
    descripcion varchar(200),
    primary key(nombre)
);

create table Empleado(
	nombre varchar(20),
    apellido int(25),
    cargo varchar(50),
    dni int(20),
    primary key(dni)
);

Create table contrasenas(
    pwd varchar(50),
    pwdDueno varchar(50),
    primary key(pwd)
);

create table analisis(
	fecha varchar(20),
    stock varchar(25),
    nombre_producto varchar(50),
    dni int(20),
    primary key(dni),
    primary key(nombre_producto),
    foreign key (dni) references Empleado(dni),
    foreign key (nombre_producto) references Producto(nombre)
);

insert into pagina values("a", "b");