create database ru_web character set UTF8mb4 collate UTF8MB4_BIN;
USE ru_web;
CREATE USER 'ru_web'@'%' IDENTIFIED BY 'ru_web';
GRANT ALL PRIVILEGES ON ru_web.* TO ru_web@'%';
