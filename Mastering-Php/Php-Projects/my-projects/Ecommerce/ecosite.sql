CREATE DATABASE IF NOT EXISTS ecosite;
USE ecosite;

-- Creating admin table: 
CREATE TABLE IF NOT EXISTS admin(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(40) NOT NULL UNIQUE,
    email VARCHAR(80) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    registration_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Creating category table: 
CREATE TABLE IF NOT EXISTS category(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    icon VARCHAR(50) NOT NULL
);

-- Creating product table: 
CREATE TABLE IF NOT EXISTS product (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE, 
    description TEXT DEFAULT 'This Product Has No Description',
    price DECIMAL(10,2) NOT NULL,
    discount INT NOT NULL DEFAULT 0,
    image VARCHAR(100) NOT NULL,
    category_id INT NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE
);

-- Creating users table: 
CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    email VARCHAR(80) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    registration_date DATE DEFAULT CURRENT_DATE()
);

-- Creating orders table: 
CREATE TABLE IF NOT EXISTS orders(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
