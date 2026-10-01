DROP TABLE IF EXISTS inscripciones CASCADE;
DROP TABLE IF EXISTS materias CASCADE;
DROP TABLE IF EXISTS estudiantes CASCADE;


CREATE TABLE estudiantes (
    id_estudiante SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    edad INTEGER NOT NULL
);

CREATE TABLE materias (
    id_materia SERIAL PRIMARY KEY,
    nombre_materia VARCHAR(100) NOT NULL,
    creditos INTEGER NOT NULL
);

CREATE TABLE inscripciones (
    id_inscripcion SERIAL PRIMARY KEY,
    id_estudiante INTEGER NOT NULL,
    id_materia INTEGER NOT NULL,
    FOREIGN KEY (id_estudiante) REFERENCES estudiantes(id_estudiante) ON DELETE CASCADE,
    FOREIGN KEY (id_materia) REFERENCES materias(id_materia) ON DELETE CASCADE
);


INSERT INTO estudiantes (nombre, correo, edad) VALUES 
('Isabel Perez', 'IsaP@gmail.com', 20),
('ManuelSanchez123', 'Manuelito@gmail.com', 22);


INSERT INTO materias (nombre_materia, creditos) VALUES 
('Lenguajes de Programación', 4),
('Matematicas 4', 3);

INSERT INTO inscripciones (id_estudiante, id_materia) VALUES 
(1, 1),
(2, 1);