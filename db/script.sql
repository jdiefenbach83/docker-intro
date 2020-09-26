CREATE DATABASE IF NOT EXISTS
  `docker-intro`;

USE `docker-intro`;

CREATE TABLE IF NOT EXISTS products(
  id INT(11) AUTO_INCREMENT,
  name VARCHAR(255),
  price DECIMAL(10, 2),
  PRIMARY KEY (id)
);

INSERT INTO products VALUES (0, 'Curso Front-end especialista', 2500);
INSERT INTO products VALUES (0, 'Curso JS Fullstack', 900);