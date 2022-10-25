CREATE DATABASE IF NOT EXISTS lana;

CREATE TABLE IF NOT EXISTS tbl_user(
    id_u int(11) PRIMARY KEY AUTO_INCREMENT,
    username_u varchar(15) NOT NULL UNIQUE,
    bio_u var
