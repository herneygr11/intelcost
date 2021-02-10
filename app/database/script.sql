-- DROP DATABASE intelcost_goods;

CREATE DATABASE intelcost_goods;

USE intelcost_goods;

CREATE TABLE goods (
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_real_estate int NOT NULL,
    city varchar(255) NOT NULL,
    address varchar(255) NOT NULL,
    phone varchar(255) NOT NULL,
    code varchar(255) NOT NULL,
    type varchar(255) NOT NULL,
    price varchar(255) NOT NULL
);