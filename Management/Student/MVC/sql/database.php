CREATE DATABASE library_db;

USE library_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    
);
INSERT INTO users (name, email, password)
VALUES ('Student One', 'Tanim.khan60@gmail.com', '1234');

