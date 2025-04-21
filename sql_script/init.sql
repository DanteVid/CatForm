GRANT ALL PRIVILEGES ON *.* TO 'abc'@'%' IDENTIFIED BY 'abc123';
CREATE DATABASE catApp;
USE catApp;
CREATE TABLE results(
    id int AUTO_INCREMENT PRIMARY KEY,
    username varchar(50),
    email varchar(50),
    age int,
    catBreedSelect int,
    catmyth int,
    catslove varchar(50),
    coment varchar(200)
);

