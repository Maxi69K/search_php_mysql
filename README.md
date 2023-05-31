# search_php_mysql

## Create database

CREATE DATABASE usersdb;

## Create table

CREATE TABLE users_table (
	user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL
);

CREATE TABLE accounts_table (
	account_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL UNIQUE,
    card_number INT NOT NULL
);

ALTER TABLE accounts_table ADD FOREIGN KEY (user_id) REFERENCES users_table (user_id) ON UPDATE CASCADE ON DELETE RESTRICT;

INSERT INTO users_table VALUES
(NULL, 'Goran', 'Kekez'),
(NULL, 'Marko', 'Markovic');

INSERT INTO accounts_table VALUES
(NULL, 1, 545454),
(NULL, 2, 777777);
