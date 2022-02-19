CREATE SCHEMA ex_diagnosticoDB;
USE ex_diagnosticoDB;

DROP TABLE IF EXISTS persona;

CREATE TABLE IF NOT EXISTS persona(
    idPersona       INT          NOT NULL     PRIMARY KEY     AUTO_INCREMENT,
    nombre          VARCHAR(50)  NOT NULL,
    apellidoPaterno VARCHAR(50)  NOT NULL,
    apellidoMaterno VARCHAR(50)  NOT NULL,
    sexo            VARCHAR(1)   NOT NULL,
    direccion       VARCHAR(100) NOT NULL,
    correo          VARCHAR(50)  NOT NULL,
    lada            VARCHAR(5)   NOT NULL,
    telefono        VARCHAR(10)  NOT NULL
);

SELECT * FROM persona;
SELECT nombre, apellidoPaterno, apellidoMaterno, sexo, telefono, lada, correo, direccion FROM persona ORDER BY persona.idPersona;
