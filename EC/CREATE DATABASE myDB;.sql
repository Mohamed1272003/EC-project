CREATE DATABASE myDB;
CREATE TABLE users (
    name TEXT NOT NULL ,
     username VARCHAR(18) NOT NULL PRIMARY KEY,
     email VARCHAR(21) NOT NULL UNIQUE,
     password TEXT NOT NULL );
     CREATE TABLE products (
     id INT NOT NULL ,
     name TEXT NOT NULL,
     price INT NOT NULL,
     PRIMARY KEY (id)
);
INSERT INTO `products` (`id`, `name`, `price`) 
VALUES ('1', '', '12'), 
         ('2', 'GFG T-shirts', '20'), 
       ('3', 'GFG Hoodie', '50');
