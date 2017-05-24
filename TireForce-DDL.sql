/* 
SAMPLE DATABASE FOR TIREFORCE
Database contains simple vehicle tire relation.
@Author Calvin Williams
*/

CREATE TABLE vehicles(
	id int NOT NULL,
    year YEAR(4),
    make VARCHAR(20),
    model VARCHAR(20),
    body VARCHAR(20),
    other VARCHAR(20),
    tireID int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (tireID) REFERENCES tires(id)
);

CREATE TABLE tires(
	id int NOT NULL,
    tireName VARCHAR(30),
    size VARCHAR(20),
    partNum VARCHAR(20),
    description VARCHAR(200),
    PRIMARY KEY (id)
);