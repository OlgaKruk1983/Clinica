CREATE DATABASE clinica;
USE clinica;
CREATE TABLE pacientes(
    codigo int(10),
    nombre VARCHAR(30),
    habitacion int(10)
);

select * FROM pacientes;
use clinica;
CREATE TABLE facturacion(
    clinica VARCHAR(20),
    direccion_clinica VARCHAR(100),
    fecha_inicio int(10),
    fecha_final int(10),
    nombre_cliente VARCHAR(20),
    direccion_cliente VARCHAR(100),
    precio_consulta int(10)
    );