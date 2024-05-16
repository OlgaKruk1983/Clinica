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

    use facturacion;

    use clinica;
    use facturacion;
    DROP TABLE facturacion;

    CREATE TABLE facturacion(
    nombre_paciente VARCHAR(20),
    fecha_actualiz DATE,
    nombre_farmacia VARCHAR(20),
    telefono_farmacia INT(15),
    nombre_medico VARCHAR(20),
    telefono_medico INT(15),
    nombre_medic VARCHAR(20),
    dosif INT(10),
    freq INT(10),
    medico VARCHAR(20),
    fecha_inicio DATE,
    fecha_final DATE,
    proposito VARCHAR(20),
    tetano VARCHAR(20),
    influenza VARCHAR(20),
    zostavax VARCHAR(20),
    meningitis VARCHAR(20),
    fiebre VARCHAR(20),
    polio VARCHAR(20)
    );

    use clinica;
    DROP TABLE historial;
     CREATE TABLE historial(
    nombre_paciente VARCHAR(20),
    codigo_paciente INT(10),
    fecha_actualiz DATE,
    nombre_farmacia VARCHAR(20),
    telefono_farmacia INT(15),
    nombre_medico VARCHAR(20),
    telefono_medico INT(15),
    nombre_medic VARCHAR(20),
    dosif INT(10),
    freq INT(10),
    medico VARCHAR(20),
    fecha_inicio DATE,
    fecha_final DATE,
    proposito VARCHAR(20),
    tetano VARCHAR(20),
    influenza VARCHAR(20),
    zostavax VARCHAR(20),
    meningitis VARCHAR(20),
    fiebre VARCHAR(20),
    polio VARCHAR(20)
    );

    CREATE TABLE progreso(
    nombre_paciente VARCHAR(20),
    fecha_nacim DATE,
    codigo_paciente INT(10),
    identif VARCHAR(20),
    fecha_cita DATE,
    fecha_revision DATE,
    nota1 VARCHAR(50),
    nota2 VARCHAR(50),
    nota3 VARCHAR(50)
    );

use clinica;
