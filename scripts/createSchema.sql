CREATE SCHEMA musicDB;
USE musicDB;

CREATE TABLE songlib (
    albumName varchar(255),
    genre varchar(255),
    artist varchar(255),
    songName varchar(255),
    releaseYear int,
    fileLocation varchar(255)
);