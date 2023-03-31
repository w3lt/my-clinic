# Groupe TP 3e année l'INSA 2022-2023

Author :
NGO Minh Phong
PHAM Tien Duy
TRUONG Cong Duc

# To test with database

NOTE : you must also have a user to connect to sql database (we use 'root' with password : 'qwerty')
Create a database name 'TP' with a table name 'doctor' : like this structure
# DOCTOR TABLE
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

# In MariaDB, create doctor table :

CREATE TABLE doctor (
id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
specialist enum('heart','neuron','skeleton'),
gender bool,
create_at date
);

# PATIENT TABLE :

+------------------+--------------+------+-----+---------+----------------+
| Field            | Type         | Null | Key | Default | Extra          |
+------------------+--------------+------+-----+---------+----------------+
| id               | int(11)      | NO   | PRI | NULL    | auto_increment |
| doctor_id        | int(11)      | NO   | MUL | NULL    |                |
| name             | varchar(255) | NO   |     | NULL    |                |
| email            | varchar(255) | NO   |     | NULL    |                |
| phone            | varchar(11)  | NO   |     | NULL    |                |
| health_condition | text         | YES  |     | NULL    |                |
+------------------+--------------+------+-----+---------+----------------+
# IN MariaDB, create patient table :

CREATE TABLE patient (
id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
doctor_id int NOT NULL,
name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
phone varchar(11) NOT NULL,
health_condition text,
FOREIGN KEY (doctor_id) REFERENCES doctor(id)
);

# TO Login

First create an account with Register
