CREATE TABLE contactsTable
(
  id           int       NOT NULL AUTO_INCREMENT,
  name         varchar(50)    NOT NULL ,
  address      varchar(500)   NOT NULL ,
  city         varchar(20)    NOT NULL ,
  state        varchar(20)    NOT NULL ,
  phone        varchar(13)    NOT NULL ,
  email        varchar(100)   NOT NULL ,
  dob          varchar(11)    NOT NULL ,
  contacts     varchar(50)    NOT NULL ,
  age          varchar(10)    NOT NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;