CREATE DATABASE test;
 use test;
 
 CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(3),
    password VARCHAR(50),
    date TIMESTAMP
 );

 CREATE TABLE reviews (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    review VARCHAR(256),
    date TIMESTAMP
 )