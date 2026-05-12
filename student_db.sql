CREATE DATABASE student_db;

USE student_db;

CREATE TABLE students (
  
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    middlename VARCHAR(100),
    lastname VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    address TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);