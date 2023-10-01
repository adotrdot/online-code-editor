DROP DATABASE IF EXISTS responsi1_pemweb;
CREATE DATABASE responsi1_pemweb;

USE responsi1_pemweb;

CREATE TABLE akun (
    nim VARCHAR(255) NOT NULL PRIMARY KEY,
    password VARCHAR(255)
);

INSERT INTO akun VALUES (
    "H1D021039",
    "$2y$10$7BBmIjwBUzcjgaYQ.PR.9.lp8EX.6QteuQOC9sWz8Ci4aYWIHOnpK"
);