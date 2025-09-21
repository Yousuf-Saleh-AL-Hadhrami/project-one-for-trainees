 CREATE TABLE users(
    id INT PRIMARY KEY,
    name VARCHAR(100),
    username VARCHAR(100),
    password VARCHAR(100),
    role enum('admin','user') DEFAULT 'user'
 );