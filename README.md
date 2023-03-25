# Groupe TP 3e année l'INSA 2022-2023

Author :
NGO Minh Phong
PHAM Tien Duy
TRUONG Cong Duc

# To test with database

NOTE : you must also have a user to connect to sql database (we use 'root' with password : 'qwerty')
Create a database name 'TP' with a table name 'doctor' : like this structure
+------------+-----------------------------------+------+-----+---------+----------------+
| Field      | Type                              | Null | Key | Default | Extra          |
+------------+-----------------------------------+------+-----+---------+----------------+
| id         | int(11)                           | NO   | PRI | NULL    | auto_increment |
| name       | varchar(255)                      | NO   |     | NULL    |                |
| email      | varchar(255)                      | NO   | UNI | NULL    |                |
| password   | varchar(255)                      | NO   |     | NULL    |                |
| specialist | enum('heart','neuron','skeleton') | YES  |     | NULL    |                |
| gender     | tinyint(1)                        | YES  |     | NULL    |                |
| create_at  | date                              | YES  |     | NULL    |                |
+------------+-----------------------------------+------+-----+---------+----------------+
In MariaDB, use :
CREATE TABLE doctor (
id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
specialist enum('heart','neuron','skeleton'),
gender bool,
create_at date
);

# TO Login

First create an account with Register
