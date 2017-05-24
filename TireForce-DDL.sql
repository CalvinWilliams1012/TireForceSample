/* 
SAMPLE DATABASE FOR TIREFORCE
Database contains simple vehicle tire relation.
@Author Calvin Williams
*/
DROP TABLE vehicles;
DROP TABLE tires;
DROP TABLE tireVehicleRef;

CREATE TABLE vehicles(
	id int NOT NULL,
    year YEAR(4),
    make VARCHAR(20),
    model VARCHAR(20),
    body VARCHAR(20),
    other VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE tires(
	id int NOT NULL,
    tireName VARCHAR(30),
    size VARCHAR(20),
    partNum VARCHAR(20),
    description VARCHAR(200),
    PRIMARY KEY (id)
);

CREATE TABLE tireVehicleRef(
	vehicleID int,
    tireID int,
    FOREIGN KEY (vehicleID) REFERENCES vehicles(id),
    FOREIGN KEY (tireID) REFERENCES tires(id)
);