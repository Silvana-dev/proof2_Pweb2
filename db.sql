CREATE DATABASE User_BD;
USE User_BD;

CREATE TABLE `user`(
    `id` INT AUTO_INCREMENT,
	`name` VARCHAR(100),
    `username` VARCHAR(100),
    `email` VARCHAR(100),
    `password` VARCHAR(32), 
    CONSTRAINT PRIMARY KEY(id)
);