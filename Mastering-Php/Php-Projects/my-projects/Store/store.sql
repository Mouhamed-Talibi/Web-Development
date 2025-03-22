-- create database store : 
CREATE DATABASE IF NOT EXISTS store;
USE store;

-- create table users :
CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    f_name VARCHAR(20) NOT NULL,
    u_name VARCHAR(20) NOT NULL,
    email VARCHAR(70) NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- create my_shops table :
CREATE TABLE IF NOT EXISTS my_shops(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    price INT NOT NULL ,
    quantity INT NOT NULL,
    total_price INT NOT NULL
);

-- create products table : 
CREATE TABLE IF NOT EXISTS products(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    category VARCHAR(20) NOT NULL,
    price VARCHAR(10) NOT NULL,
    image VARCHAR(100) NOT NULL
);