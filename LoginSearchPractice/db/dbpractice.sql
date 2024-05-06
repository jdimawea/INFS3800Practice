-- Dropping User and DB if exists
DROP USER IF EXISTS 'practice'@'localhost';
-- Use Single tic ``
DROP DATABASE IF EXISTS `dbpractice`;

-- Creating DB
CREATE DATABASE IF NOT EXISTS `dbpractice`;
USE `dbpractice`;

-- Creating user table
CREATE TABLE IF NOT EXISTS `users`(

	`uname` VARCHAR(50) PRIMARY KEY,
	`pword` VARCHAR(50) NOT NULL

);

-- Inserting into table `users`
INSERT INTO `users`
(`uname`, `pword`)
VALUES 
('jma', 'jma123'),
('joe', 'joe123'),
('john', 'john123'),
('jesh', 'kesh')
;

-- Creating new table
CREATE TABLE IF NOT EXISTS `colors`(
	`color` VARCHAR(50) PRIMARY KEY,
	`poem` VARCHAR(255) NOT NULL
);

-- Inserting Data into colors table
INSERT INTO `colors`
(`color`, `poem`)
VALUES
('Purple', 'Purple Rocks!'), 
('Pink', 'Pink is COOOL!'),
('Red', 'Red Dead'),
('Yellow', 'PTSD'),
('Orange', 'Orange of the Juice')
;

-- Creating user with privileges 
CREATE USER 'practice'@'localhost' IDENTIFIED BY 'practice123';
GRANT ALL PRIVILEGES ON `dbpractice`.* TO 'practice'@'localhost';
FLUSH PRIVILEGES;