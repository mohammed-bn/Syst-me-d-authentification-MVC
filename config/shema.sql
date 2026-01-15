CREATE DATABASE Systeme_Auth;
use  Systeme_Auth;
CREATE Table users(
    id int PRIMARY KEY NOT NULL,
    name VARCHAR(50),
    email varchar(200),
    password varchar(100),
    role_id int,
    Foreign Key (role_id) REFERENCES role(id)
);

CREATE Table role(
    id int PRIMARY KEY NOT NULL,
    title varchar(20)
);