/*
Inserting tire data.
*/
INSERT INTO tires VALUES(1,'TireBrand1','22 inches','XYZ42','TireBrand1 Description about tire XYZ42 and features',1000);
INSERT INTO tires VALUES(2,'TireBrand2','24 inches','XYZ412','TireBrand2 Description about tire XYZ412 and features',400);
INSERT INTO tires VALUES(3,'TireBrand3','24 inches','XYZ4243','TireBrand3 Description about tire XYZ4243 and features',223);
INSERT INTO tires VALUES(4,'TireBrand4','25 inches','XYZ42xs','TireBrand4 Description about tire XYZ42xs and features',790);
INSERT INTO tires VALUES(5,'TireBrand1','23 inches','XYZ42vf','TireBrand1 Description about tire XYZ42vf and features',600);

/*
Inserting vehicle data.
*/
INSERT INTO vehicles VALUES(100,'2000','Make1','Model1','Body1','Additional information about 2000 Make1 Model1 Body1');
INSERT INTO vehicles VALUES(101,'2012','Make2','Model2','Body1','Additional information about 2012 Make2 Model2 Body1');
INSERT INTO vehicles VALUES(102,'1998','Make3','Model3','Body1','Additional information about 1998 Make3 Model3 Body1');
INSERT INTO vehicles VALUES(103,'2010','Make4','Model4','Body1','Additional information about 2010 Make4 Model4 Body1');
INSERT INTO vehicles VALUES(104,'2017','Make1','Model1','Body2','Additional information about 2017 Make1 Model1 Body2');

/*
Inserting relationship between tires and vehicles.
*/
INSERT INTO tirevehicleref VALUES(100,1);
INSERT INTO tirevehicleref VALUES(101,2);
INSERT INTO tirevehicleref VALUES(101,3);
INSERT INTO tirevehicleref VALUES(102,4);
INSERT INTO tirevehicleref VALUES(103,5);
INSERT INTO tirevehicleref VALUES(104,5);







