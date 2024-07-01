USE Freight;
DROP TABLE IF EXISTS Freight;
CREATE table if NOT EXISTS Freight(
freightweight int(5) NOT null,
freightId varchar(9) PRIMARY KEY,
freightdestination varchar(50),
Arrival_time date,
DATECREATED DATETIME NOT NULL DEFAULT current_timestamp(),
DATEUPDATED DATETIME NOTNULL DEFAULT current_timestamp() ON UPDATE 	current_timestamp()

 );
  