Create Database citas;
use citas;

create table PACIENTES (
	PacIdentificacion varchar(20) PRIMARY KEY,
	PacNombres varchar(50) NOT NULL,
	PacApellidos varchar(50) NOT NULL,
	PacFechaNacimiento date not null,
	PacSexo varchar(1) NOT NULL
) ENGINE = InnoDB;

create table TRATAMIENTOS (
	TraNumero INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
	TraFechaAsignado DATE NOT NULL,
	TraDescripcion TEXT NOT NULL,
	TraFechaInicio DATE NOT NULL,
	TraFechaFin DATE NOT NULL,
	TraObservaciones TEXT NOT NULL,
	TraPaciente VARCHAR(20) NOT NULL,
	FOREIGN KEY (TraPaciente) REFERENCES PACIENTES(PacIdentificacion) ON DELETE CASCADE
) ENGINE = InnoDB;

create table MEDICOS (
	MedIdentificacion VARCHAR(20) PRIMARY KEY,
	MedNombres VARCHAR(50) NOT NULL,
	MedApellidos VARCHAR(50) NOT NULL
)ENGINE = InnoDB;

create table CONSULTORIOS (
	ContNumero INT UNSIGNED PRIMARY KEY,
	ConNombre VARCHAR(50) NOT NULL
)ENGINE = InnoDB;

create table CITAS (
	CitNumero INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
	CitFecha DATE NOT NULL,
	CitHora TIME NOT NULL,
	CitPaciente VARCHAR(20) NOT NULL,
	CitMedico VARCHAR(20) NOT NULL,
	CitConsultorio INT UNSIGNED NOT NULL ,
	CitEstado VARCHAR(20) NOT NULL,
	CitObservaciones TEXT NOT NULL,
	FOREIGN KEY (CitPaciente) REFERENCES PACIENTES(PacIdentificacion) ON DELETE CASCADE,
	FOREIGN KEY (CitMedico) REFERENCES MEDICOS(MedIdentificacion),
	FOREIGN KEY (CitConsultorio) REFERENCES CONSULTORIOS(ContNumero)
)ENGINE = InnoDB;

create table horas(
	hora TIME PRIMARY Key
)

INSERT INTO `pacientes` (`PacIdentificacion`, `PacNombres`, `PacApellidos`, `PacFechaNacimiento`, `PacSexo`) VALUES ('102030', 'Jose', 'Perez', '1978-08-14', 'm'), ('708090', 'Rosa', 'Diaz', '1978-08-14', 'f')
INSERT INTO `medicos` (`MedIdentificacion`, `MedNombres`, `MedApellidos`) VALUES ('12345', 'Camilo', 'Robledo'), ('67890', 'Esteban', 'Salgado');
INSERT INTO `consultorios` (`ContNumero`, `ConNombre`) VALUES ('1', 'Consultas1'), ('2', 'Tratamientos2');
INSERT INTO `horas` (`hora`) VALUES ('08:00:00'), ('08:20:00'), ('08:40:00'), ('09:00:00'), ('09:20:00'), ('09:40:00'), ('10:00:00'), ('10:20:00'), ('10:40:00'), ('11:00:00'), ('11:20:00'), ('11:40:00');