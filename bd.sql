create database eispdm_sis;
create table ROL(
ID INT PRIMARY KEY AUTO_INCREMENT,
NOMBRE VARCHAR(100)
);
create table USUARIOS(
 ID INT PRIMARY KEY AUTO_INCREMENT,
 NOMBRES VARCHAR(200),
 AP_PATERNO VARCHAR (50),
 AP_MATERNO VARCHAR(50),
 CORREO VARCHAR(200),
 CI VARCHAR(20),
 CLAVE VARCHAR(1000),
 ESTADO BINARY,
 FECHA_REGISTRO DATETIME,
 FECHA_BAJA DATETIME,
 ID_ROL INT,   
 FOREIGN KEY(ID_ROL) REFERENCES ROL(ID)   
);


ALTER TABLE ROL ADD COLUMN DESCRIPCION VARCHAR(350);

INSERT INTO ROL(NOMBRE,DESCRIPCION) VALUES('ADMINISTRADOR','Tiene acceso a todo el sistema.');
INSERT INTO ROL(NOMBRE,DESCRIPCION) VALUES('ENCARGADO GABINETE','Encargado de realizar los inventarios de laboratorios, y de aprobar los prestamos de equipos a docentes y estudiantes.');
INSERT INTO ROL(NOMBRE,DESCRIPCION) VALUES('JEFE', 'Hace seguimiento al sistema sin realizar modificación ni solicitudes.');
INSERT INTO ROL(NOMBRE,DESCRIPCION) VALUES('DOCENTE','Realiza pedido de equipos y otros materiales para el desarrollo de práticas en laboratorios.');
INSERT INTO ROL(NOMBRE,DESCRIPCION) VALUES('ESTUDIANTE','Estudiante de la carrera con matricula vigente.');