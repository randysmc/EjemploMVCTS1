CREATE DATABASE ejercicio_mvc;

USE ejercicio_mvc;

CREATE TABLE personas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    genero ENUM('Masculino', 'Femenino') NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    activo BOOLEAN NOT NULL DEFAULT TRUE
);


INSERT INTO personas(nombre, apellido, genero, email, password)
VALUES ('Juan', 'Carrillo', 'Masculino', "juan@gmail.com", "password");