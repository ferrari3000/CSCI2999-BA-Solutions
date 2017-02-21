drop database if exists recordstore;
create database if not exists recordstore;

use recordstore;

DROP TABLE IF EXISTS artist;

CREATE TABLE artist (
  ID int(10) primary key auto_increment, 
  name varchar(100) NOT NULL,
  created_date datetime default current_timestamp
  );


insert into artist (name, ID) values ('Local Natives',@ID), ('Metallica',@ID);


DROP TABLE IF EXISTS album;

CREATE TABLE album (
  ID int(10) primary key auto_increment, 
  name varchar(100) not null,
  created_date datetime default current_timestamp
  );
  
  insert into album (name, ID) 
values ('Gorilla Manor', @ID), ('Hummingbird', @ID),('Sunlit Youth', @ID),('Load', @ID), ('Reload', @ID),('Black Album', @ID);


DROP TABLE IF EXISTS album_artist;
  
  CREATE TABLE album_artist(   
artistID int(10),
albumID int(10),


PRIMARY KEY auto_increment(artistID, albumID), 
FOREIGN KEY (artistID) REFERENCES artist(ID),
FOREIGN KEY (albumID)  REFERENCES album(ID)
);
  

DROP TABLE IF EXISTS inventory;

CREATE TABLE inventory (
    inventory_id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    cost DECIMAL(5 , 2 ) NOT NULL,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_mod_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    stock INT(10) UNSIGNED DEFAULT NULL
);


# join both tables to get data
select * from album 


      