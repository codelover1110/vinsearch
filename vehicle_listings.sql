CREATE TABLE vehicle_listings (
  vin varchar(17) NOT NULL,
  year int(4) NOT NULL,
  make varchar(50) NOT NULL,
  model varchar(50) NOT NULL,
  price varchar(50) NOT NULL,
  miles varchar(50) NOT NULL,
  zip varchar(50) NOT NULL,
  PRIMARY KEY (vin)
);