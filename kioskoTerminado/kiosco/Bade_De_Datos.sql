cd /xampp/mysql/bin

mysql -h localhost -u root -p 

drop database if exists kiosco;
Create database kiosco;
use kiosco;

create table producto(
    id int auto_increment,
    precio float(50),
    nombre varchar(50),
    descripcion varchar(200),
    primary key(id)
);

create table empleado(
    id int auto_increment,
	nombre varchar(20),
    apellido varchar(50),
    cargo varchar(50),
    dni int(20),
    primary key(id)
);

Create table contrasenas(
    pwd varchar(50),
    pwdDueno varchar(50),
    primary key(pwd)
);

create table stock(
    id int AUTO_INCREMENT,
    id_empleado int,
    id_producto int, 
	fecha varchar(50),
    stock int,
    primary key(id),
    foreign key (id_producto) references producto(id),
    foreign key (id_empleado) references empleado(id)
);
insert into producto(precio, nombre, descripcion) values(250,'pancho','mostaza');
insert into contrasenas values("ingreso123", "soyElDueño");
insert into empleado(nombre, apellido,cargo,dni) values('Leandro', 'Aguilar', 'Empleado', 46959501);
insert into stock(id_empleado, id_producto, fecha, stock) values(1,1,'2022-10-14',5);



