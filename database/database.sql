DROP DATABASE IF EXISTS api;

CREATE DATABASE api;

USE api;

CREATE TABLE api (
    `id`                    INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name`                  VARCHAR(100) NOT NULL,
    `address`               VARCHAR(100) NOT NULL,
    `phone`                 VARCHAR(50) NOT NULL,
    `capitalization`        DECIMAL(10,2) NOT NULL,
    `loan_balance`          DECIMAL(10,2) NOT NULL
);

