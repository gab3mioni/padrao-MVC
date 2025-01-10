CREATE DATABASE IF NOT EXISTS {{DB_NAME}};

USE {{DB_NAME}};

CREATE TABLE users
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);
