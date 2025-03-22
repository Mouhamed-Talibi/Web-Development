CREATE DATABASE IF NOT EXISTS 'rest_api';
USE 'rest_api';

-- Creating users table : 
CREATE TABLE IF NOT EXISTS 'users'(
    'id' INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    'first_name' VARCHAR(20) NOT NULL,
    'last_name' VARCHAR(20) NOT NULL
);

-- creating prodcuts table : 
CREATE TABLE IF NOT EXISTS 'products'(
    'id' INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    'name' VARCHAR(30) NOT NULL,
    'description' TEXT DEFAULT 'Product Has No Description',
    'price' FLOAT,
    'creation_date' DATETIME DEFAULT CURRENT_TIMESTAMP()
);