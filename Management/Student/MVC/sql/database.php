CREATE DATABASE library_db;

USE library_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    role VARCHAR(20)
);
INSERT INTO users (name, email, password, role)
VALUES ('Student One', 'Tanim.khan60@gmail.com', '1234', 'student');

